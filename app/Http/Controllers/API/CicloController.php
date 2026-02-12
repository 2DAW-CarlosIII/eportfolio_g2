<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CicloResource;
use App\Models\CicloFormativo;
use App\Models\FamiliaProfesional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CicloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = CicloFormativo::query();
        return CicloResource::collection(
            $query->when($request->search, function ($query) use ($request) {
                $query->where('nombre', 'like', '%' .$request->search . '%');
            })
            ->orderBy($request->sort ?? 'id', $request->order ?? 'asc')
                ->paginate($request->per_page ?? 15)
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,FamiliaProfesional $parent_id)
    {
        //abort_if ($request->user()->cannot('create', CicloFormativo::class), 403);
        $cicloData = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'codigo' => 'required|string|max:50|unique:ciclos_formativos,codigo',
            'grado' => 'required|string|in:basico, medio, superior',
        ]);
        $cicloData['familia_profesional_id']=$parent_id->id;
        $ciclo = CicloFormativo::create($cicloData);

        return new CicloResource($ciclo);
    }

    /**
     * Display the specified resource.
     */
    public function show($parent_id, FamiliaProfesional $familiaProfesional, CicloFormativo $id)
    {
        return new CicloResource($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,FamiliaProfesional $parent_id, CicloFormativo $id)
    {

        //abort_if ($request->user()->cannot('update', $id), 403);
        $cicloData['familia_profesional_id']=$parent_id->id;
        $cicloData = json_decode($request->getContent(), true);


         $id->update($cicloData);
        return new CicloResource($id);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($parent_id, CicloFormativo $id,Request $request)
    {
        try {
            //abort_if ($request->user()->cannot('delete', $id), 403);
            $id->delete();
            return response()->json(['message' => 'CicloFormativo eliminado correctamente'], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error: ' . $e->getMessage()
            ], 400);
        }
    }
}
