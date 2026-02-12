<?php

namespace Database\Factories;

use App\Models\Evidencia;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

use function Symfony\Component\Clock\now;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AsignacionRevision>
 */
class AsignacionRevisionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'evidencia_id'=>Evidencia::factory(),
            'revisor_id'=>User::factory(),
            'asignado_por_id'=>User::factory(),
            'fecha_limite'=> now(),
            'estado'=>$this->faker->randomElement(['pendiente', 'expirada', 'completada'])
        ];
    }
}
