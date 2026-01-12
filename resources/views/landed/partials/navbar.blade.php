<nav id="nav">
    <ul>
        <li><a href="index.html">Home</a></li>
        <li>
            <a href="#">Layouts</a>
            <ul>
                <li><a href="left-sidebar.html">Left Sidebar</a></li>
                <li><a href="right-sidebar.html">Right Sidebar</a></li>
                <li><a href="no-sidebar.html">No Sidebar</a></li>
                <li>
                    <a href="#">Submenu</a>
                    <ul>
                        <li><a href="#">Option 1</a></li>
                        <li><a href="#">Option 2</a></li>
                        <li><a href="#">Option 3</a></li>
                        <li><a href="#">Option 4</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="elements.html">Elements</a></li>
        @if (Route::has('login'))
            @auth
                <li>
                    <a href="{{ url('/dashboard') }}"
                        class="inline-block px-5 py-1.5 border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] rounded-sm text-sm leading-normal">
                        Dashboard
                    </a>
                </li>
                <li>
                    @include('landed.partials.dropdown-user')
                </li>
            @else
                <li>
                    <a href="{{ route('login') }}"
                        class="inline-block px-5 py-1.5 text-[#1b1b18] border border-transparent hover:border-[#19140035] rounded-sm text-sm leading-normal">
                        Log in
                    </a>
                </li>
                @if (Route::has('register'))
                    <li>
                        <a href="{{ route('register') }}"
                            class="inline-block px-5 py-1.5 border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] rounded-sm text-sm leading-normal">
                            Register
                        </a>
                    </li>
                @endif
            @endauth
        @endif

    </ul>
</nav>
