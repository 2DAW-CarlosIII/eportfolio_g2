<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Matricula;
use Illuminate\Http\Request;
use App\Http\Resources\MatriculaResource;
use App\Http\Resources\ModuloFormativoResource;
use App\Http\Resources\UserResource;
use App\Models\ModuloFormativo;
use App\Models\User;

class MatriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, ModuloFormativo $moduloFormativo)
    {
        return MatriculaResource::collection(
            Matricula::where('modulo_formativo_id', $moduloFormativo->id)
            ->orderBy($request->_sort ?? 'id', $request->_order ?? 'asc')
                ->paginate($request->perPage)
        );
    }

    public function getModulosMatriculados(Request $request){
        $user=$request->user()->id;
        $idModulo=Matricula::where('estudiante_id',$user)->get('modulo_formativo_id');
        return ModuloFormativoResource::collection(
            ModuloFormativo::whereIn('id',$idModulo)
            ->orderBy($request->_sort ?? 'id', $request->_order ?? 'asc')
                ->paginate($request->perPage)
        );
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, ModuloFormativo $moduloFormativo, Matricula $matricula)
    {
        $matricula = $request->all();

        $matricula['modulo_formativo_id'] = $moduloFormativo->id;
        $matricula['estudiante_id']=$request->user()->id;
        $matriculas = Matricula::create($matricula);

        return new MatriculaResource($matriculas);
    }

    public function storeGeneral(Request $request){

        $estudiantes=$request->input('estudiantes_id');
        $modulos=$request->input('modulos_formativos_id');

        $request->validate([
            'estudiantes_id'=>'required|array',
            'modulos_formativos_id'=>'required|array'
        ]);

        
        $limit=config('app.max_modulos_matricula');
        $matriculas=[];

        foreach($estudiantes as $estudianteId){
            foreach($modulos as $moduloId){
                $matriculas[]=Matricula::create([
                    'estudiante_id'=>$estudianteId,
                    'modulo_formativo_id'=>$moduloId
                ]);
            }
        }
        return new MatriculaResource($matriculas);
    }

    /**
     * Display the specified resource.º
     */
    public function show(ModuloFormativo $moduloFormativo, Matricula $matricula)
    {
        return new MatriculaResource($matricula);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ModuloFormativo $moduloFormativo, Matricula $matricula)
    {
        $matriculaData = json_decode($request->getContent(), true);
        $matricula->update($matriculaData);

        return new MatriculaResource($matricula);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ModuloFormativo $moduloFormativo, Matricula $matricula)
    {
        try {
            $matricula->delete();
            return response()->json([
                'message' => 'Matricula eliminado correctamente'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error: ' . $e->getMessage()
            ], 400);
        }
    }
}
