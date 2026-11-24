@props(['cicloFormativo', 'id'])

    <li class="rounded-lg bg-white p-4 shadow">

        <div class="space-y-3 sm:col-span-2">
            <p><strong>Código</strong> {{ $cicloFormativo['codigo'] }}</p>
            <h2 class="text-2xl font-semibold">{{ $cicloFormativo['nombre'] }}</h2>
            <div @class([
                'font-bold',
                'text-blue-700' => $cicloFormativo['grado'] === 'basico',
                'text-yellow-400' => $cicloFormativo['grado'] === 'medio',
                'text-orange-700' => $cicloFormativo['grado'] === 'superior',
            ])>{{ $cicloFormativo['grado'] }}</div>

            <div class="flex gap-3 pt-2">
                <x-bookme.boton primario :href="route('ciclos-formativos.show', $id)">
                    Detalles
                </x-bookme.boton>
            </div>
        </div>
    </li>

