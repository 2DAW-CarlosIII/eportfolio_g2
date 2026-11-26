<x-layout>
    <div class="max-w-3xl mx-auto py-8 px-4">
        <div class="p-6 bg-white border border-gray-200 rounded-lg shadow-sm">
            <span class="inline-block px-2.5 py-1 text-xs font-semibold text-blue-800 bg-blue-100 rounded">
                {{ $familia['codigo'] }}
            </span>

            <h1 class="mt-2 text-2xl font-bold text-gray-900">
                {{ $familia['nombre'] }}
            </h1>

            <p class="mt-4 text-gray-700 leading-relaxed">
                {{ $familia['descripcion'] }}
            </p>

            <div class="mt-6 pt-4 border-t border-gray-200 flex gap-3">
                <x-bookme.boton primario href="{{ route('familias-profesionales.edit', ['id' => $id]) }}">
                    Editar
                </x-bookme.boton>

                <x-bookme.boton href="{{ route('familias-profesionales.index') }}">
                    Volver al listado
                </x-bookme.boton>
            </div>
        </div>
    </div>
</x-layout>

