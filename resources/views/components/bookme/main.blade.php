@php
     $testimonios = [
        [   'texto' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur reprehenderit
                        quibusdam est
                        consequatur porro, repellendus optio officiis? Ab, commodi, aperiam iusto, enim deleniti a
                        obcaecati
                        quod velit quis unde iste.',
            'cargo' => 'CEO of yes'
        ],

        [   'texto' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur reprehenderit
                        quibusdam est
                        consequatur porro, repellendus optio officiis? Ab, commodi, aperiam iusto, enim deleniti a
                        obcaecati
                        quod velit quis unde iste.',
            'cargo' => 'CEO of no'
        ],
    
     ];
@endphp

@props(['titulo' => null])

<section class="relative">
    <div class="z-10">
        <div class="mx-auto max-w-5xl px-6 md:px-2 py-10 md:py-24 flex flex-col gap-6 items-center">
            <h1 class="text-4xl font-bold text-center max-w-[600px]">
                Lorem ipsum dolor sit<br>amet consectetur adipisicing elit
            </h1>
            <p class="text-gray-600 text-base md:text-lg text-center max-w-[600px]">
                Dolorem cupiditate voluptatem veniam reprehenderit, commodi ea quia, sunt enim modi fugit, eius qui
                explicabo sit inventore labore deleniti iure atque optio.
            </p>
            <div class="flex gap-4 items-center text-center">
                <x-bookme.boton>Book a demo</x-bookme.boton>
                <x-bookme.boton alt>Get started - it's free</x-bookme.boton>
            </div>
            <div class="flex flex-wrap flex-row justify-center gap-4">
                <small>
                    <i
                        class="mr-1 bi bi-check bg-orange-100 border border-orange-200 rounded-full w-[21px] h-[21px] inline-block text-center text-orange-600"></i>
                    <span>Lifetime free plan</span>
                </small>
                <small>
                    <i
                        class="mr-1 bi bi-check bg-orange-100 border border-orange-200 rounded-full w-[21px] h-[21px] inline-block text-center text-orange-600"></i>
                    <span>No credit card needed</span>
                </small>
                <small>
                    <i
                        class="mr-1 bi bi-check bg-orange-100 border border-orange-200 rounded-full w-[21px] h-[21px] inline-block text-center text-orange-600"></i>
                    <span>Support 24/24 - 7/7</span>
                </small>
            </div>
            {{ $slot }}

        </div>
        
    </div>
    <div class="-z-10 absolute top-0 w-full h-[200px] bg-gradiant">
        
    </div>
</section>
<section class="px-6 md:px-2">
    <div data-aos="fade-up"
        class="relative mx-auto sm:px-7 px-4 max-w-screen-xl py-10 flex items-center aos-init aos-animate">
        <img src="{{ asset('bookme/images/hero.png') }}" class="mx-auto w-full max-w-[1000px] rounded shadow-2xl" alt="">
    </div>
</section>
<section class="bg-gray-50">
    <div class="flex flex-col gap-8 mx-auto sm:px-7 px-4 max-w-screen-xl py-20 mt-20">
        <div class="flex flex-col gap-4">
            <h2 class="text-4xl font-bold text-center">
                Lorem ipsum dolor
            </h2>
            <p class="text-base md:text-lg text-center">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque autem eos magnam alias, dolorum...
            </p>
        </div>
        <ul class="flex flex-row gap-5 justify-center flex-wrap mx-auto items-center">
            <li>
                <img class="grayscale max-w-[140px]"
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/1200px-Google_2015_logo.svg.png"
                    alt="">
            </li>
            <li>
                <img class="grayscale max-w-[140px]"
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1a/Coinbase.svg/2560px-Coinbase.svg.png"
                    alt="">
            </li>
            <li>
                <img class="grayscale max-w-[140px]"
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Stripe_Logo%2C_revised_2016.svg/2560px-Stripe_Logo%2C_revised_2016.svg.png"
                    alt="">
            </li>
            <li>
                <img class="grayscale max-w-[140px]"
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/37/Firebase_Logo.svg/1280px-Firebase_Logo.svg.png"
                    alt="">
            </li>
            <li>
                <img class="grayscale max-w-[140px]"
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/1200px-Google_2015_logo.svg.png"
                    alt="">
            </li>
            <li>
                <img class="grayscale max-w-[140px]"
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1a/Coinbase.svg/2560px-Coinbase.svg.png"
                    alt="">
            </li>
            <li>
                <img class="grayscale max-w-[140px]"
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Stripe_Logo%2C_revised_2016.svg/2560px-Stripe_Logo%2C_revised_2016.svg.png"
                    alt="">
            </li>
            <li>
                <img class="grayscale max-w-[140px]"
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/37/Firebase_Logo.svg/1280px-Firebase_Logo.svg.png"
                    alt="">
            </li>
            <li>
                <img class="grayscale max-w-[140px]"
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/1200px-Google_2015_logo.svg.png"
                    alt="">
            </li>
            <li>
                <img class="grayscale max-w-[140px]"
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1a/Coinbase.svg/2560px-Coinbase.svg.png"
                    alt="">
            </li>
            <li>
                <img class="grayscale max-w-[140px]"
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Stripe_Logo%2C_revised_2016.svg/2560px-Stripe_Logo%2C_revised_2016.svg.png"
                    alt="">
            </li>
        </ul>
    </div>
