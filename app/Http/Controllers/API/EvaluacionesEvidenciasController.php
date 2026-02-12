<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\EvaluacionesEvidenciasResource;
use App\Models\EvaluacionEvidencia;
use App\Models\Evidencia;
use Illuminate\Http\Request;

class EvaluacionesEvidenciasController extends Controller
{
    public function index(Request $request)
    {
        return EvaluacionesEvidenciasResource::collection(
            EvaluacionEvidencia::orderBy($request->_sort ?? 'id', $request->_order ?? 'asc')
            ->paginate($request->perPage));
    }

    public function store(Request $request)
    {
        $evaluacionEvidencia = json_decode($request->getContent(), true);

        $evaluacionEvidencia = EvaluacionEvidencia::create($evaluacionEvidencia);

        return new EvaluacionesEvidenciasResource($evaluacionEvidencia);
    }

    public function show(Evidencia $evidencia, EvaluacionEvidencia $evaluacionEvidencia)
    {

        return new EvaluacionesEvidenciasResource($evaluacionEvidencia);
    }

     public function update(Request $request, EvaluacionEvidencia $evaluacionEvidencia)
    {
        $evaluacionEvidenciaData = json_decode($request->getContent(), true);
        $evaluacionEvidencia->update($evaluacionEvidenciaData);

        return new EvaluacionesEvidenciasResource($evaluacionEvidencia);
    }

    public function destroy(EvaluacionEvidencia $evaluacionEvidencia)
    {
        try {
            $evaluacionEvidencia->delete();
            return response()->json(null, 204);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error: ' . $e->getMessage()
            ], 400);
        }
    }
}

