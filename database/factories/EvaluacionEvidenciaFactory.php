<?php

namespace Database\Factories;

use App\Models\Evaluacion;
use App\Models\Evidencia;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EvaluacionEvidencia>
 */
class EvaluacionEvidenciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'evidencia_id'=>Evidencia::factory(),
            'url'=> $this->faker->url(),
            'descripcion'=> $this->faker->paragraph(),
            'estado'=>$this->faker->randomElement(['validad', 'pendiente', 'rechazada'])
        ];
    }
}
