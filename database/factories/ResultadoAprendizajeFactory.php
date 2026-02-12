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
            'modulo_formativo_id'=>ModuloFormativo::factory(),
            'codigo'=>$this->faker->unique()->bothify('###'),
            'descripcion' => $this->faker->paragraph(),
            'peso_porcentaje'=>random_int(10,100),
            'orden'=>random_int(1,5)
        ];
    }
}
