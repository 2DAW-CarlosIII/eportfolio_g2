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

    
    Route::get('show/{id}', function ($id) { 
        return 'Evidencia ' . $id; 
    })->name('show')-> whereNumber('id');    


    Route::get('create', function () { 
        return 'Nueva evidencia'; 
    })->name('create');

 
    Route::get('edit/{id}', function ($id) { 
        return 'Modificar evidencia ' . $id; 
    })->name('edit')-> whereNumber('id');
});




Route::get('perfil/{id?}', function ($id = null) { 
    return ($id? 'Perfil del usuario ' . $id : 'Mi perfil'); 
})->name('perfil')-> whereNumber('id');





Route::get('acerca', function () {
     return ['aplicacion' => config('app.name'),
            'centro' => config('eportfolio.centro')];
 })->name('acerca');
