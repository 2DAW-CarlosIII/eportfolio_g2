<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ModuloFormativo>
 */
class ModuloFormativoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ciclo_formativo_id' => \App\Models\CicloFormativo::factory(),
            'nombre' => $this->faker->sentence(3),
            'codigo' => $this->faker->unique()->bothify('MF-###'),
            'horas_totales' => $this->faker->numberBetween(100, 300),
            'curso_escolar' => $this->faker->randomElement(['1º', '2º']),
            'centro' => $this->faker->company(),
            'descripcion' => $this->faker->paragraph(),
        ];
    }
}
