<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ModuloFormativoResource;
use App\Models\CicloFormativo;
use App\Models\ModuloFormativo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\AssignOp\Mod;

class ModuloFormativoController extends Controller
{

    public function index(Request $request)
    {
        $user = $request->user();


        $query = ($request->is('*modulos-impartidos*') && $user)
            ? $user->modulosImpartidos()
            :  ModuloFormativo::query();

        if ($request->has('search')) {
            $query->orWhere('nombre', 'like', '%' . $request->search . '%');
        }

        return  ModuloFormativoResource::collection(
            $query->orderBy($request->_sort ?? 'id', $request->_order ?? 'asc')
                ->paginate($request->perPage)
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $parent_id)
    {

        $request->validate([
            'nombre' => 'required|string',
            'codigo' => 'required|string|unique:modulos_formativos,codigo',
            'horas_totales' => 'required|integer',
            'curso_escolar' => 'required|string',
            'centro' => 'required|string',
            'docente_id' => 'required|integer|exists:users,id',
            'descripcion' => 'nullable|string',
        ]);

        $moduloFormativoData = json_decode($request->getContent(), true);
        $moduloFormativoData['ciclo_formativo_id'] = $parent_id;

        $moduloFormativo = ModuloFormativo::create($moduloFormativoData);

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
            return response()->json([
                'message' => 'Error: ' . $e->getMessage()
            ], 400);
        }
    }

    public function modulos_impartidos(Request $request)
    {
        // Obtener el usuario autenticado
        $user = Auth::user();

        return ModuloFormativoResource::collection(
            ModuloFormativo::where('docente_id',$user->id)
                ->orderBy($request->_sort ?? 'nombre', $request->_order ?? 'asc')
                ->paginate($request->perPage)
        );
    }
}
