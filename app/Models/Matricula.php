<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    use HasFactory;

    protected $table = 'matriculas';
    protected $fillable = [
        'id',
        'estudiante_id',
        'modulo_formativo_id',
    ];
    public static $filterColumns = [
        'id',
        'estudiante_id',
        'modulo_formativo_id',
    ];

    public function estudiante() {

        return $this->belongsTo(User::class, 'estudiante_id');
    }

    public function modulo() {
        return $this->belongsTo(ModuloFormativo::class, 'modulo_formativo_id');
     }
}
