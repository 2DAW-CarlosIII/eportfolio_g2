<x-layout :titulo="'Vista detalle Ciclo Formativo ' . $id">
    @isset($moduloFormativo)
        <ul class="grid gap-4 sm:grid-cols-2">
        <x-tarjeta-modulo-formativo-detalle :moduloFormativo="$moduloFormativo" :id="$id" />
        </ul>
    @endisset
</x-layout>