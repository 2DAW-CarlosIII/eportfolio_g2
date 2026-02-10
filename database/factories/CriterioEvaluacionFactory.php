<?php

namespace Database\Factories;

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
            'codigo' => $this->faker->unique()->bothify('CRIT-###'),
            'descripcion' => $this->faker->sentence(),
            'peso_porcentaje' => $this->faker->numberBetween(1, 100),
            'orden' => $this->faker->numberBetween(1, 10),
        ];
    }
}
