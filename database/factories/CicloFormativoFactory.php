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
            'familia_profesional_id'=>FamiliaProfesional::factory(),
            'nombre'=>fake()->words(3,true),
            'codigo'=>fake()->unique()->bothify('CF-###'),
            'grado'=>fake()->randomElement(['G.M.', 'G.S.', 'C.E. (G.M.)', 'C.E. (G.S.)', 'BÁSICA']),
            'descripcion'=>fake()->paragraph(),
        ];
    }
}
