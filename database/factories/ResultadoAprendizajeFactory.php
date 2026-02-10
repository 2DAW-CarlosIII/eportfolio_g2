<?php

namespace Database\Factories;

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
            'modulo_formativo_id' => \App\Models\ModuloFormativo::factory(),
            'codigo' => $this->faker->unique()->bothify('RA-###'),
            'descripcion' => $this->faker->paragraph(),
            'peso_porcentaje' => $this->faker->numberBetween(1, 100),
            'orden' => $this->faker->numberBetween(1, 10),
        ];
    }
}
