<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\CriterioEvaluacion;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ResultadoAprendizaje extends Model
{
    use HasFactory;

    protected $table = 'resultados_aprendizaje';

    protected $fillable = ['id', 'codigo', 'descripción', 'orden'];

    public static $filterColumns = [
        'id',
        'codigo',
        'descripción',
        'orden',
    ];
}
