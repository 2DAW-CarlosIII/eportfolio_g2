<?php


use Illuminate\Support\Facades\Route;


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