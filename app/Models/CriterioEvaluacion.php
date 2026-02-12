<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CriterioEvaluacion extends Model
{
    //

    protected $table = 'criterios_evaluacion';
    protected $fillable = ['resultado_aprendizaje_id', 'codigo', 'descripcion', 'peso_porcentaje', 'orden'];
    use HasFactory;
    public static $filterColumns = [
        'resultado_aprendizaje_id',
        'codigo',
        'descripcion',
        'peso_porcentaje',
        'orden',
    ];
    public function resultadoAprendizaje():HasMany{
        return $this->hasMany(ResultadoAprendizaje::class, 'id', 'resultado_aprendizaje_id');
    }
}
