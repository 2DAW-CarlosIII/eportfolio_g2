<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Matricula;
use Illuminate\Http\Request;
use App\Http\Resources\MatriculaResource;
use App\Http\Resources\ModuloFormativoResource;
use App\Http\Resources\UserResource;
use App\Models\ModuloFormativo;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MatriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Matricula::query();
        if ($request) {
            $query->orWhere('id', 'like', '%' . $request->q . '%');
        }

        return MatriculaResource::collection(
            $query->orderBy($request->_sort ?? 'id', $request->_order ?? 'asc')
                ->paginate($request->perPage)
        );
    }


    public function modulosMatriculados (){
        $modulos = ModuloFormativo::whereHas('matriculas', function ($query) {
            $query->where('estudiante_id', Auth::id()); })->get();
            return ModuloFormativoResource::collection($modulos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Matricula $parent_id)
    {
        $validated = $request->validate([
            'modulo_formativo_id' =>['required', 'integer', 'exists:modulos_formativos,id'],
            'estudiante_id' => ['required', 'integer', 'exists:users,id'],
        ]);



        $matriculas = Matricula::create($validated);

        return new MatriculaResource($matriculas);
    }

    /**
     * Display the specified resource.º
     */
    public function show(ModuloFormativo $parent_id, Matricula $id)
    {
        return new MatriculaResource($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ModuloFormativo $parent_id, Matricula $id)
    {
        $matriculaData = json_decode($request->getContent(), true);
        $id->update($matriculaData);

        return new MatriculaResource($id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ModuloFormativo $parent_id, Matricula $id)
    {
        try {
            $id->delete();
            return response()->json(['message' => 'Matricula eliminado correctamente'], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error: ' . $e->getMessage()
            ], 400);
        }
    }
}
