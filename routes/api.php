<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Tqdev\PhpCrudApi\Api;
use Tqdev\PhpCrudApi\Config\Config;
use Psr\Http\Message\ServerRequestInterface;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('v1')->group(function () {
    Route::apiResource('modulos-formativos.resultados-aprendizaje', App\Http\Controllers\API\ResultadoAprendizajeController::class)->parameters(['modulos-formativos' => 'parent_id', 'resultados-aprendizaje' => 'resultado_aprendizaje_id']);
    Route::apiResource('resultados-aprendizaje.criterios-evaluacion', App\Http\Controllers\API\CriterioEvaluacionController::class)->parameters(['resultados-aprendizaje' => 'parent_id', 'criterios-evaluacion' => 'criterio_evaluacion_id']);
    Route::apiResource('modulos-formativos.matriculas', App\Http\Controllers\API\MatriculaController::class)->parameters(['modulos-formativos' => 'parent_id', 'matriculas' => 'matricula']);

});