</section>
<section>
    <div class="mx-auto sm:px-7 px-4 max-w-screen-xl py-20 flex flex-col gap-10">
        <div class="flex flex-col gap-4">
            <h2 class="text-4xl font-bold text-center">
                Lorem ipsum dolor
            </h2>
            <p class="text-base md:text-lg text-center max-w-[600px] mx-auto">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque autem eos magnam alias, dolorum...
            </p>
        </div>
        <div class="flex flex-row gap-5 justify-center flex-wrap mx-auto items-center">
            <div class="flex flex-col text-center max-w-[340px]">
                <div
                    class="border-2 border-orange-50 bg-orange-100 mx-auto rounded-full text-orange-600 w-12 h-12 flex">
                    <i class="bi bi-badge-8k-fill text-2xl my-auto mx-auto"></i>
                </div>
                <h2 class="mt-4 text-xl font-semibold text-gray-800">Lorem ipsum et</h2>
                <p class="mt-2 text-gray-500 text-sm">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim
                    fusce tortor, ac sed malesuada blandit. Et mi gravida sem feugiat.
                </p>
            </div>
            <div class="flex flex-col text-center max-w-[340px]">
                <div
                    class="border-2 border-orange-50 bg-orange-100 mx-auto rounded-full text-orange-600 w-12 h-12 flex">
                    <i class="bi bi-badge-8k-fill text-2xl my-auto mx-auto"></i>
                </div>
                <h2 class="mt-4 text-xl font-semibold text-gray-800">Fully ready</h2>
                <p class="mt-2 text-gray-500 text-sm">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim
                    fusce tortor, ac sed malesuada blandit. Et mi gravida sem feugiat.
                </p>
            </div>
            <div class="flex flex-col text-center max-w-[340px]">
                <div
                    class="border-2 border-orange-50 bg-orange-100 mx-auto rounded-full text-orange-600 w-12 h-12 flex">
                    <i class="bi bi-badge-8k-fill text-2xl my-auto mx-auto"></i>
                </div>
                <h2 class="mt-4 text-xl font-semibold text-gray-800">Super yes</h2>
                <p class="mt-2 text-gray-500 text-sm">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim
                    fusce tortor, ac sed malesuada blandit. Et mi gravida sem feugiat.
                </p>
            </div>
            <div class="flex flex-col text-center max-w-[340px]">
                <div
                    class="border-2 border-orange-50 bg-orange-100 mx-auto rounded-full text-orange-600 w-12 h-12 flex">
                    <i class="bi bi-badge-8k-fill text-2xl my-auto mx-auto"></i>
                </div>
                <h2 class="mt-4 text-xl font-semibold text-gray-800">Lorem ipsum et</h2>
                <p class="mt-2 text-gray-500 text-sm">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim
                    fusce tortor, ac sed malesuada blandit. Et mi gravida sem feugiat.
                </p>
            </div>
            <div class="flex flex-col text-center max-w-[340px]">
                <div
                    class="border-2 border-orange-50 bg-orange-100 mx-auto rounded-full text-orange-600 w-12 h-12 flex">
                    <i class="bi bi-badge-8k-fill text-2xl my-auto mx-auto"></i>
                </div>
                <h2 class="mt-4 text-xl font-semibold text-gray-800">Fully ready</h2>
                <p class="mt-2 text-gray-500 text-sm">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim
                    fusce tortor, ac sed malesuada blandit. Et mi gravida sem feugiat.
                </p>
            </div>
            <div class="flex flex-col text-center max-w-[340px]">
                <div
                    class="border-2 border-orange-50 bg-orange-100 mx-auto rounded-full text-orange-600 w-12 h-12 flex">
                    <i class="bi bi-badge-8k-fill text-2xl my-auto mx-auto"></i>
                </div>
                <h2 class="mt-4 text-xl font-semibold text-gray-800">Super yes</h2>
                <p class="mt-2 text-gray-500 text-sm">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim
                    fusce tortor, ac sed malesuada blandit. Et mi gravida sem feugiat.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="bg-gray-50">
    <div class="mx-auto sm:px-7 px-4 max-w-screen-xl py-20 flex gap-10 flex flex-col lg:flex-row items-center">
        <div class="flex flex-col gap-4 w-full max-w-[400px]">
            <div class="flex gap-1">
                <i class="bi bi-star-fill text-orange-600"></i>
                <i class="bi bi-star-fill text-orange-600"></i>
                <i class="bi bi-star-fill text-orange-600"></i>
                <i class="bi bi-star-fill text-orange-600"></i>
                <i class="bi bi-star-fill text-orange-600"></i>
            </div>
            <div>
                <h2 class="text-2xl font-bold">
                    Lorem ipsum dolor sit
                </h2>
                <p class="text-gray-600 text-base">
                    Dolorem cupiditate voluptatem veniam reprehenderit.
                </p>
            </div>
            <div class="flex gap-4 text-center">
                <x-bookme.boton>Book a demo</x-bookme.boton>
                <x-bookme.boton alt>Get started - it's free</x-bookme.boton>
            </div>
        </div>
        <div class="flex flex-col gap-4 w-full">
            <div class="w-full flex flex-col md:flex-row gap-4">
                @foreach ($testimonios as $testimonio)
                    <x-bookme.testimonio autor="Firstname lastname" imagen="https://randomuser.me/api/portraits/men/34.jpg">
                        {{ $testimonio['texto'] }}
                        <x-slot:footer>
                            {{ $testimonio['cargo'] }}
                        </x-slot:footer>
                    </x-bookme.testimonio>
                @endforeach
            </div>
            <div class="w-full flex flex-col md:flex-row gap-4">
                @foreach ($testimonios as $testimonio)
                    <x-bookme.testimonio autor="Firstname lastname" imagen="https://randomuser.me/api/portraits/men/34.jpg">
                        {{ $testimonio['texto'] }}
                        <x-slot:footer>
                            {{ $testimonio['cargo'] }}
                        </x-slot:footer>
                    </x-bookme.testimonio>
                @endforeach
            </div>
        </div>
    </div>
