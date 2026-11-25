<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModuloFormativoController;

Route::controller(ModuloFormativoController::class)
    ->prefix('modulos-formativos')
    ->name('modulos-formativos.')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('show/{id}', 'show')->whereNumber('id')->name('show');
        Route::get('create', 'create')->name('create');
        Route::get('edit/{id}', 'edit')->whereNumber('id')->name('edit');
    });
