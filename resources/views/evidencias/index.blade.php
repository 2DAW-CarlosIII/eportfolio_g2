@props(['evidencias'])

<x-layout titulo="Listado de evidencias">
    <p>Aquí aparecerá el listado de evidencias.</p>
    @forelse ($evidencias as $evidencia)
        <x-tarjeta :evidencia="$evidencia" />
    @empty
        <p>No hay evidencias disponibles.</p>
    @endforelse
</x-layout>