<x-layout>
    <div class="max-w-3xl mx-auto py-8 px-4">
        <div class="p-6 bg-white border border-gray-200 rounded-lg shadow-sm">
            <span class="inline-block px-2.5 py-1 text-xs font-semibold text-blue-800 bg-blue-100 rounded">
                Código: {{ $familia['codigo'] }}
            </span>

            <h1 class="mt-2 text-2xl font-bold text-gray-900">
                {{ $familia['nombre'] }}
            </h1>

            <p class="mt-4 text-gray-700 leading-relaxed">
                {{ $familia['descripcion'] }}
            </p>

            <div class="mt-6 pt-4 border-t border-gray-200 flex gap-3">
                <a href="{{ route('familias-profesionales.edit', ['id' => $id]) }}"
                   class="px-4 py-2 text-sm font-medium text-white bg-amber-600 rounded-md hover:bg-amber-700 transition">
                    Editar familia profesional
                </a>

                <a href="{{ route('familias-profesionales.index') }}"
                   class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-200 rounded-md hover:bg-gray-300 transition">
                    Volver al listado
                </a>
            </div>
        </div>
    </div>
</x-layout>
