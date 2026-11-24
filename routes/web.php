<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Route::get('/', HomeController::class);



Route::prefix('evidencias')->name('evidencias.')->group(function () {
    Route::get('/', function () {
        return view('evidencias.index');
    })->name('index');

    Route::get('/show/{id}', function (string $id) {
        return view('evidencias.show', ['id' => $id]);
    })->whereNumber('id')->name('show');

    Route::get('/create', function () {
        return view('evidencias.create');
    })->name('create');

    Route::get('/edit/{id}', function (string $id) {
        return view('evidencias.edit', ['id' => $id]);
    })->whereNumber('id')->name('edit');
});

Route::get('/perfil/{id?}', PerfilController::class)->whereNumber('id')->name('perfil');

Route::get('/acerca', function () {
    return [
        'aplicacion' => config('app.name'),
        'centro' => config('eportfolio.centro'),
    ];
})->name('acerca');

