@props(['cicloFormativo', 'id'])
<x-layout :titulo="'Vista detalle Ciclo Formativo ' . $id">
    @isset($cicloFormativo)
        <div class="grid gap-4 place-items-center">
            <x-tarjeta-ciclo-formativo-detalle :cicloFormativo="$cicloFormativo" :id="$id" />
        </div>
    @endisset
</x-layout>
