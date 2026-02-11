<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ResultadoAprendizajeResource extends JsonResource
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
            'modulo_formativo_id' => $this->modulo_formativo_id,
            'codigo' => $this->codigo,
            'descripcion' => $this->descripcion,
            'peso_porcentaje' => $this->peso_porcentaje,
            'orden' => $this->orden,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
