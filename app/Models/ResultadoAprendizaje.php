<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\CriterioEvaluacion;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ResultadoAprendizaje extends Model
{
    protected $table = 'resultados_aprendizaje';
    use HasFactory;
    protected $fillable = ['modulo_formativo_id','codigo', 'descripcion','peso_porcentaje', 'orden'];

    public static $filterColumns = [
        'modulo_formativo_id',
        'codigo',
        'descripcion',
        'peso_porcentaje',
        'orden'


    ];
    public function moduloFormativo():HasMany
    {
        return $this->hasMany(ModuloFormativo::class, 'id', 'modulo_formativo_id');
    }
    public function criterioEvaluacion():BelongsTo
    {
        return $this->belongsTo(CriterioEvaluacion::class, 'resultado_aprendizaje_id', 'id');
    }
}
