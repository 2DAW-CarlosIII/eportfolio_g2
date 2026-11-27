@props(['evidencia', 'id'])

<x-layout :titulo="'Evidencia ' . $id">
    <x-tarjeta-evidencia-detalle :evidencia="$evidencia" :id="$id"/>
</x-layout>
