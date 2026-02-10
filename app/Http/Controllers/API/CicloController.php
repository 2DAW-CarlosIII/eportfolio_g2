<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CicloResource;
use App\Models\CicloFormativo;
use App\Models\FamiliaProfesional;
use Illuminate\Http\Request;

class CicloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = CicloFormativo::query();
        if ($request->has('search')) {
            $query->orWhere('nombre', 'like', '%' . $request->search . '%');
        }

        return CicloResource::collection(

            $query->orderBy($request->_sort ?? 'id', $request->_order ?? 'asc')
                ->paginate($request->perPage)
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $parent_id, CicloFormativo $id)
    {

        $request->validate([
            'nombre' => 'required|string',
            'codigo' => 'required|string|unique:ciclos_formativos,codigo',
            'grado' => 'required|in:G.M.,G.S.,C.E. (G.M.),C.E. (G.S.),BÁSICA,basico,medio,superior',
            'descripcion' => 'nullable|string',
        ]);

        abort_if($request->user()->cannot('store', $id), 403, 'No tienes permiso para actualizar este ciclo formativo.');



        $cicloData = json_decode($request->getContent(), true);

        $cicloData['familia_profesional_id'] = $parent_id;

        $ciclo = CicloFormativo::create($cicloData);

        return new CicloResource($ciclo);
    }

    /**
     * Display the specified resource.
     */
    public function show($parent_id, CicloFormativo $id)
    {
        return new CicloResource($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $parent_id, CicloFormativo $id)
    {

        abort_if ($request->user()->cannot('update', $id), 403, 'No tienes permiso para actualizar este ciclo formativo.');


        $request->validate([
            'nombre' => 'required|string',
            'codigo' => 'required|string|unique:ciclos_formativos,codigo,' . $id->id,
            'grado' => 'required|in:G.M.,G.S.,C.E. (G.M.),C.E. (G.S.),BÁSICA,basico,medio,superior',
            'descripcion' => 'nullable|string',
        ]);


        $cicloData = json_decode($request->getContent(), true);
        $id->update($cicloData);
        return new CicloResource($id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $parent_id, CicloFormativo $id)
    {
        abort_if($request->user()->cannot('delete', $id), 403, 'No tienes permiso para actualizar este ciclo formativo.');


        try {

            $id->delete();
            return response()->json(['message' => 'CicloFormativo eliminado correctamente'], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error: ' . $e->getMessage()
            ], 400);
        }
    }
}
