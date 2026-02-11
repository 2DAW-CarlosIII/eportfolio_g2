<?php

namespace Database\Factories;

use App\Models\ModuloFormativo;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Matricula>
 */
class MatriculaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'estudiante_id'=>User::factory(),
            'modulo_formativo_id'=>ModuloFormativo::factory()
        ];
    }
}
