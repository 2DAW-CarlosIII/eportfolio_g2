<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ModuloFormativoResource;
use App\Models\CicloFormativo;
use App\Models\ModuloFormativo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ModuloFormativoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $search = $request->input('q', $request->input('search'));

        $query = ModuloFormativo::query();

        if (!empty($search)) {
            $query->where('nombre', 'like', '%' . $search . '%');
        }

        $sort  = $request->input('_sort', 'id');
        $order = $request->input('_order', 'asc');

        $perPage = (int) $request->input('perPage', $request->input('per_page', 10));
        if ($perPage <= 0) $perPage = 10;

        return ModuloFormativoResource::collection(
            $query->orderBy($sort, $order)->paginate($perPage)
        );
    }

    public function modulosImpartidos(Request $request)
    {


        $query = ModuloFormativo::where('docente_id', $request->user()->id);

        return ModuloFormativoResource::collection($query->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $parent_id)
    {

        $validated = $request->validate([
            'nombre' => ['required', 'string'],
            'codigo' => ['required', 'string'],
            'horas_totales' => ['required', 'integer'],
            'curso_escolar' => ['required', 'string'],
            'centro' => ['required', 'string'],
                'descripcion' => ['required', 'string'],

        ]);

        $validated['ciclo_formativo_id'] = (int) $parent_id;
        $validated['docente_id'] = Auth::id();

        $modulo = ModuloFormativo::create($validated);

        return new ModuloFormativoResource($modulo);
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
