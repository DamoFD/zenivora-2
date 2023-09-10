<header class="bg-brand-gray z-[3] fixed top-0 left-0 w-full" x-data="{ open: false }">
    <nav class="w-full mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between h-16 lg:h-22 lg:mt-2">

        <a href="{{ route('home') }}">
            <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
        </a>

        <ul class="hidden space-x-8 sm:-my-px sm:flex items-center">
            <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                {{ __('Home') }}
            </x-nav-link>
            <x-nav-link :href="route('about')" :active="request()->routeIs('about')">
                {{ __('About') }}
            </x-nav-link>
            <x-nav-link :href="route('locations')" :active="request()->routeIs('locations')">
                {{ __('Locations') }}
            </x-nav-link>
            <x-nav-link :href="route('pricing')" :active="request()->routeIs('pricing')">
                {{ __('Pricing') }}
            </x-nav-link>
            <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')">
                {{ __('Contact') }}
            </x-nav-link>

            <!-- Settings Dropdown -->
            @if (Auth::user())
                <li class="hidden sm:flex sm:items-center sm:ml-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-brand-white hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                <img class="rounded-full w-6 h-6 mr-2 object-cover" src="{{ Auth::user()->getAvatar('webp', 24) }}" />
                                <p class="break-words">{{ Auth::user()->username }}</p>
                                <svg class="fill-current h-4 w-4 ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link rel="nofollow" :href="route('dashboard')">
                                {{ __('Dashboard') }}
                            </x-dropdown-link>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link rel="nofollow" :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>

                    </x-dropdown>
                </li>
            @endif

            @if(!Auth::user())
                <x-nav-link rel="nofollow" :href="route('login')" :active="request()->routeIs('login')">
                    {{ __('Login') }}
                </x-nav-link>
            @endif
            <li>
                <x-secondary-link href="{{ route('contact') }}" class="font-extrabold">
                    Get Quote
                </x-secondary-link>
            </li>
        </ul>

        <!-- Hamburger -->
        <button id="mobile-nav" aria-label="mobile-nav" @click="open = ! open" class="inline-flex sm:hidden items-center justify-center p-2 rounded-md text-brand-gray">
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </nav>

    <!-- Small Screen Navigation Menu -->
    <nav :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden w-full">
        <ul class="pt-2 pb-3 space-y-1 w-full">
            <li class="w-full flex justify-center">
                <x-primary-link href="{{ route('contact') }}" class="font-extrabold">
                    Get Quote
                </x-primary-link>
            </li>
            @if (Auth::user())
                <li>
                    <p class="
                            block
                            w-full
                            pl-3
                            pr-4
                            py-2
                            border-l-4
                            border-transparent
                            text-left
                            text-base
                            font-extrabold
                            text-brand-primary
                        "
                    >
                        {{ Auth::user()->username }}
                    </p>
                </li>
            @endif

            @if (Auth::user())
                <x-responsive-nav-link rel="nofollow" :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    {{ __('Dashboard') }}
                </x-responsive-nav-link>
            @endif

            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">
                {{ __('Home') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('about')" :active="request()->routeIs('about')">
                {{ __('About') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('locations')" :active="request()->routeIs('locations')">
                {{ __('Locations') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('pricing')" :active="request()->routeIs('pricing')">
                {{ __('Pricing')}}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('contact')" :active="request()->routeIs('contact')">
                {{ __('Contact') }}
            </x-responsive-nav-link>

            @if (Auth::user())
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="
                            block
                            w-full
                            pl-3
                            pr-4
                            py-2
                            border-l-4
                            border-transparent
                            text-left
                            text-base
                            font-medium
                            text-brand-white
                            " type="submit">Log Out</button>
                    </form>
                </li>
            @else
                <x-responsive-nav-link rel="nofollow" :href="route('login')">
                    {{ __('Login') }}
                </x-responsive-nav-link>
            @endif
        </ul>

    </nav>
</header>
