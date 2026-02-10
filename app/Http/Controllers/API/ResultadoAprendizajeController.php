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
    public function index(Request $request, ModuloFormativo $moduloFormativo,ResultadoAprendizaje $resultadoAprendizaje)
    {

        return ResultadoAprendizajeResource::collection(
            ResultadoAprendizaje::when($request->search, function ($query) use ($request) {
                $query->where('id', 'like', '%' . $request->search . '%');
            })
            ->where('modulo_formativo_id', $moduloFormativo->id)
            ->orderBy($request->_sort ?? 'id', $request->_order ?? 'asc')
            ->paginate($request->perPage));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, ModuloFormativo $moduloFormativo)
    {
        $resultadoData = $request->validate([
            'codigo' => 'required',
            'descripcion' => 'required',
            'peso_porcentaje'=>'required',
            'orden'=>'required'
        ]);;

        $resultadoData['modulo_formativo_id'] = $moduloFormativo->id;
        $resultadoAprendizaje = ResultadoAprendizaje::create($resultadoData);

        return new ResultadoAprendizajeResource($resultadoAprendizaje);
    }

    /**
     * Display the specified resource.
     */
    public function show(ModuloFormativo $moduloFormativo, ResultadoAprendizaje $resultadoAprendizaje)
    {
        return new ResultadoAprendizajeResource($resultadoAprendizaje);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ModuloFormativo $moduloFormativo, ResultadoAprendizaje $resultadoAprendizaje)
    {
        $resultadoAprendizajeData = json_decode($request->getContent(), true);
        $resultadoAprendizaje->update($resultadoAprendizajeData);

        return new ResultadoAprendizajeResource($resultadoAprendizaje);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ModuloFormativo $moduloFormativo, ResultadoAprendizaje $resultadoAprendizaje)
    {
        try {
            $resultadoAprendizaje->delete();
            return response()->json([
                'message' => 'ResultadoAprendizaje eliminado correctamente'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error: ' . $e->getMessage()
            ], 400);
        }
    }
}
