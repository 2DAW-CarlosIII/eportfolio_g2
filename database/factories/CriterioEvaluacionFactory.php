<?php

namespace Database\Factories;

use App\Models\ResultadoAprendizaje;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CriterioEvaluacion>
 */
class CriterioEvaluacionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'resultado_aprendizaje_id'=>ResultadoAprendizaje::factory(),
            'codigo'=>$this->faker->unique()->bothify('#####_####'),
            'descripcion' => $this->faker->paragraph(),
            'peso_porcentaje'=>random_int(10,100),
            'orden'=>random_int(1,5)
        ];
    }
}
