<?php

namespace Database\Factories;

use App\Models\ModuloFormativo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ResultadoAprendizaje>
 */
class ResultadoAprendizajeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'codigo' => fake()->unique()->bothify('RA#'),
            'descripción' => fake()->paragraph(),
            'orden' => fake()->numberBetween(1, 10),
            'modulo_formativo_id' => ModuloFormativo::factory(),
        ];
    }
}
