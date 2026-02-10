<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\CriterioEvaluacion;
use Illuminate\Http\Request;
use App\Http\Resources\CriterioEvaluacionResource;
use App\Models\ResultadoAprendizaje;

class CriterioEvaluacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
       $query = CriterioEvaluacion::query();
        if($request->has('search')) {
            $query->orWhere('id', 'like', '%' .$request->search . '%');
        }
        return CriterioEvaluacionResource::collection(
            $query->orderBy($request->_sort ?? 'id', $request->_order ?? 'asc')
                ->paginate($request->perPage)
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, ResultadoAprendizaje $parent_id)
    {

            $request->validate([
                'codigo' => 'required|string|unique:criterios_evaluacion,codigo',
                'descripcion' => 'required|string',
                'peso_porcentaje' => 'required|integer',
                'orden' => 'required|integer',
            ]);

        $criterio = $request->all();

        $criterio['resultado_aprendizaje_id'] = $parent_id->id;

        $criterioEvaluacion = CriterioEvaluacion::create($criterio);

        return new CriterioEvaluacionResource($criterioEvaluacion);
    }

    /**
     * Display the specified resource.
     */
    public function show(ResultadoAprendizaje $parent_id, CriterioEvaluacion $id)
    {
        return new CriterioEvaluacionResource($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ResultadoAprendizaje $parent_id, CriterioEvaluacion $id)
    {
        $criterioData = json_decode($request->getContent(), true);
        $id->update($criterioData);

        return new CriterioEvaluacionResource($id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ResultadoAprendizaje $parent_id, CriterioEvaluacion $id)
    {
        try {
            $id->delete();
            return response()->json(['message' => 'Criterio de Evaluación eliminado correctamente'], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error: ' . $e->getMessage()
            ], 400);
        }
    }
}
