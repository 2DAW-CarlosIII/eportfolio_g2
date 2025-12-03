<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function getHome(){
        return redirect()->action([CiclosFormativosController::class,'getIndex']);
    }
}
