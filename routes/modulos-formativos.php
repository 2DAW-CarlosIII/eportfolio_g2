<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModuloFormativoController;

Route::get('/modulos-formativos', [ModuloFormativoController::class, 'index'])
    ->name('modulos-formativos.index');

Route::get('/modulos-formativos/show/{id}', [ModuloFormativoController::class, 'show'])
    ->whereNumber('id')
    ->name('modulos-formativos.show');

Route::get('/modulos-formativos/create', [ModuloFormativoController::class, 'create'])
    ->name('modulos-formativos.create');

Route::get('/modulos-formativos/edit/{id}', [ModuloFormativoController::class, 'edit'])
    ->whereNumber('id')
    ->name('modulos-formativos.edit');
