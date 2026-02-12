<?php

namespace Database\Seeders;

use App\Models\EvaluacionEvidencia;
use App\Models\Evidencias;
use Illuminate\Database\Seeder;

class EvaluacionesEvidenciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EvaluacionEvidencia::create([
            'evidencia_id' => 2,
            'url' => 'https://example.com/evidencia1',
            'descripcion' => 'Evidencia 1 para la evaluación 1',
            'estado' => 'pendiente',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        EvaluacionEvidencia::create([
            'evidencia_id' => 3,
            'url' => 'https://example.com/evidencia2',
            'descripcion' => 'Evidencia 2 para la evaluación 2',
            'estado' => 'validada',

        ]);

        EvaluacionEvidencia::create([
            'evidencia_id' => 1,
            'url' => 'https://example.com/evidencia3',
            'descripcion' => 'Evidencia 3 para la evaluación 3',
            'estado' => 'rechazada',
        ]);
    }
}
