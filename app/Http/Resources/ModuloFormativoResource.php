<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ModuloFormativoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'ciclo_formativo_id' => $this->ciclo_formativo_id,
            'docente_id' => $this->docente_id,
            'nombre' => $this->nombre,
            'codigo' => $this->codigo,
            'horas_totales' => $this->horas_totales,
            'curso_escolar' => $this->curso_escolar,
            'centro' => $this->centro,
            'descripcion' => $this->descripcion,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
