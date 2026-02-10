<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ModuloFormativoResource;
use App\Models\CicloFormativo;
use App\Models\ModuloFormativo;
use Illuminate\Http\Request;

class ModuloFormativoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $query = $request->is('*modulos-impartidos*')
            ? $request->user()->modulosImpartidos()
            : ModuloFormativo::query();


        $query = ModuloFormativo::query();

        return  ModuloFormativoResource::collection(
            $query->when($request->search, function ($query) use ($request) {
                $query->where('nombre', 'like', '%' .$request->search . '%');
            })
            ->orderBy($request->sort ?? 'id', $request->order ?? 'asc')
            ->paginate($request->perPage ?? 15)
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $parent_id)
    {
        $data = $request->validate([
            'nombre' => 'required|string|max:255',
            'codigo' => 'required|string|max:255',
            'horas_totales' => 'required|integer|min:1',
            'curso_escolar' => 'required|string|max:255',
            'centro' => 'required|string|max:255',
        ]);


        $moduloFormativo = ModuloFormativo::create($data);

        return new ModuloFormativoResource($moduloFormativo);
    }

    /**
     * Display the specified resource.
     */
    public function show($parent_id, CicloFormativo $cicloFormativo, ModuloFormativo $id)
    {
        //abort_if($id->ciclo_formativo_id != $cicloFormativo->id, 404, 'Módulo Formativo no encontrado en el Ciclo Formativo especificado.');
        return new ModuloFormativoResource($id);
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, $parent_id, ModuloFormativo $id)
    {
        $moduloFormativoData = json_decode($request->getContent(), true);
        $id->update($moduloFormativoData);

        return new ModuloFormativoResource($id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($parent_id, ModuloFormativo $id)
    {
        try {
            $id->delete();
            return response()->json(['message' => 'ModuloFormativo eliminado correctamente'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }
}
