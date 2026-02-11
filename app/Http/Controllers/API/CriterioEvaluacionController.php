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
       $search = $request->input('q', $request->input('search'));

        $query = CriterioEvaluacion::query();

        if (!empty($search)) {
            $query->where('id', 'like', '%' . $search . '%');
        }

        $sort  = $request->input('_sort', 'id');
        $order = $request->input('_order', 'asc');

        $perPage = (int) $request->input('perPage', $request->input('per_page', 10));
        if ($perPage <= 0) $perPage = 10;

        return CriterioEvaluacionResource::collection(
            $query->orderBy($sort, $order)->paginate($perPage)
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, ResultadoAprendizaje $resultado_aprendizaje_id)
    {
        $criterio = $request->all();

        $validatedData = $request->validate([
            'codigo' => ['required', 'string'],
            'descripcion' => ['required', 'string'],
        ]);

        $validatedData['resultado_aprendizaje_id'] = $resultado_aprendizaje_id->id;
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
