@props(['titulo' => null])

<x-bookme.layout :titulo="$titulo">
    {{ $slot }}
</x-bookme.layout>