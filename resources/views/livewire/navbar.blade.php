<header
    x-data="{
        isScrolled: false,
        mobileOpen: false,
        isHomePage: {{ request()->is('/') ? 'true' : 'false' }},
        currentPath: window.location.pathname,
        currentHash: window.location.hash || '',
        isActive(url) {
            if (url === '/contact') {
                return this.currentPath.startsWith('/contact');
            }
            if (url === '/about') {
                return this.currentPath.startsWith('/about');
            }
            if (this.currentPath === '/' || this.currentPath === '') {
                if (url.includes('#')) {
                    return this.currentHash === url.replace('/', '');
                }
                return (!this.currentHash || this.currentHash === '#') && (url === '/' || url === '');
            }
            return false;
        }
    }"
    x-init="
        isScrolled = window.scrollY > 20;
        window.addEventListener('hashchange', () => { currentHash = window.location.hash || ''; });
    "
    @scroll.window="isScrolled = (window.scrollY > 20)"
    :class="(isScrolled || mobileOpen || !isHomePage) ? 'shadow-sm border-b border-brand-border bg-white py-3.5' : 'shadow-none border-b border-transparent bg-transparent py-4 sm:py-5'"
    class="fixed top-0 left-0 w-full z-50 transition-all duration-300"
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between">

            <!-- 1. LEFT: Brand Logo Image -->
            <a href="/" class="flex items-center focus:outline-none">
                <img
                    src="{{ asset('assets/logo/logo.png') }}"
                    alt="FOOD GURU CHAKRA Logo"
                    class="h-14 sm:h-16 w-auto object-contain"
                />
            </a>

            <!-- 2. CENTER: Navigation Links with Active Golden Underline -->
            <nav class="hidden lg:flex items-center gap-8">
                @php
                    $isContact = request()->is('contact*');
                    $isAbout = request()->is('about*');
                    $isHome = request()->is('/');

                    $navLinks = [
                        ['name' => 'Home', 'url' => '/'],
                        ['name' => 'About', 'url' => '/about'],
                        ['name' => 'Services', 'url' => '/#services'],
                        ['name' => 'Training', 'url' => '/#training'],
                        ['name' => 'SHAKTHI', 'url' => '/#shakthi'],
                        ['name' => 'Blog', 'url' => '/#blog'],
                        ['name' => 'Contact Us', 'url' => '/contact'],
                    ];
                @endphp

                @foreach ($navLinks as $link)
                    @php
                        $activeByPhp = ($link['url'] === '/contact' && $isContact) || ($link['url'] === '/about' && $isAbout) || ($link['url'] === '/' && $isHome);
                    @endphp
                    <a
                        href="{{ $link['url'] }}"
                        @click="currentHash = '{{ str_replace('/', '', $link['url']) }}'"
                        :class="isActive('{{ $link['url'] }}') ? 'text-brand-gold font-semibold' : 'text-brand-dark hover:text-brand-gold'"
                        class="group relative font-body text-[16px] font-medium transition-colors duration-200 py-1 {{ $activeByPhp ? 'text-brand-gold font-semibold' : 'text-brand-dark' }}"
                    >
                        <span>{{ $link['name'] }}</span>
                        
                        <!-- Golden Underline (Full width when active / selected, animates on hover when inactive) -->
                        <span
                            :class="isActive('{{ $link['url'] }}') ? 'w-full' : 'w-0 group-hover:w-full'"
                            class="absolute bottom-0 left-0 h-[2.5px] bg-brand-gold rounded-full transition-all duration-300 ease-out {{ $activeByPhp ? 'w-full' : '' }}"
                        ></span>
                    </a>
                @endforeach
            </nav>

            <!-- 3. RIGHT: Quick Call Button & Mobile Menu Toggle -->
            <div class="flex items-center gap-3">
                
                <!-- Quick Call Action (Desktop Only: completely hidden on mobile/tablet) -->
                <div class="hidden lg:block">
                    <x-button variant="filled" href="tel:+917845567089" class="!py-2 !px-4 !text-xs sm:!text-sm">
                        <x-slot:icon>
                            <x-lucide-phone-call class="w-3.5 h-3.5 sm:w-4 sm:h-4 inline" />
                        </x-slot:icon>
                        Quick Call
                    </x-button>
                </div>

                <!-- Mobile Menu Button (Hamburger / Close) -->
                <button
                    type="button"
                    @click="mobileOpen = !mobileOpen"
                    class="lg:hidden p-2 rounded-lg text-brand-dark hover:bg-brand-light focus:outline-none cursor-pointer transition-colors"
                    aria-label="Toggle navigation menu"
                >
                    <x-lucide-menu x-show="!mobileOpen" class="w-6 h-6" />
                    <x-lucide-x x-show="mobileOpen" x-cloak class="w-6 h-6" />
                </button>

            </div>

        </div>
    </div>

    <!-- 4. MOBILE NAVIGATION DROPDOWN DRAWER (Clean Content-Height Under Navbar with Generous Padding) -->
    <div
        x-show="mobileOpen"
        x-cloak
        @click.away="mobileOpen = false"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        class="absolute top-full left-0 w-full bg-white border-b border-brand-divider shadow-xl px-5 py-5 sm:px-8 sm:py-6 lg:hidden"
    >
        <!-- Navigation Links without Arrows & with Comfortable Padding -->
        <nav class="space-y-1.5 sm:space-y-2">
            @foreach ($navLinks as $link)
                @php
                    $activeByPhp = ($link['url'] === '/contact' && $isContact) || ($link['url'] === '/about' && $isAbout) || ($link['url'] === '/' && $isHome);
                @endphp
                <a
                    href="{{ $link['url'] }}"
                    @click="mobileOpen = false; currentHash = '{{ str_replace('/', '', $link['url']) }}'"
                    :class="isActive('{{ $link['url'] }}') ? 'text-brand-gold font-semibold bg-brand-light/80' : 'text-brand-dark hover:text-brand-gold hover:bg-brand-light/60'"
                    class="block py-2.5 sm:py-3 px-4 rounded-xl font-heading text-sm sm:text-base font-medium transition-all duration-150 {{ $activeByPhp ? 'text-brand-gold font-semibold bg-brand-light/80' : 'text-brand-dark' }}"
                >
                    {{ $link['name'] }}
                </a>
            @endforeach
        </nav>

        <!-- Quick Call Button in Mobile Drawer using Official x-button -->
        <div class="pt-4 mt-3 border-t border-brand-divider">
            <x-button variant="filled" href="tel:+917845567089" @click="mobileOpen = false" class="w-full !py-3 !text-sm">
                <x-slot:icon>
                    <x-lucide-phone-call class="w-4 h-4 inline" />
                </x-slot:icon>
                Quick Call (+91 78455 67089)
            </x-button>
            <p class="text-center font-body text-[11px] text-brand-muted mt-2.5">
                FOOD GURU CHAKRA™ &bull; Perambalur (HQ)
            </p>
        </div>
    </div>
</header>
