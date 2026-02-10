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
            'modulo_formativo_id' => ModuloFormativo::factory(),
            'descripcion' => $this->faker->sentence(),
            'codigo' => $this->faker->word(),
            'peso_porcentaje' => $this->faker->numberBetween(1, 100),
            'orden' => $this->faker->numberBetween(1, 10)
        ];
    }
}
