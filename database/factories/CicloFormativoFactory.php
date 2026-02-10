<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CicloFormativo>
 */
class CicloFormativoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        return [
            'familia_profesional_id' => \App\Models\FamiliaProfesional::factory(),
            'nombre' => $this->faker->sentence(3),
            'codigo' => $this->faker->unique()->bothify('CF-###'),
            'grado' => $this->faker->randomElement(['G.M.', 'G.S.', 'BÁSICA']),
            'descripcion' => $this->faker->paragraph(),
        ];
    }
}
