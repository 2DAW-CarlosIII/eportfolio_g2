<x-layout>
    <div class="max-w-3xl mx-auto py-8 px-4">
        <h1 class="text-2xl font-bold text-gray-900 mb-6">Editar familia profesional {{ $id }}</h1>

        <form action="{{ route('familias-profesionales.update', $id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label for="codigo" class="block text-sm font-medium text-gray-700 mb-1">Código</label>
                <input type="text" name="codigo" id="codigo" value="{{ old('codigo', $familia['codigo']) }}"
                       class="w-full rounded-md border border-gray-300 px-3 py-2 text-gray-900 shadow-sm focus:border-blue-500 focus:outline-none">
                @error('codigo')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="nombre" class="block text-sm font-medium text-gray-700 mb-1">Nombre</label>
                <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $familia['nombre']) }}"
                       class="w-full rounded-md border border-gray-300 px-3 py-2 text-gray-900 shadow-sm focus:border-blue-500 focus:outline-none">
                @error('nombre')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="descripcion" class="block text-sm font-medium text-gray-700 mb-1">Descripción</label>
                <textarea name="descripcion" id="descripcion" rows="4"
                          class="w-full rounded-md border border-gray-300 px-3 py-2 text-gray-900 shadow-sm focus:border-blue-500 focus:outline-none">{{ old('descripcion', $familia['descripcion'] ?? '') }}</textarea>
                @error('descripcion')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="pt-2">
                <button type="submit"
                        class="rounded-md bg-blue-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-500">
                    Modificar familia profesional
                </button>
            </div>
        </form>
    </div>
</x-layout>
