<header
    x-data="{ isScrolled: false }"
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
                        ['name' => 'Contact Us', 'url' => '/#contact'],
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

            <!-- 3. RIGHT: Quick Call Button (Minimal Radius like Home buttons) & Mobile Menu Toggle -->
            <div class="flex items-center gap-4">
                
                <!-- Quick Call Action (rounded-lg matching home buttons) -->
                <a
                    href="tel:+919876543210"
                    class="hidden sm:inline-flex items-center gap-2.5 px-5 py-2.5 rounded-lg bg-brand text-white hover:bg-brand-hover transition-all duration-300 text-sm font-semibold shadow-xs hover:shadow-md"
                >
                    <x-lucide-phone-call class="w-4 h-4 text-white" />
                    <span>Quick Call</span>
                </a>

                <!-- Mobile Menu Button (Livewire Interactive Toggle) -->
                <button
                    type="button"
                    wire:click="toggleMobileMenu"
                    class="lg:hidden p-2 rounded-lg text-brand-dark hover:bg-brand-light focus:outline-none"
                    aria-label="Toggle navigation menu"
                >
                    @if ($mobileMenuOpen)
                        <x-lucide-x class="w-6 h-6" />
                    @else
                        <x-lucide-menu class="w-6 h-6" />
                    @endif
                </button>

            </div>

        </div>
    </div>

    <!-- 4. MOBILE NAVIGATION DRAWER -->
    @if ($mobileMenuOpen)
        <div class="lg:hidden bg-white border-b border-brand-divider px-4 pt-3 pb-6 shadow-xl animate-fadeIn">
            <div class="flex flex-col space-y-3">
                @foreach ($navLinks as $link)
                    <a
                        href="{{ $link['url'] }}"
                        wire:click="toggleMobileMenu"
                        class="py-2.5 px-3 rounded-lg text-[16px] font-medium text-brand-dark hover:bg-brand-light transition-colors"
                    >
                        {{ $link['name'] }}
                    </a>
                @endforeach

                <div class="pt-3 border-t border-brand-border">
                    <a
                        href="tel:+919876543210"
                        class="w-full flex items-center justify-center gap-2 py-3 rounded-lg bg-brand text-white font-medium text-sm shadow-xs hover:bg-brand-hover transition-colors"
                    >
                        <x-lucide-phone-call class="w-4 h-4" />
                        <span>Quick Call Now</span>
                    </a>
                </div>
            </div>
        </div>
    @endif
</header>
