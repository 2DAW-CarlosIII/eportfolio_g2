@props(['ciclosFormativos'])
<x-layout titulo="Ciclos formativos">
    <ul class="grid gap-4 sm:grid-cols-2">
    @forelse ($ciclosFormativos as $id => $cicloFormativo)
    <x-tarjeta-ciclo-formativo-listado :cicloFormativo="$cicloFormativo" :id="$id" />
    @empty
        <li>Todavía no hay Ciclos Formativos.</li>
    @endforelse
    </ul>
</x-layout>
