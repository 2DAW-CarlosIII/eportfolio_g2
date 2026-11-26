@props(['familia', 'id'])

<div class="border rounded-lg p-4 shadow bg-white flex flex-col justify-between">
    <div>
        <span class="text-sm font-semibold text-gray-500">{{ $familia['codigo'] }}</span>
        <h2 class="text-lg font-bold mb-4">{{ $familia['nombre'] }}</h2>
    </div>

    <div>
        <x-bookme.boton primario href="{{ route('familias-profesionales.show', ['id' => $id]) }}">
            Ver detalle
        </x-bookme.boton>
    </div>
</div>
