@props(['titulo' => null])

<x-bookme.layout :titulo="$titulo">
    @session('mensaje')
        <div class="mb-6 rounded border border-green-300 bg-green-50 p-4 text-green-800">
            {{ $value }}
        </div>
    @endsession
    {{ $slot }}
</x-bookme.layout>
