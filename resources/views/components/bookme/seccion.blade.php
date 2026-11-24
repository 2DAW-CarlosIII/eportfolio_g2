@props(['titulo', 'gris' => false])

<section @class(['bg-gray-50' => $gris])>
    <div class="mx-auto sm:px-7 px-4 max-w-screen-xl py-20 flex flex-col gap-10">
        <div class="flex flex-col gap-4">
            <h2 class="text-4xl font-bold text-center">{{ $titulo }}</h2>
            @isset($descripcion)
                <p class="text-base md:text-lg text-center max-w-[600px] mx-auto">{{ $descripcion }}</p>
            @endisset
        </div>

        {{ $slot }}
    </div>
</section>