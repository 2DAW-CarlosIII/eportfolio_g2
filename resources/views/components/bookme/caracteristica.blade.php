@props(['titulo', 'icono' => 'bi-badge-8k-fill'])

<div class="flex flex-col text-center max-w-[340px]">
    <div class="border-2 border-orange-50 bg-orange-100 mx-auto rounded-full text-orange-600 w-12 h-12 flex">
        <i class="bi {{ $icono }} text-2xl my-auto mx-auto"></i>
    </div>
    <h2 class="mt-4 text-xl font-semibold text-gray-800">{{ $titulo }}</h2>
    <p class="mt-2 text-gray-500 text-sm">{{ $slot }}</p>
</div>
