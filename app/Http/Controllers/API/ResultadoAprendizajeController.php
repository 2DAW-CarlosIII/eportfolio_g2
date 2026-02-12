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
    public function index(Request $request, ModuloFormativo $modulo_formativo)
    {
        $search = $request->input('q', $request->input('search'));

        $perPage = (int) $request->input('perPage', 10);

        $query = ResultadoAprendizaje::query()
        ->where('modulo_formativo_id', $modulo_formativo->id)
        ->when($search, function ($query) use ($search) {
            $query->where('codigo', 'like', '%' . $search . '%')
                  ->orWhere('descripcion', 'like', '%' . $search . '%');
        })
        ->orderBy('orden');

        return ResultadoAprendizajeResource::collection(
            $query->paginate($perPage)
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
    public function update(Request $request, ModuloFormativo $modulo_formativo, ResultadoAprendizaje $resultado_aprendizaje)
    {

        $validatedData = $request->validate([
            'codigo' => ['required', 'string'],
            'descripcion' => ['required', 'string'],
            'peso_porcentaje' => ['required', 'numeric', 'between:0,100'],
            'orden' => ['required', 'integer', 'min:1']
        ]);

        $resultado_aprendizaje->update($validatedData);

        return new ResultadoAprendizajeResource($resultado_aprendizaje);
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
