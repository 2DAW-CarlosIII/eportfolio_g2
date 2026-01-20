<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Matricula;
use Illuminate\Http\Request;
use App\Http\Resources\MatriculaResource;
use App\Http\Resources\UserResource;
use App\Models\User;

class MatriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = ModuloFormativo::query();
        if($query) {
            $query->orWhere('nombre', 'like', '%' .$request->q . '%');
        }

        return ModuloFormativo::collection(
            $query->orderBy($request->_sort ?? 'id', $request->_order ?? 'asc')
            ->paginate($request->perPage)
        );
        return MatriculaResource::collection(
            Matricula::orderBy($request->_sort ?? 'id', $request->_order ?? 'asc')
            ->paginate($request->perPage));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,$parent_id)
    {
        $matricula = $request->all();

        $matricula['modulo_formativo_id'] = $parent_id;

        $matriculas = Matricula::create($matricula);

        return new MatriculaResource($matriculas);
    }

    /**
     * Display the specified resource.º
     */
    public function show(Matricula $matricula)
    {
        return new MatriculaResource($matricula);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Matricula $matricula)
    {
        $matriculaData = json_decode($request->getContent(), true);
        $matricula->update($matriculaData);

        return new MatriculaResource($matricula);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Matricula $matricula)
    {
        try {
            $matricula->delete();
            return response()->json(null, 204);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error: ' . $e->getMessage()
            ], 400);
        }
    }
}
