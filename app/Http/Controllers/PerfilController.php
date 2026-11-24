<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function __invoke(?int $id = null): string
    {
        if ($id !== null) {
            return "Perfil del usuario {$id}";
        }

        return 'Mi perfil';
    }
}
