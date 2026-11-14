<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
     return 'Portada del ePortfolio';
 });


Route::prefix('evidencias')->name('evidencias.')->group(function () {
    Route::get('/', function () {
        return 'Listado de evidencias';
    })->name('index');

    Route::get('/show/{id}', function ($id) {
        return 'Evidencia ' . e($id);
    })->whereNumber('id')->name('show');

    Route::get('/create', function () {
        return 'Nueva evidencia';
    })->name('create');

    Route::get('/edit/{id}', function ($id) {
        return 'Modificar evidencia ' . e($id);
    })->whereNumber('id')->name('edit');
});

Route::get('/perfil/{id?}', function ($id = null){
    if ($id) {
        return 'Perfil del usuario ' . e($id);
    } else {
        return 'Mi perfil';
    }
 })->whereNumber('id')->name('perfil');

 Route::get('acerca', function () {
     return ['centro' => config('eportfolio.centro'), 'aplicacion' => config('app.name')];
 })->name('acerca');