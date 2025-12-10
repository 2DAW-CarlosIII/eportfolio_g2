<?php

namespace App\Http\Controllers;

use App\Models\ResultadoAprendizaje;
use Illuminate\Http\Request;

class ResultadosAprendizajeController extends Controller
{
    public function getIndex(){
        return view('resultados-aprendizaje.index')
            ->with('resultados_aprendizaje', ResultadoAprendizaje::all());
    }

    public function getShow($id){
        return view('resultados-aprendizaje.show')
            ->with('resultados_aprendizaje', ResultadoAprendizaje::findOrFail($id))
            ->with('id', $id);
    }

    public function getCreate(){
        return view('resultados-aprendizaje.create');
    }

    public function postCreate(Request $request){
        $resultadoAprendizaje=ResultadoAprendizaje::create($request->all());
        return redirect()->action([self::class,'getShow'],['id'=>$resultadoAprendizaje->id]);
    }

    public function putCreate(Request $request,$id){
        $resultadoAprendizaje=ResultadoAprendizaje::findOrFail($id);
        $resultadoAprendizaje->update($request->all());
        return redirect()->action([self::class,'getShow'],['id'=>$resultadoAprendizaje->id]);
    }

    public function getEdit($id){
        return view('resultados-aprendizaje.edit')
            ->with('resultados_aprendizaje', ResultadoAprendizaje::findOrFail($id))
            ->with('id', $id);
    }


}
