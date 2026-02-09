<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class FamiliaProfesional extends Model
{

        use HasFactory;
        protected $table = 'familias_profesionales';

        protected $fillable = ['nombre', 'codigo', 'descripcion'];

        public static $filterColumns = [
            'codigo',
            'nombre',
            'imagen',
            'descripcion'
        ];
}
