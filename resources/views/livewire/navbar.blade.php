<header
    x-data="{ isScrolled: false, mobileOpen: false }"
    x-init="isScrolled = window.scrollY > 20"
    @scroll.window="isScrolled = (window.scrollY > 20)"
    :class="isScrolled ? 'shadow-sm border-b border-brand-border bg-white/95 backdrop-blur-md py-3.5' : 'shadow-none border-b border-transparent bg-transparent py-4 sm:py-5'"
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

            <!-- 2. CENTER: Navigation Links with Green Underline on Hover -->
            <nav class="hidden lg:flex items-center gap-8">
                @php
                    $navLinks = [
                        ['name' => 'Home', 'url' => '/'],
                        ['name' => 'About', 'url' => '/#about'],
                        ['name' => 'Services', 'url' => '/#services'],
                        ['name' => 'Training', 'url' => '/#training'],
                        ['name' => 'SHAKTHI', 'url' => '/#shakthi'],
                        ['name' => 'Blog', 'url' => '/#blog'],
                        ['name' => 'Contact Us', 'url' => '/contact'],
                    ];
                @endphp

                @foreach ($navLinks as $link)
                    <a
                        href="{{ $link['url'] }}"
                        class="group relative font-body text-[16px] font-medium text-brand-dark hover:text-brand transition-colors duration-200 py-1"
                    >
                        <span>{{ $link['name'] }}</span>
                        <!-- Green Underline Animation on Hover -->
                        <span class="absolute bottom-0 left-0 w-0 h-[2.5px] bg-brand rounded-full transition-all duration-300 ease-out group-hover:w-full"></span>
                    </a>
                @endforeach
            </nav>

            <!-- 3. RIGHT: Quick Call Button & Mobile Menu Toggle -->
            <div class="flex items-center gap-4">
                
                <!-- Quick Call Action (Desktop/Tablet) -->
                <a
                    href="tel:+919442054000"
                    class="hidden sm:inline-flex items-center gap-2.5 px-5 py-2.5 rounded-lg bg-brand text-white hover:bg-brand-hover transition-all duration-300 text-sm font-semibold shadow-xs hover:shadow-md"
                >
                    <x-lucide-phone-call class="w-4 h-4 text-white" />
                    <span>Quick Call</span>
                </a>

                <!-- Mobile Menu Button (Hamburger) -->
                <button
                    type="button"
                    @click="mobileOpen = true"
                    class="lg:hidden p-2 rounded-lg text-brand-dark hover:bg-brand-light focus:outline-none cursor-pointer"
                    aria-label="Open navigation menu"
                >
                    <x-lucide-menu class="w-6 h-6" />
                </button>

            </div>

        </div>
    </div>

    <!-- 4. FULL-SCREEN MOBILE NAVIGATION OVERLAY (Smooth 60fps Animation, Compact for all screen sizes) -->
    <div
        x-show="mobileOpen"
        x-cloak
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 -translate-y-4 scale-98"
        x-transition:enter-end="opacity-100 translate-y-0 scale-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0 scale-100"
        x-transition:leave-end="opacity-0 -translate-y-4 scale-98"
        x-effect="document.body.classList.toggle('overflow-hidden', mobileOpen)"
        class="fixed inset-0 z-[100] bg-white flex flex-col justify-between p-4 sm:p-6 min-h-screen overflow-y-auto lg:hidden"
    >
        <!-- Top Bar: Logo & Close Button (Compact) -->
        <div class="flex items-center justify-between pb-3 sm:pb-4 border-b border-brand-divider flex-shrink-0">
            <a href="/" @click="mobileOpen = false" class="flex items-center focus:outline-none">
                <img
                    src="{{ asset('assets/logo/logo.png') }}"
                    alt="FOOD GURU CHAKRA Logo"
                    class="h-9 sm:h-11 w-auto object-contain"
                />
            </a>

            <!-- Close (X) Button -->
            <button
                type="button"
                @click="mobileOpen = false"
                class="w-8 h-8 sm:w-10 sm:h-10 rounded-full bg-brand-light text-brand-dark hover:bg-brand hover:text-white flex items-center justify-center transition-all duration-200 focus:outline-none cursor-pointer"
                aria-label="Close navigation menu"
            >
                <x-lucide-x class="w-4 h-4 sm:w-5 sm:h-5" />
            </button>
        </div>

        <!-- Navigation Links: Compact Proportionate Typography -->
        <nav class="my-auto py-2 sm:py-4 space-y-0.5 sm:space-y-1">
            @foreach ($navLinks as $link)
                <a
                    href="{{ $link['url'] }}"
                    @click="mobileOpen = false"
                    class="group flex items-center justify-between py-2 sm:py-2.5 px-3 rounded-lg font-heading text-[16px] sm:text-lg font-normal text-brand-dark hover:text-brand hover:bg-brand-light/50 transition-all duration-200"
                >
                    <span>{{ $link['name'] }}</span>
                    <x-lucide-arrow-right class="w-4 h-4 text-brand-muted opacity-40 group-hover:opacity-100 group-hover:text-brand transition-all transform group-hover:translate-x-1" />
                </a>
            @endforeach
        </nav>

        <!-- Bottom Action CTA (Compact) -->
        <div class="pt-3 sm:pt-4 border-t border-brand-divider space-y-2 flex-shrink-0">
            <a
                href="tel:+919442054000"
                class="w-full flex items-center justify-center gap-2.5 py-2.5 sm:py-3 rounded-xl bg-brand text-white font-body font-semibold text-xs sm:text-sm shadow-sm hover:bg-brand-hover transition-all"
            >
                <x-lucide-phone-call class="w-4 h-4" />
                <span>Quick Call (+91 94420 54000)</span>
            </a>
            <p class="text-center font-body text-[11px] text-brand-muted">
                FOOD GURU CHAKRA™ &bull; Coimbatore (HQ)
            </p>
        </div>
    </div>
</header>
