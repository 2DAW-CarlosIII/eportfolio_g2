<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Matricula extends Model
{
    protected $table = 'matriculas';
    use HasFactory;
    protected $fillable = [
        'estudiante_id',
        'modulo_formativo_id',
    ];
    public static $filterColumns = [
        'estudiante_id',
        'modulo_formativo_id',
    ];
    
}
