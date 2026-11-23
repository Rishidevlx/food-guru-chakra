@props([
    'title' => '',
    'breadcrumbs' => [],
])

<section class="relative w-full bg-[#FAF9F5] pt-28 sm:pt-36 lg:pt-40 pb-12 sm:pb-16 lg:pb-20 overflow-hidden select-none border-b border-brand-border/40">
    
    <!-- 1. Bright Food Background Image (High-Key Commercial Food Photography) -->
    <div class="absolute inset-0 z-0">
        <img
            src="{{ asset('assets/bg/banner-bg.jpg') }}"
            alt="{{ $title }} Banner Background"
            class="w-full h-full object-cover object-center"
        />
        <!-- Gentle soft wash ensuring maximum freshness and readability -->
        <div class="absolute inset-0 bg-white/30 backdrop-contrast-[1.02]"></div>
    </div>

    <!-- 2. Centered Title & Breadcrumbs (Pure & Clean Layout without cross color shades) -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <!-- Title in Signature Brand Green -->
        <h1 class="font-heading font-normal text-3xl sm:text-4xl md:text-5xl lg:text-6xl text-brand-dark tracking-tight mb-3 sm:mb-4">
            {{ $title }}
        </h1>

        <!-- Breadcrumbs Navigation with Clean Pill Styling -->
        <nav class="inline-flex items-center justify-center gap-1.5 sm:gap-2 text-xs sm:text-sm font-body font-medium text-neutral-700 bg-white/90 backdrop-blur-md px-4 sm:px-5 py-1.5 sm:py-2 rounded-full border border-brand-border/80 shadow-sm" aria-label="Breadcrumb">
            <a href="/" class="inline-flex items-center gap-1.5 text-neutral-800 hover:text-brand-gold transition-colors">
                <x-lucide-home class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-brand flex-shrink-0" />
                <span>Home</span>
            </a>
            
            @foreach ($breadcrumbs as $crumb)
                <x-lucide-chevron-right class="w-3.5 h-3.5 text-neutral-400 flex-shrink-0" />
                @if (!empty($crumb['url']))
                    <a href="{{ $crumb['url'] }}" class="text-neutral-800 hover:text-brand-gold transition-colors">
                        {{ $crumb['label'] }}
                    </a>
                @else
                    <span class="text-brand-dark font-semibold">
                        {{ $crumb['label'] }}
                    </span>
                @endif
            @endforeach
        </nav>
    </div>

</section>
