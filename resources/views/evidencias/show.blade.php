@props(['evidencia', 'id'])

<x-layout :titulo="'Evidencia ' . $id">
    <x-tarjeta-listado :evidencia="$evidencia" :id="$id"/>
</x-layout>
