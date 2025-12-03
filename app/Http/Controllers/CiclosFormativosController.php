<?php

namespace App\Http\Controllers;

use App\Models\CicloFormativo;
use Illuminate\Http\Request;

class CiclosFormativosController extends Controller
{
    public function getIndex()
    {
        $ciclos_formativos = CicloFormativo::all();

        return view('ciclos-formativos.index')
            ->with('ciclos', $ciclos_formativos);
    }

    public function getShow($id)
    {
        $ciclos_formativos = CicloFormativo::findOrFail($id);

        return view('ciclos-formativos.show')
            ->with('ciclo', $ciclos_formativos);
    }

    public function getCreate()
    {
        return view('ciclos-formativos.create');
    }

    public function getEdit($id)
    {
        $ciclos_formativos = CicloFormativo::findOrFail($id);

        return view('ciclos-formativos.edit')
            ->with('ciclo', $ciclos_formativos);
    }
}
