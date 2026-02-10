<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\CriterioEvaluacion;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ResultadoAprendizaje extends Model
{
    use HasFactory;

    protected $perPage = 10;

    protected $table = 'resultados_aprendizaje';

    protected $fillable = [
        'modulo_formativo_id',
        'codigo',
        'descripcion',
        'peso_porcentaje',
        'orden'
    ];

    public static $filterColumns = [
        'modulo_formativo_id',
        'codigo',
        'descripcion',
        'peso_porcentaje',
        'orden'
    ];
}
