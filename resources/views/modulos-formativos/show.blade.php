<x-layout :titulo="'Vista detalle Ciclo Formativo ' . $id">
    @isset($moduloFormativo)
        <div class="grid gap-4 place-items-center">
            <x-tarjeta-modulo-formativo-detalle :moduloFormativo="$moduloFormativo" :id="$id" />
        </div>
    @endisset
</x-layout>