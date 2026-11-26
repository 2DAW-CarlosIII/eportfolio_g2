
@props(['titulo' => null])

@php
    $texto = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim fusce tortor, ac sed malesuada blandit. Et mi gravida sem feugiat.';
    $ventajas = ['Hola free plan', 'No credit card needed', 'Support 24/24 - 7/7'];
    $caracteristicas = [
        ['titulo' => 'Lorem ipsum et', 'texto' => $texto],
        ['titulo' => 'Fully ready',    'texto' => $texto],
        ['titulo' => 'Super yes',      'texto' => $texto],
        ['titulo' => 'Lorem ipsum et', 'texto' => $texto],
        ['titulo' => 'Fully ready',    'texto' => $texto],
        ['titulo' => 'Super yes',      'texto' => $texto],
    ];

    $logos = [
        'https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/1200px-Google_2015_logo.svg.png',
        'https://upload.wikimedia.org/wikipedia/commons/thumb/1/1a/Coinbase.svg/2560px-Coinbase.svg.png',
        'https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Stripe_Logo%2C_revised_2016.svg/2560px-Stripe_Logo%2C_revised_2016.svg.png',
        'https://upload.wikimedia.org/wikipedia/commons/thumb/3/37/Firebase_Logo.svg/1280px-Firebase_Logo.svg.png',
        'https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/1200px-Google_2015_logo.svg.png',
        'https://upload.wikimedia.org/wikipedia/commons/thumb/1/1a/Coinbase.svg/2560px-Coinbase.svg.png',
        'https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Stripe_Logo%2C_revised_2016.svg/2560px-Stripe_Logo%2C_revised_2016.svg.png',
        'https://upload.wikimedia.org/wikipedia/commons/thumb/3/37/Firebase_Logo.svg/1280px-Firebase_Logo.svg.png',
        'https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/1200px-Google_2015_logo.svg.png',
        'https://upload.wikimedia.org/wikipedia/commons/thumb/1/1a/Coinbase.svg/2560px-Coinbase.svg.png',
        'https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Stripe_Logo%2C_revised_2016.svg/2560px-Stripe_Logo%2C_revised_2016.svg.png',
    ];

    $respuesta = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi laboriosam vitae reiciendis corrupti!';
    $preguntas = [
        ['pregunta' => 'How does bookme work?',          'respuesta' => $respuesta],
        ['pregunta' => 'What type of bookme?',           'respuesta' => $respuesta],
        ['pregunta' => 'Can I cancel my subscription?',  'respuesta' => $respuesta],
        ['pregunta' => 'is bookme safe?',                'respuesta' => $respuesta],
        ['pregunta' => 'Can I use 2 account?',           'respuesta' => $respuesta],
        ['pregunta' => 'Is bookme a free service?',      'respuesta' => $respuesta],
    ];
@endphp
  
<main>

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
                    <x-bookme.boton class="text-sm">Book a demo</x-bookme.boton>
                    <x-bookme.boton primario class="text-sm">Get started - it's free</x-bookme.boton>
                </div>
            
                <div class="flex flex-wrap flex-row justify-center gap-4">
                    @foreach ($ventajas as $ventaja)
                        <x-bookme.ventaja :texto="$ventaja" />
                    @endforeach
                </div>
            </div>
        </div>

        <div class="-z-10 absolute top-0 w-full h-[200px] bg-gradiant">

        </div>
    </section>
    <section class="px-6 md:px-2">
        <div data-aos="fade-up"
            class="relative mx-auto sm:px-7 px-4 max-w-screen-xl py-10 flex items-center aos-init aos-animate">
            <img src="{{ asset('bookme/imgs/hero.png') }}" class="mx-auto w-full max-w-[1000px] rounded shadow-2xl" alt="Hero Image">
        </div>
    </section>
         <section>
        <div class="mx-auto sm:px-7 px-4 max-w-screen-xl py-20 flex flex-col gap-6">
            <h2 class="text-4xl font-bold text-center">{{ $titulo ?? config('app.name') }}</h2>
            {{ $slot }}
        </div>
    </section>
    <section class="bg-gray-50">
        <div class="flex flex-col gap-8 mx-auto sm:px-7 px-4 max-w-screen-xl py-20 mt-20">
            <x-bookme.seccion titulo="Lorem ipsum dolor" gris>
    <x-slot:descripcion>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque autem eos magnam alias, dolorum...
    </x-slot:descripcion>

    <ul class="flex flex-row gap-5 justify-center flex-wrap mx-auto items-center">
        @foreach ($logos as $logo)
            <li><img class="grayscale max-w-[140px]" src="{{ $logo }}" alt=""></li>
        @endforeach
    </ul>
