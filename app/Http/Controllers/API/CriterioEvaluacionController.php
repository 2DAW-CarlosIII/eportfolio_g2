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
        $query = ResultadoAprendizaje::query();
        if ($query) {
            $query->orWhere('nombre', 'like', '%' . $request->q . '%');
        }

        return ResultadoAprendizaje::collection(
            $query->orderBy($request->_sort ?? 'id', $request->_order ?? 'asc')
                ->paginate($request->perPage)
        );

        return CriterioEvaluacionResource::collection(
            CriterioEvaluacion::orderBy($request->_sort ?? 'id', $request->_order ?? 'asc')
                ->paginate($request->perPage)
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $parent_id)
    {
        $criterio = $request->all();

        $criterio['resultado_aprendizaje_id'] = $parent_id;

        $criterioEvaluacion = CriterioEvaluacion::create($criterio);

        return new CriterioEvaluacionResource($criterioEvaluacion);
    }

    /**
     * Display the specified resource.
     */
    public function show(CriterioEvaluacion $criterioEvaluacion)
    {
        return new CriterioEvaluacionResource($criterioEvaluacion);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CriterioEvaluacion $criterioEvaluacion)
    {
        $criterioData = json_decode($request->getContent(), true);
        $criterioEvaluacion->update($criterioData);

        return new CriterioEvaluacionResource($criterioEvaluacion);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CriterioEvaluacion $criterioEvaluacion)
    {
        try {
            $criterioEvaluacion->delete();
            return response()->json(null, 204);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error: ' . $e->getMessage()
            ], 400);
        }
    }
}
