<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsignacionRevision extends Model
{
    use HasFactory;
    protected $table='asignaciones_revision';
    protected $fillable = ['evidencia_id','revisor_id','asignado_por_id','fecha_limite','estado'];
}