</section>
<section>
    <div class="px-2 py-20 mx-auto max-w-7xl">
        <div class="grid grid-cols-1 gap-6 lg:gap-12 lg:grid-cols-3">
            <div class="text-center lg:text-left">
                <div>
                    <h2 class="text-2xl font-bold">
                        Lorem ipsum dolor sit
                    </h2>
                    <p class="text-gray-600 text-base">
                        Dolorem cupiditate voluptatem veniam reprehenderit.
                    </p>
                </div>
            </div>
            <div class="relative w-full mx-auto font-normal lg:col-span-2" x-data="{
    activeAccordion: '',
    setActiveAccordion(id) {
    this.activeAccordion = (this.activeAccordion == id) ? '' : id
    }
    }">
                <div class="cursor-pointer group text-gray-600 hover:text-zinc-500"
                    x-data="{ id: $id('accordion') }"
                    :class="{ 'text-zinc-900': activeAccordion==id, 'text-gray-600 hover:text-zinc-500': activeAccordion!=id }">
                    <button
                        class="flex items-center justify-between w-full p-4 pb-1 text-sm text-left select-none lg:text-base"
                        @click="setActiveAccordion(id)">
                        <span>How does bookme work?</span>
                        <svg class="w-5 h-5 duration-300 ease-out text-zinc-500" fill="none" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-width="1.5"
                            :class="{ '-rotate-[45deg]': activeAccordion==id }">
                            <path d="M12 6v12m6-6H6" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                    <div x-collapse="" x-show="activeAccordion==id"
                        style="height: 0px; overflow: hidden; display: none;" hidden="">
                        <div class="p-4 pt-2 text-sm text-gray-500">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi laboriosam vitae
                            reiciendis corrupti! Explicabo, libero reiciendis iste ipsa voluptatem, cupiditate ab
                            culpa expedita asperiores at quasi laborum tempore magnam corrupti.
                        </div>
                    </div>
                </div>
                <div class="text-gray-600 cursor-pointer group hover:text-zinc-500"
                    x-data="{ id: $id('accordion') }"
                    :class="{ 'text-zinc-900': activeAccordion==id, 'text-gray-600 hover:text-zinc-500': activeAccordion!=id }">
                    <button
                        class="flex items-center justify-between w-full p-4 pb-1 text-sm text-left select-none lg:text-base"
                        @click="setActiveAccordion(id)">
                        <span>What type of bookme?</span>
                        <svg class="w-5 h-5 duration-300 ease-out text-zinc-500" fill="none" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-width="1.5"
                            :class="{ '-rotate-[45deg]': activeAccordion==id }">
                            <path d="M12 6v12m6-6H6" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                    <div x-collapse="" x-show="activeAccordion==id"
                        style="display: none; height: 0px; overflow: hidden;" hidden="">
                        <div class="p-4 pt-2 text-sm text-gray-500">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum ratione expedita
                            possimus inventore in. Explicabo, quasi repellendus a dolore totam laudantium, molestias
                            quis reiciendis rerum vero, numquam sint earum voluptatum?
                        </div>
                    </div>
                </div>
                <div class="text-gray-600 cursor-pointer group hover:text-zinc-500"
                    x-data="{ id: $id('accordion') }"
                    :class="{ 'text-zinc-900': activeAccordion==id, 'text-gray-600 hover:text-zinc-500': activeAccordion!=id }">
                    <button
                        class="flex items-center justify-between w-full p-4 pb-1 text-sm text-left select-none lg:text-base"
                        @click="setActiveAccordion(id)">
                        <span>Can I cancel my subscription?</span>
                        <svg class="w-5 h-5 duration-300 ease-out text-zinc-500" fill="none" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-width="1.5"
                            :class="{ '-rotate-[45deg]': activeAccordion==id }">
                            <path d="M12 6v12m6-6H6" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                    <div x-collapse="" x-show="activeAccordion==id"
                        style="display: none; height: 0px; overflow: hidden;" hidden="">
                        <div class="p-4 pt-2 text-sm text-gray-500">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum ex cum repellendus
                            eligendi maxime magni molestiae saepe beatae, excepturi id dolores recusandae ea
                            perferendis repudiandae? Ea deleniti blanditiis quae iusto!
                        </div>
                    </div>
                </div>
                <div class="text-gray-600 cursor-pointer group hover:text-zinc-500"
                    x-data="{ id: $id('accordion') }"
                    :class="{ 'text-zinc-900': activeAccordion==id, 'text-gray-600 hover:text-zinc-500': activeAccordion!=id }">
                    <button
                        class="flex items-center justify-between w-full p-4 pb-1 text-sm text-left select-none lg:text-base"
                        @click="setActiveAccordion(id)">
                        <span>is bookme safe?</span>
                        <svg class="w-5 h-5 duration-300 ease-out text-zinc-500" fill="none" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-width="1.5"
                            :class="{ '-rotate-[45deg]': activeAccordion==id }">
                            <path d="M12 6v12m6-6H6" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                    <div x-collapse="" x-show="activeAccordion==id"
                        style="display: none; height: 0px; overflow: hidden;" hidden="">
                        <div class="p-4 pt-2 text-sm text-gray-500">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat aspernatur iste ab
                            optio magni veritatis voluptatibus quaerat. Error ipsam dolore, explicabo consequatur
                            incidunt rem culpa, est corporis nihil necessitatibus cum!
                        </div>
                    </div>
                </div>
                <div class="text-gray-600 cursor-pointer group hover:text-zinc-500"
                    x-data="{ id: $id('accordion') }"
                    :class="{ 'text-zinc-900': activeAccordion==id, 'text-gray-600 hover:text-zinc-500': activeAccordion!=id }">
                    <button
                        class="flex items-center justify-between w-full p-4 pb-1 text-sm text-left select-none lg:text-base"
                        @click="setActiveAccordion(id)">
                        <span>Can I use 2 account?</span>
                        <svg class="w-5 h-5 duration-300 ease-out text-zinc-500" fill="none" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-width="1.5"
                            :class="{ '-rotate-[45deg]': activeAccordion==id }">
                            <path d="M12 6v12m6-6H6" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                    <div x-collapse="" x-show="activeAccordion==id"
                        style="display: none; height: 0px; overflow: hidden;" hidden="">
                        <div class="p-4 pt-2 text-sm text-gray-500">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est placeat veritatis ex
                            perspiciatis, incidunt, quos quia accusantium recusandae aspernatur inventore nulla,
                            esse aut expedita numquam rem! Quibusdam deleniti magni rerum.
                        </div>
                    </div>
                </div>
                <div class="text-gray-600 cursor-pointer group hover:text-zinc-500"
                    x-data="{ id: $id('accordion') }"
                    :class="{ 'text-zinc-900': activeAccordion==id, 'text-gray-600 hover:text-zinc-500': activeAccordion!=id }">
                    <button
                        class="flex items-center justify-between w-full p-4 pb-1 text-sm text-left select-none lg:text-base"
                        @click="setActiveAccordion(id)">
                        <span>Is bookme a free service?</span>
                        <svg class="w-5 h-5 duration-300 ease-out text-zinc-500" fill="none" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-width="1.5"
                            :class="{ '-rotate-[45deg]': activeAccordion==id }">
                            <path d="M12 6v12m6-6H6" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                    <div x-collapse="" x-show="activeAccordion==id"
                        style="display: none; height: 0px; overflow: hidden;" hidden="">
                        <div class="p-4 pt-2 text-sm text-gray-500">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, consequuntur optio tempore
                            voluptatibus quae commodi voluptate excepturi pariatur vitae odit eius placeat dicta
                            cum, culpa quod similique, incidunt delectus est.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>