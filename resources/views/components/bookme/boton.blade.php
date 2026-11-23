@props(['href' => '#', 'primario' => false])

<a href="{{ $href }}" {{ $attributes->class([
    'rounded font-bold py-2 px-6 md:text-base',
    'bg-orange-500 border border-orange-500 text-white hover:bg-orange-600' => $primario,
    'bg-white border border-gray-200 hover:bg-gray-50' => ! $primario,
]) }}>{{ $slot }}</a>