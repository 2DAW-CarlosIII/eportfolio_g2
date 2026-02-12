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
    public function index(Request $request,ResultadoAprendizaje $resultadoAprendizaje,CriterioEvaluacion $criterioEvaluacion)
    {


        return CriterioEvaluacionResource::collection(
            CriterioEvaluacion::when($request->search, function ($query) use ($request) {
                $query->where('descripcion', 'like', '%' . $request->search . '%');
            })
            ->where('resultado_aprendizaje_id',$resultadoAprendizaje->id)
            ->orderBy($request->_sort ?? 'id', $request->_order ?? 'asc')
                ->paginate($request->perPage)
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, ResultadoAprendizaje $resultadoAprendizaje)
    {
        $criterio = $request->validate([
            'codigo'=>'required',
            'descripcion'=>'required',
            'peso_porcentaje'=>'required',
            'orden'=>'required'
        ]);

        $criterio['resultado_aprendizaje_id'] = $resultadoAprendizaje->id;
        $criterioEvaluacion = CriterioEvaluacion::create($criterio);

        return new CriterioEvaluacionResource($criterioEvaluacion);
    }

    /**
     * Display the specified resource.
     */
    public function show(ResultadoAprendizaje $resultadoAprendizaje, CriterioEvaluacion $criterioEvaluacion)
    {
        return new CriterioEvaluacionResource($criterioEvaluacion);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ResultadoAprendizaje $resultadoAprendizaje, CriterioEvaluacion $criterioEvaluacion)
    {
        $criterioData = json_decode($request->getContent(), true);
        $criterioEvaluacion->update($criterioData);

        return new CriterioEvaluacionResource($criterioEvaluacion);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ResultadoAprendizaje $resultadoAprendizaje, CriterioEvaluacion $criterioEvaluacion)
    {
        try {
            $criterioEvaluacion->delete();
            return response()->json([
                'message' => 'Criterio de Evaluación eliminado correctamente'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error: ' . $e->getMessage()
            ], 400);
        }
    }
}
