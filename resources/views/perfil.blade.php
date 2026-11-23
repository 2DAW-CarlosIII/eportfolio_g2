<x-layout :id="$id">
    <h1>Perfil</h1>
    <p>
        @isset($id)
            Perfil del usuario {{ $id }}
        @else
            Mi perfil
        @endisset
    </p>
</x-layout>
