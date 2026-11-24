@props(['pregunta'])

<div class="cursor-pointer group text-gray-600 hover:text-zinc-500"
    x-data="{ id: $id('accordion') }"
    :class="{ 'text-zinc-900': activeAccordion==id, 'text-gray-600 hover:text-zinc-500': activeAccordion!=id }">
    <button
        class="flex items-center justify-between w-full p-4 pb-1 text-sm text-left select-none lg:text-base cursor-pointer"
        @click="setActiveAccordion(id)">
        <span>{{ $pregunta }}</span>
        <svg class="w-5 h-5 duration-300 ease-out text-zinc-500" fill="none" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-width="1.5"
            :class="{ '-rotate-[45deg]': activeAccordion==id }">
            <path d="M12 6v12m6-6H6" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
    </button>
    <div x-collapse x-show="activeAccordion==id" style="display: none;">
        <div class="p-4 pt-2 text-sm text-gray-500">{{ $slot }}</div>
    </div>
</div>