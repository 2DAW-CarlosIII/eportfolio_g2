@props(['href' => '#', 'alt' => false])

<a href="{{ $href }}" @class([
    'text-sm md:text-base',
    'bg-white border rounded font-bold py-2 px-6 hover:bg-gray-50' => ! $alt,
    'bg-orange-500 border border-orange-500 rounded text-white font-bold py-2 px-6 hover:bg-orange-600' => $alt,
])>{{ $slot }}</a>