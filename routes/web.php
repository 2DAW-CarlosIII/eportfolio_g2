<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return 'Portada del ePortfolio';
});

Route::prefix('evidencias')->name('evidencias.')->group(function () {
    Route::get('/', function () {
        return 'Listado de evidencias';
    })->name('index');

    Route::get('/show/{id}', function (string $id) {
        return "Evidencia {$id}";
    })->whereNumber('id')->name('show');

    Route::get('/create', function () {
        return 'Nueva evidencia';
    })->name('create');

    Route::get('/edit/{id}', function (string $id) {
        return "Modificar evidencia {$id}";
    })->whereNumber('id')->name('edit');
});

Route::get('/perfil/{id?}', function (?string $id = null) {
    return $id ? "Perfil del usuario {$id}" : 'Mi perfil';
})->whereNumber('id')->name('perfil');

Route::get('/acerca', function () {
    return [
        'aplicacion' => config('app.name'),
        'centro' => config('eportfolio.centro'),
    ];
})->name('acerca');

