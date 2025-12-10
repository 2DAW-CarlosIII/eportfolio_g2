<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResultadoAprendizaje extends Model
{
        protected $table = 'resultados_aprendizaje';

        protected $fillable = ['codigo','descripción','orden'];
}
