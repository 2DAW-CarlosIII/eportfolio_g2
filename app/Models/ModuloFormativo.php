<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModuloFormativo extends Model
{
    use HasFactory;
    protected $table = 'modulos_formativos';
    protected $perPage = 10;
    protected $fillable = [

        'ciclo_formativo_id',
        'nombre',
        'codigo',
        'horas_totales',
        'curso_escolar',
        'centro',
        'docente_id',
        'descripcion'
    ];

    public static $filterColumns = [
        'id',
        'ciclo_formativo_id',
        'nombre',
        'codigo',
        'horas_totales',
        'curso_escolar',
        'centro',
        'docente_id',
        'descripcion'
    ];
}
