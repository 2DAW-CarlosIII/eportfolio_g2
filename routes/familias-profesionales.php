<?php

use App\Http\Controllers\FamiliaProfesionalController;
use Illuminate\Support\Facades\Route;

Route::controller(FamiliaProfesionalController::class)
    ->prefix('familias-profesionales')
    ->name('familias-profesionales.')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('show/{id}', 'show')->whereNumber('id')->name('show');
        Route::get('create', 'create')->name('create');
        Route::get('edit/{id}', 'edit')->whereNumber('id')->name('edit');
    });
