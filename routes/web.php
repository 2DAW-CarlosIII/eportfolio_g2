<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PerfilController;

Route::get('/', HomeController::class)->name('home');



require __DIR__ . '/evidencias.php';
require __DIR__ . '/familias-profesionales.php';
require __DIR__ . '/ciclos-formativos.php';
require __DIR__ . '/modulos-formativos.php';



Route::get('/perfil/{id?}', PerfilController::class)->whereNumber('id')->name('perfil');

Route::get('/acerca', function () {
    return [
        'aplicacion' => config('app.name'),
        'centro' => config('eportfolio.centro'),
    ];
})->name('acerca');

