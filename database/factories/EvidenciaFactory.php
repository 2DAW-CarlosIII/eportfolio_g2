<?php

namespace Database\Factories;

use App\Models\Tarea;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Evidencia>
 */
class EvidenciaFactory extends Factory
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
            'tarea_id'=>Tarea::factory(),
            'url'=> $this->faker->url(),
            'descripcion'=> $this->faker->paragraph(),
            'estado_validacion'=>$this->faker->randomElement(['validad', 'pendiente', 'rechazada'])
        ];
    }
}
