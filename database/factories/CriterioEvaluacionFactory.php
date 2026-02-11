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
            'resultado_aprendizaje_id' => ResultadoAprendizaje::factory(),
            'codigo' => $this->faker->unique()->word(),
            'descripcion' => $this->faker->sentence(),
            'peso_porcentaje' => $this->faker->numberBetween(0, 100),
            'orden' => $this->faker->numberBetween(1, 10),
        ];
    }
}
