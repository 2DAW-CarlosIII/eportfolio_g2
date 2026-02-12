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
    public function index(Request $request, ResultadoAprendizaje $resultado_aprendizaje)
    {
       $search = $request->input('q', $request->input('search'));

        $perPage = (int) $request->input('perPage', 10);

        $query = CriterioEvaluacion::query()
            ->where('resultado_aprendizaje_id', $resultado_aprendizaje->id)
            ->when($search, function ($query) use ($search) {
                $query->where('codigo', 'like', '%' . $search . '%')
                      ->orWhere('descripcion', 'like', '%' . $search . '%');
            })
            ->orderBy('orden');

        return CriterioEvaluacionResource::collection(
            $query->paginate($perPage)
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, ResultadoAprendizaje $resultado_aprendizaje)
    {
        $criterio = $request->all();

        $validatedData = $request->validate([
            'codigo' => ['required', 'string'],
            'descripcion' => ['required', 'string'],
            'peso_porcentaje' => ['required', 'numeric', 'between:0,100'],
            'orden' => ['required', 'integer', 'min:1']
        ]);

        $validatedData['resultado_aprendizaje_id'] = $resultado_aprendizaje->id;
        $criterioEvaluacion = CriterioEvaluacion::create($validatedData);

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
    public function update(Request $request, ResultadoAprendizaje $resultado_aprendizaje, CriterioEvaluacion $criterioEvaluacion)
    {
        $criterioData = json_decode($request->getContent(), true);
        $criterioEvaluacion->update($criterioData);

        return new CriterioEvaluacionResource($criterioEvaluacion);
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
