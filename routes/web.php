<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view ('home');
});

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

Route::get('/perfil/{id?}', function (?string $id = null) {
    return view('perfil', ['id' => $id]);
})->whereNumber('id')->name('perfil');

Route::get('/acerca', function () {
    return [
        'aplicacion' => config('app.name'),
        'centro' => config('eportfolio.centro'),
    ];
})->name('acerca');
