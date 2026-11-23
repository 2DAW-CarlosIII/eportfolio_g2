 <header class="border-b-2">
        <div class="mx-auto max-w-5xl px-6 py-4 flex flex-col md:flex-row gap-2 md:gap-8 items-center">
            <x-bookme.logo />    
            <nav>
                <ul class="flex gap-4 text-sm md:text-base">
                    <li>
                        <a href="#" class="hover:text-orange-500">Solution</a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-orange-500">Pricing</a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-orange-500">Contact</a>
                    </li>
                </ul>
            </nav>
            <div class="flex ml-0 md:ml-auto gap-2 md:gap-8 items-center">
                <a href={{ url('/') }} class="text-sm md:text-base hover:text-orange-500">Demo</a>
                <a href={{ url('/') }}
                    class="text-sm md:text-base bg-orange-500 rounded text-white font-bold py-2 px-6 hover:bg-orange-600">Login
                    /
                    Sign up</a>
            </div>
        </div>
    </header>