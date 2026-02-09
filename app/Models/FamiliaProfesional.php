<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FamiliaProfesional extends Model
{
        protected $table = 'familias_profesionales';
        use HasFactory;
        protected $fillable = [ 'nombre','codigo','descripcion'];

        public static $filterColumns = [
            'nombre',
            'codigo',
            'descripcion'
        ];
        public function cicloFormativo(): BelongsTo
        {
            return $this->belongsTo(CicloFormativo::class);
        }
}
