@props(['moduloFormativo', 'id'])

<li class="rounded-lg bg-white p-4 shadow">
    <div class="space-y-3 sm:col-span-2">
        <p><strong>Código</strong> {{ $moduloFormativo['codigo'] }}</p>
        <h2 class="text-2xl font-semibold">{{ $moduloFormativo['nombre'] }}</h2>
        <p><strong>Código Ciclo Formativo</strong> {{ $moduloFormativo['codigo_ciclo'] }}</p>

        <div class="flex gap-3 pt-2">
            <x-bookme.boton  primario :href="route('modulos-formativos.show', $id)">
                Detalles
            </x-bookme.boton>
        </div>
    </div>
</li>

