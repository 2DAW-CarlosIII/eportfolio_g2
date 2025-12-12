<x-dropdown align="right" width="48">
    <x-slot name="trigger">
        <button type="button" class="button primary">
            <div>{{ Auth::user()->name }}</div>
        </button>
    </x-slot>

    <x-slot name="content">
        <x-dropdown-link :href="route('profile.edit')">
            {{ __('Profile') }}
        </x-dropdown-link>

        <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-dropdown-link href="route('logout')"
                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-dropdown-link>
        </form>
    </x-slot>
</x-dropdown>
