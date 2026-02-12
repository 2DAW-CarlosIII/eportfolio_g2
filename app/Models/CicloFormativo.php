<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CicloFormativo extends Model
{
    use HasFactory;
    protected $table = 'ciclos_formativos';
    protected $perPage = 10;
    protected $fillable = [
        'familia_profesional_id',
        'nombre',
        'codigo',
        'grado',
        'descripcion'
    ];

    public static $filterColumns = [
        'familia_profesional_id',
        'nombre',
        'codigo',
        'grado',
        'descripcion'
    ];

}
