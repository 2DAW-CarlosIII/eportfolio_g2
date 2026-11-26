@props(['evidencias', 'id'])

<x-layout titulo="Listado de evidencias">
    <p>Aquí aparecerá el listado de evidencias.</p>
    @forelse ($evidencias as $evidencia)
    @php
        $id = $loop->index;
    @endphp
        
        <x-tarjeta :id="$id" :evidencia="$evidencia" />
    @empty
        <p>No hay evidencias disponibles.</p>
    @endforelse
</x-layout>