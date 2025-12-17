<?php

namespace App\Http\Controllers;

use App\Models\Evidencias;
use Database\Seeders\EvidenciasTableSeeder;
use Illuminate\Http\Request;

class EvidenciasController extends Controller
{
     public function getIndex()
    {
        $evidencias = Evidencias::all();
        return view('evidencias.index')
            ->with('evidencias', $evidencias);
    }

    public function getShow($id)
    {
        $evidencias = Evidencias::findOrFail($id);
        return view('evidencias.show')
            ->with('evidencias', $evidencias);
    }

    public function getCreate()
    {
        return view('evidencias.create');
    }

    public function getEdit($id)
    {
        $evidencias = Evidencias::findOrFail($id);
        return view('evidencias.edit')
            ->with('evidencias', $evidencias);
    }

    public function postCreate(Request $request)
    {
        $evidencias = new Evidencias();
        $evidencias->tarea_id = $request->tarea_id;
        $evidencias->estudiante_id = $request->estudiante_id;
        if ($request->hasFile('miArchivo')) {
            $path = $request->file('miArchivo')->store('miArchivo', ['disk' => 'public']);
            $evidencias->url = $path;
        }
        else {
            $evidencias->url = 'no-file-uploaded';
        }
        $evidencias->descripcion = $request->descripcion;
        $evidencias->estado_validacion = $request->estado_validacion;
        $evidencias->save();

        return redirect()->action([self::class, 'getShow'], ['id' => $evidencias->id]);
    }



    public function putCreate(Request $request, $id)
    {
        $evidencias = Evidencias::findOrFail($id);

        if ($request->hasFile('miArchivo')) {
            $path = $request->file('miArchivo')->store('miArchivo', ['disk' => 'public']);
            $evidencias->url = $path;
        }
        $evidencias->tarea_id = $request->tarea_id;
        $evidencias->estudiante_id = $request->estudiante_id;
        $evidencias->descripcion = $request->descripcion;
        $evidencias->estado_validacion = $request->estado_validacion;
        $evidencias->save();
        return redirect()->action([self::class, 'getShow'], ['id' => $evidencias->id]);
    }
}
