<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\FamiliasProfesionalesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'getHome']);

// ----------------------------------------
Route::get('login', function () {
<<<<<<< HEAD
    return view("auth.login");
=======
    return view('auth.login');
>>>>>>> 5ca93a89861eddb2d71db1212c7d199885d3a94b
});
Route::get('logout', function () {
    return "Logout usuario";
});


// ----------------------------------------
<<<<<<< HEAD
Route::prefix('familias-profesionales')->group(function () {
    Route::get('/', function () {
        return view("familias-profesionales.index");
    });

    Route::get('create', function () {
        return view("familias-profesionales.create");
    });

    Route::get('/show/{id}', function ($id) {
        return view("familias-profesionales.show",array('id'=>$id)) ;
    }) -> where('id', '[0-9]+');

    Route::get('/edit/{id}', function ($id) {
        return view("familias-profesionales.edit",array('id'=>$id));
    }) -> where('id', '[0-9]+');
=======
Route::prefix('proyectos')->group(function () {

   Route::get('/', [FamiliasProfesionalesController::class, 'getIndex']);


   Route::get('create', [FamiliasProfesionalesController::class, 'getCreate']);


    Route::get('show/{id}',[FamiliasProfesionalesController::class,'getShow']) -> where('id', '[0-9]+');

    Route::get('edit/{id}',[FamiliasProfesionalesController::class,'getEdit']) -> where('id', '[0-9]+');

    Route::post('store',[FamiliasProfesionalesController::class,'store']);

    Route::put('update/{id}',[FamiliasProfesionalesController::class,'update'])->where('id', '[0-9]+');

>>>>>>> 5ca93a89861eddb2d71db1212c7d199885d3a94b
});


// ----------------------------------------
Route::get('perfil/{id?}', function ($id = null) {
    if ($id === null)
        return 'Visualizar el currículo propio';
    return 'Visualizar el currículo de ' . $id;
}) -> where('id', '[0-9]+');