</x-bookme.seccion>
    </section>
    <section>
        <div class="mx-auto sm:px-7 px-4 max-w-screen-xl py-20 flex flex-col gap-10">
            <x-bookme.seccion titulo="Lorem ipsum dolor">
    <x-slot:descripcion>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque autem eos magnam alias, dolorum...
    </x-slot:descripcion>

    <div class="flex flex-row gap-5 justify-center flex-wrap mx-auto items-center">
        @foreach ($caracteristicas as $c)
            <x-bookme.caracteristica :titulo="$c['titulo']">{{ $c['texto'] }}</x-bookme.caracteristica>
        @endforeach
    </div>
            </x-bookme.seccion>
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
                    <x-bookme.boton class="text-xs">Book a demo</x-bookme.boton>
                    <x-bookme.boton primario class="text-xs">Get started - it's free</x-bookme.boton>
                </div>
            </div>
            <div class="flex flex-col gap-4 w-full">
                <div class="w-full flex flex-col md:flex-row gap-4">
                    <div class="p-6 rounded border border-gray-200 bg-white flex flex-col gap-6 w-full md:w-1/2 shadow-xl">
                        <p>
                            "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur reprehenderit
                            quibusdam
                            est consequatur porro, repellendus optio officiis? Ab, commodi, aperiam iusto, enim deleniti
                            a
                            obcaecati quod velit quis unde iste."
                        </p>
                        <div class="flex items-center gap-4">
                            <div>
                                <img class="w-20 rounded-full border border-gray-200"

                                    src="https://randomuser.me/api/portraits/men/34.jpg" alt="">
                            </div>
                            <div class="flex flex-col">
                                <strong>Firstname lastname</strong>
                                <small>CEO of yes</small>
                            </div>
                        </div>
                    </div>
                    <div class="p-6 rounded border border-gray-200 bg-white flex flex-col gap-6 w-full md:w-1/2 shadow-xl">
                        <p>
                            "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur reprehenderit
                            quibusdam
                            est consequatur porro, repellendus optio officiis? Ab, commodi, aperiam iusto, enim deleniti
                            a
                            obcaecati quod velit quis unde iste."
                        </p>
                        <div class="flex items-center gap-4">
                            <div>
                                <img class="w-20 rounded-full border border-gray-200"

                                    src="https://randomuser.me/api/portraits/men/34.jpg" alt="">
                            </div>
                            <div class="flex flex-col">
                                <strong>Firstname lastname</strong>
                                <small>CEO of yes</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full flex flex-col md:flex-row gap-4">
                    <div class="p-6 rounded border border-gray-200 bg-white flex flex-col gap-6 w-full md:w-1/2 shadow-xl">
                        <p>
                            "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur reprehenderit
                            quibusdam est
                            consequatur porro, repellendus optio officiis? Ab, commodi, aperiam iusto, enim deleniti a
                            obcaecati
                            quod velit quis unde iste."
                        </p>
                        <div class="flex items-center gap-4">
                            <div>
                                <img class="w-20 rounded-full border border-gray-200"

                                    src="https://randomuser.me/api/portraits/men/34.jpg" alt="">
                            </div>
                            <div class="flex flex-col">
                                <strong>Firstname lastname</strong>
                                <small>CEO of yes</small>
                            </div>
                        </div>
                    </div>
                    <div class="p-6 rounded border border-gray-200 bg-white flex flex-col gap-6 w-full md:w-1/2 shadow-xl">
                        <p>
                            "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur reprehenderit
                            quibusdam est
                            consequatur porro, repellendus optio officiis? Ab, commodi, aperiam iusto, enim deleniti a
                            obcaecati
                            quod velit quis unde iste."
                        </p>
                        <div class="flex items-center gap-4">
                            <div>
                                <img class="w-20 rounded-full border border-gray-200"

                                    src="https://randomuser.me/api/portraits/men/34.jpg" alt="">
                            </div>
                            <div class="flex flex-col">
                                <strong>Firstname lastname</strong>
                                <small>CEO of yes</small>
                            </div>
                        </div>
                    </div>
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
                            class="flex items-center justify-between w-full p-4 pb-1 text-sm text-left select-none lg:text-base cursor-pointer"
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
                   @foreach ($preguntas as $p)
                        <x-bookme.pregunta :pregunta="$p['pregunta']">{{ $p['respuesta'] }}</x-bookme.pregunta>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</main>
