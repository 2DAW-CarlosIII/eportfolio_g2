<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

 


class PerfilController extends Controller
{
     public function __invoke(?int $id = null) :View
    {
        return view('perfil', ['id' => $id]);
    }

}
