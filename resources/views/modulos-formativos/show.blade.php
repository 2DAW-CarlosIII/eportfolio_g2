<x-layout :titulo="'Vista detalle Módulo Formativo ' . $id">
    <div class="grid gap-4 place-items-center">
        <x-tarjeta-modulo-formativo-detalle :moduloFormativo="$moduloFormativo" :id="$id" />
    </div>
</x-layout>
