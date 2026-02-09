<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CicloFormativo extends Model
{
    protected $table = 'ciclos_formativos';
    use HasFactory;
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
    public function familiaProfesional(): HasMany
    {
        return $this->hasMany(FamiliaProfesional::class, 'id', 'familia_profesional_id');
    }
}
