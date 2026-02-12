<?php

namespace Database\Factories;

use App\Models\CicloFormativo;
use App\Models\User;
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
            'nombre' => $this->faker->word(),
            'codigo' => $this->faker->unique()->bothify('###'),
            'horas_totales' => $this->faker->numberBetween(20, 300),
            'curso_escolar' => $this->faker->word(),
            'centro' => $this->faker->word(),
            'docente_id' => User::factory(),
            'ciclo_formativo_id' => CicloFormativo::factory(),
            'descripcion' => $this->faker->sentence(),

        ];
    }
}
