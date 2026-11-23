@props(['autor', 'imagen'])

<div class="p-6 rounded border bg-white flex flex-col gap-6 w-full md:w-1/2 shadow-xl">
    <p>{{ $slot }}</p>

    <div>
        <div class="flex items-center gap-4">
            <img class="w-20 rounded-full border" src="{{ $imagen }}" alt="">
            <div class="flex flex-col">
                <strong>{{ $autor }}</strong>
                
                @isset($footer)
                    <small>{{ $footer }}</small>
                @endisset
            </div>
        </div>
    </div>
</div>