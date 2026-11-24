@props(['cicloFormativo', 'id'])
<x-layout :titulo="'Vista detalle Ciclo Formativo ' . $id">
    @isset($cicloFormativo)
        <ul class="grid gap-4 sm:grid-cols-2">
        <x-tarjeta-ciclo-formativo-detalle :cicloFormativo="$cicloFormativo" :id="$id" />
        </ul>
    @endisset
</x-layout>
