<?php

namespace App\Enums;

enum EstadoValidacion: string {
    case PENDIENTE = 'pendiente';
    case VALIDADA = 'validada';
    case RECHAZADA = 'rechazada';
    case ASIGNADA = 'asignada';
}