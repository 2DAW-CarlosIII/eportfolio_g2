<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModuloFormativo extends Model
{
    protected $table = 'modulos_formativos';
    use HasFactory;
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
        'ciclo_formativo_id',
        'nombre',
        'codigo',
        'horas_totales',
        'curso_escolar',
        'centro',
        'docente_id',
        'descripcion'
    ];
    public function cicloFormativo()
    {
        return $this->hasMany(CicloFormativo::class, 'id', 'ciclo_formativo_id');
    }
    public function resultadosAprendizaje()
    {
        return $this->belongsTo(ResultadoAprendizaje::class, 'id', 'modulo_formativo_id');
    }

}
