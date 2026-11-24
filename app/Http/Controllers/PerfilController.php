<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    
    public function __invoke(?int $id = null)
    {
        return view('perfil', ['id' => $id]);
    }
}
