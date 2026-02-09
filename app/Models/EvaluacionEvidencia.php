<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluacionEvidencia extends Model
{
    use HasFactory;

    protected $table='evaluaciones_evidencias';
    protected $fillable = [
        'evidencia_id',
        'user_id',
        'puntuacion',
        'estado',
        'observaciones',
    ];


    public function evaluacion()
    {
        return $this->belongsTo(Evaluacion::class);
    }


    public function evidencia()
    {
        return $this->belongsTo(Evidencia::class);
    }
}

