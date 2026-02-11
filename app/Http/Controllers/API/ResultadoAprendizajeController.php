<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ResultadoAprendizaje;
use Illuminate\Http\Request;
use App\Http\Resources\ResultadoAprendizajeResource;
use App\Models\ModuloFormativo;

class ResultadoAprendizajeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('q', $request->input('search'));

        $query = ResultadoAprendizaje::query();

        if (!empty($search)) {
            $query->where('id', 'like', '%' . $search . '%');
        }

        $sort  = $request->input('_sort', 'id');
        $order = $request->input('_order', 'asc');

        $perPage = (int) $request->input('perPage', $request->input('per_page', 10));
        if ($perPage <= 0) $perPage = 10;

        return ResultadoAprendizajeResource::collection(
            $query->orderBy($sort, $order)->paginate($perPage)
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, ModuloFormativo $modulo_formativo_id)
    {

        $validatedData = $request->validate([
            'codigo' => ['required', 'string'],
            'descripcion' => ['required', 'string'],
            'peso_porcentaje' => ['required', 'numeric', 'between:0,100'],
            'orden' => ['required', 'integer', 'min:1']
        ]);

        $validatedData['modulo_formativo_id'] = $modulo_formativo_id->id;
        $resultadoAprendizaje = ResultadoAprendizaje::create($validatedData);

        return new ResultadoAprendizajeResource($resultadoAprendizaje);
    }

    /**
     * Display the specified resource.
     */
    public function show(ModuloFormativo $parent_id, ResultadoAprendizaje $id)
    {
        return new ResultadoAprendizajeResource($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ModuloFormativo $parent_id, ResultadoAprendizaje $id)
    {

        $validatedData = $request->validate([
            'codigo' => ['required', 'string'],
            'descripcion' => ['required', 'string'],
            'peso_porcentaje' => ['required', 'numeric', 'between:0,100'],
            'orden' => ['required', 'integer', 'min:1']
        ]);

        $id->update($validatedData);

        return new ResultadoAprendizajeResource($id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ModuloFormativo $parent_id, ResultadoAprendizaje $id)
    {
        try {
            $id->delete();
            return response()->json(['message' => 'ResultadoAprendizaje eliminado correctamente'], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error: ' . $e->getMessage()
            ], 400);
        }
    }
}
