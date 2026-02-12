<?php

namespace Database\Factories;

use App\Models\CriterioEvaluacion;
use Illuminate\Database\Eloquent\Factories\Factory;

use function Symfony\Component\Clock\now;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tarea>
 */
class TareaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'criterios_evaluacion_id'=>CriterioEvaluacion::factory(),
            'fecha_apertura'=> now(),
            'fecha_cierre'=> now(),
            'activo'=> random_int(1,5)
        ];
    }
}
