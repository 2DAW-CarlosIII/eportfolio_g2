<?php


use App\Http\Controllers\EvidenciaController;


Route::controller(EvidenciaController::class)->prefix('evidencias')->name('evidencias.')->group(function () {
    Route::get('/', 'index')->name('index');

    Route::get('/show/{id}', 'show')->name('show')->whereNumber('id');

    Route::get('/create', 'create')->name('create');

    Route::get('/edit/{id}', 'edit')->name('edit')->whereNumber('id');
});
