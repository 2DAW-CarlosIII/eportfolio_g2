<?php

namespace Database\Factories;

use App\Models\FamiliaProfesional;
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
            'familia_profesional_id' =>FamiliaProfesional::factory(),
            'nombre' => $this->faker->sentence(3),
            'codigo' => $this->faker->unique()->bothify('#####'),
            'grado' => $this->faker->randomElement(['basico', 'medio', 'superior']),
            'descripcion' => $this->faker->paragraph(),
        ];
    }
}
