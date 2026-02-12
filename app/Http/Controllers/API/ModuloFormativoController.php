<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ModuloFormativoResource;
use App\Models\CicloFormativo;
use App\Models\ModuloFormativo;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Mod;

class ModuloFormativoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, CicloFormativo $cicloFormativo, ModuloFormativo $moduloFormativo)
    {

        return  ModuloFormativoResource::collection(
            ModuloFormativo::when($request->search, function ($query) use ($request) {
                $query->where('nombre', 'like', '%' . $request->search . '%');
            })
            ->where('ciclo_formativo_id', $cicloFormativo->id)
            ->orderBy('id', 'asc')
                ->paginate($request->perPage)
        );
    }

    public function getModulosImpartidos(Request $request, CicloFormativo $cicloFormativo, ModuloFormativo $moduloFormativo){
            return  ModuloFormativoResource::collection(
            ModuloFormativo::where('docente_id',$request->user()->id)
            ->orderBy('id', 'asc')
                ->paginate($request->perPage)
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, CicloFormativo $cicloFormativo, ModuloFormativo $moduloFormativo)
    {
        $data = $request->validate([
            'nombre'=>'required',
            'codigo'=>'required',
            'horas_totales'=>'required',
            'curso_escolar'=>'required',
            'centro'=>'required',
            'descripcion'=>'required'
        ]);

        $data['ciclo_formativo_id'] = $cicloFormativo->id;
        $data['docente_id']=$request->user()->id;
        $moduloFormativo = ModuloFormativo::create($data);

        return new ModuloFormativoResource($moduloFormativo);
    }

    /**
     * Display the specified resource.
     */
    public function show(CicloFormativo $cicloFormativo, ModuloFormativo $moduloFormativo)
    {
        //abort_if($moduloFormativo->ciclo_formativo_id != $cicloFormativo->id, 404, 'Módulo Formativo no encontrado en el Ciclo Formativo especificado.');
        return new ModuloFormativoResource($moduloFormativo);
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, CicloFormativo $cicloFormativo, ModuloFormativo $moduloFormativo)
    {
        $moduloFormativoData = json_decode($request->getContent(), true);
        $moduloFormativo->update($moduloFormativoData);

        return new ModuloFormativoResource($moduloFormativo);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CicloFormativo $cicloFormativo, ModuloFormativo $moduloFormativo)
    {
        try {
            $moduloFormativo->delete();
            return response()->json([
                'message' => 'ModuloFormativo eliminado correctamente'
            ], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }
}
