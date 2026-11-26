@props(['familiasProfesionales'])

<x-layout titulo="Listado de familias profesionales">
    <div class="max-w-6xl mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Familias profesionales</h1>
            <x-bookme.boton href="{{ route('familias-profesionales.create') }}">
                Nueva familia profesional
            </x-bookme.boton>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach ($familiasProfesionales as $id => $familia)
                <x-tarjeta-familia-profesional-listado :familia="$familia" :id="$id" />
            @endforeach
        </div>
    </div>
</x-layout>