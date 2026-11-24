@extends('layouts.app')

@section('content')
<!-- =====================================================================
     PAGE BANNER (Matches Reference Style with Breadcrumb)
====================================================================== -->
<x-page-banner title="About Us" :breadcrumbs="[['label' => 'About Us']]" />

<!-- =====================================================================
     ABOUT US - WHO WE ARE SECTION (Styled Identically to Homepage Industries Component)
====================================================================== -->
<section class="py-14 sm:py-20 lg:py-28 bg-white text-brand-dark relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <!-- 2-Column Responsive Layout: Left (Content) & Right (Image with Offset Golden Box) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 sm:gap-12 lg:gap-16 items-center">

            <!-- LEFT COLUMN: Content (Title, Subtext, Checklist with Ticks, Action Buttons) -->
            <div class="lg:col-span-6 flex flex-col justify-center">
                
                <!-- 1. Section Title (Exact Homepage Font & Styling: Who We Are) -->
                <div class="reveal-on-scroll">
                    <h2 class="font-heading font-normal text-2xl sm:text-3xl lg:text-[40px] text-brand-dark tracking-tight mb-3 sm:mb-5 leading-tight">
                        Who We Are
                    </h2>

                    <!-- 2. Subtext / Description (Exact Homepage Typography & Sizing - Regular Weight) -->
                    <p class="font-body text-[13px] sm:text-[15px] lg:text-[17px] text-brand-muted leading-relaxed mb-5 sm:mb-7 max-w-xl">
                        FOOD GURU CHAKRA™ is an independent professional consultancy and training initiative focused on integrated food industry excellence. We bring together food safety, quality management, QHSE, food operations, regulatory compliance and professional learning to help organisations strengthen systems, develop people and improve performance.
                    </p>
                </div>

                <!-- 3. Clean List of Core Capabilities with Golden Circular Ticks (Matching Homepage) -->
                @php
                    $capabilities = [
                        'Food Safety & HACCP / FSMS Systems',
                        'Quality Management & Regulatory Compliance',
                        'Food Operations & Central Kitchen Management',
                        'People Capability & Leadership Development',
                        'Continuous Improvement & Audit Readiness',
                    ];
                @endphp

                <div class="flex flex-col space-y-4 sm:space-y-4.5 mb-9">
                    @foreach ($capabilities as $index => $item)
                        <div class="flex items-center gap-3.5 group cursor-default reveal-on-scroll delay-{{ ($index + 1) * 100 }}">
                            <!-- Circular Checkmark Icon (Golden Accent) -->
                            <div class="w-5 h-5 rounded-full border border-brand-gold text-brand-gold flex items-center justify-center flex-shrink-0 transition-colors duration-200 group-hover:bg-brand-gold/15">
                                <x-lucide-check class="w-3.5 h-3.5 text-brand-gold stroke-[2.8]" />
                            </div>

                            <!-- Item Title -->
                            <span class="font-body text-[13px] sm:text-[15px] lg:text-[16px] text-brand-dark font-medium transition-colors duration-200 group-hover:text-brand">
                                {{ $item }}
                            </span>
                        </div>
                    @endforeach
                </div>

                <!-- 4. Action Buttons (Matching Homepage Button Styles) -->
                <div class="reveal-on-scroll delay-500 flex flex-wrap items-center gap-4">
                    <x-button variant="outlined" href="{{ route('contact') }}">
                        <x-slot:icon>
                            <x-lucide-arrow-right class="w-4 h-4 inline" />
                        </x-slot:icon>
                        Contact Us
                    </x-button>

                    <x-button variant="filled" href="/#services">
                        Explore Services
                    </x-button>
                </div>

            </div>

            <!-- RIGHT COLUMN: Image with Offset Golden Background Box (Identical to Homepage Style) -->
            <div class="lg:col-span-6 flex items-center justify-center reveal-on-scroll">
                <div class="relative w-full max-w-md lg:max-w-none pr-3 pb-3 sm:pr-6 sm:pb-6">
                    
                    <!-- Decorative Offset Background Accent Box (Golden Accent) -->
                    <div class="absolute -bottom-2.5 -right-2.5 sm:-bottom-5 sm:-right-5 w-full h-full bg-brand-gold rounded-none z-0"></div>

                    <!-- Clean Operations Foreground Image -->
                    <div class="relative z-10 overflow-hidden shadow-xl bg-gray-100">
                        <img
                            src="{{ asset('assets/about/who-we-are.jpg') }}"
                            alt="FOOD GURU CHAKRA™ - Professional Food Safety & Quality Management"
                            class="w-full h-[260px] sm:h-[380px] lg:h-[500px] object-cover object-center filter brightness-[0.98] contrast-[1.03]"
                        />
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>

<!-- =====================================================================
     WHAT DRIVES US (OUR MISSION, OUR VISION, OUR VALUES)
     Clean Minimalist Layout with Direct Column Dividers (No Card Layout)
====================================================================== -->
<section class="py-16 sm:py-24 bg-white border-t border-brand-border/40 relative overflow-hidden">
    
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Section Title: What drives us? (Uniform Font & Brand Green Color) -->
        <div class="text-center mb-12 sm:mb-16 reveal-on-scroll">
            <h2 class="font-heading font-normal text-2xl sm:text-3xl lg:text-[40px] text-brand-dark tracking-tight leading-tight">
                What drives us?
            </h2>
        </div>

        <!-- 3 Columns directly on background with vertical divider lines between them -->
        <div class="grid grid-cols-1 md:grid-cols-3 divide-y md:divide-y-0 md:divide-x divide-neutral-200">
            
            <!-- COLUMN 1: OUR MISSION (Mountain with Summit Flag) -->
            <div class="px-6 sm:px-8 lg:px-10 py-8 sm:py-10 text-center flex flex-col items-center justify-start reveal-on-scroll delay-100">
                
                <!-- Exact Illustrated Mountain with Flag on Summit -->
                <svg class="w-20 h-20 sm:w-24 sm:h-24 mx-auto mb-5" viewBox="0 0 100 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <!-- Mountain Peaks -->
                    <path d="M12 70 L40 28 L58 56 L68 40 L88 70 Z" stroke="#1A1A1A" stroke-width="2.5" stroke-linejoin="round" stroke-linecap="round" fill="none"/>
                    <!-- Baseline -->
                    <line x1="8" y1="70" x2="92" y2="70" stroke="#1A1A1A" stroke-width="2.5" stroke-linecap="round" />
                    <!-- Mountain Ridge Inner Lines -->
                    <path d="M40 28 L46 70" stroke="#1A1A1A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M68 40 L72 70" stroke="#1A1A1A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <!-- Flagpole on Summit -->
                    <line x1="40" y1="28" x2="40" y2="10" stroke="#1A1A1A" stroke-width="2.5" stroke-linecap="round" />
                    <!-- Flag (Brand Gold Accent) -->
                    <path d="M40 10 L56 16 L40 22 Z" fill="#B4823C" stroke="#B4823C" stroke-width="1.5" stroke-linejoin="round" />
                </svg>

                <!-- Title -->
                <h3 class="font-body font-bold text-sm sm:text-[15px] tracking-wider text-brand-gold uppercase mb-1">
                    OUR MISSION
                </h3>

                <!-- Subtle Horizontal Divider with Centered Icon -->
                <div class="flex items-center justify-center gap-2 w-full my-3">
                    <span class="h-[1px] w-10 bg-neutral-300"></span>
                    <x-lucide-flag class="w-3.5 h-3.5 text-brand-gold stroke-[2]" />
                    <span class="h-[1px] w-10 bg-neutral-300"></span>
                </div>

                <!-- Description -->
                <p class="font-body text-xs sm:text-[13.5px] text-neutral-600 leading-relaxed max-w-xs mx-auto">
                    Provide practical food safety and quality management support, strengthen compliance and operational improvement, deliver industry-focused professional training, and develop frontline capability.
                </p>

            </div>

            <!-- COLUMN 2: OUR VISION (Lightbulb with Radiating Rays) -->
            <div class="px-6 sm:px-8 lg:px-10 py-8 sm:py-10 text-center flex flex-col items-center justify-start reveal-on-scroll delay-200">
                
                <!-- Exact Illustrated Lightbulb with Radiating Rays -->
                <svg class="w-20 h-20 sm:w-24 sm:h-24 mx-auto mb-5" viewBox="0 0 100 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <!-- Radiating Rays around Bulb -->
                    <line x1="50" y1="6" x2="50" y2="14" stroke="#B4823C" stroke-width="2.5" stroke-linecap="round" />
                    <line x1="28" y1="16" x2="34" y2="22" stroke="#B4823C" stroke-width="2.5" stroke-linecap="round" />
                    <line x1="72" y1="16" x2="66" y2="22" stroke="#B4823C" stroke-width="2.5" stroke-linecap="round" />
                    <line x1="18" y1="36" x2="26" y2="36" stroke="#B4823C" stroke-width="2.5" stroke-linecap="round" />
                    <line x1="82" y1="36" x2="74" y2="36" stroke="#B4823C" stroke-width="2.5" stroke-linecap="round" />
                    <!-- Lightbulb Dome Outline -->
                    <path d="M36 48 C32 44 30 38 30 34 C30 23 39 14 50 14 C61 14 70 23 70 34 C70 38 68 44 64 48 L64 56 L36 56 Z" stroke="#1A1A1A" stroke-width="2.5" stroke-linejoin="round" fill="none"/>
                    <!-- Screw Base Lines -->
                    <line x1="40" y1="61" x2="60" y2="61" stroke="#1A1A1A" stroke-width="2.5" stroke-linecap="round" />
                    <line x1="44" y1="66" x2="56" y2="66" stroke="#1A1A1A" stroke-width="2.5" stroke-linecap="round" />
                    <!-- Filament -->
                    <path d="M44 42 C44 38 47 34 50 34 C53 34 56 38 56 42" stroke="#1A1A1A" stroke-width="2" stroke-linecap="round"/>
                </svg>

                <!-- Title -->
                <h3 class="font-body font-bold text-sm sm:text-[15px] tracking-wider text-brand-gold uppercase mb-1">
                    OUR VISION
                </h3>

                <!-- Subtle Horizontal Divider with Centered Icon -->
                <div class="flex items-center justify-center gap-2 w-full my-3">
                    <span class="h-[1px] w-10 bg-neutral-300"></span>
                    <x-lucide-lightbulb class="w-3.5 h-3.5 text-brand-gold stroke-[2]" />
                    <span class="h-[1px] w-10 bg-neutral-300"></span>
                </div>

                <!-- Description -->
                <p class="font-body text-xs sm:text-[13.5px] text-neutral-600 leading-relaxed max-w-xs mx-auto">
                    To contribute to a safer, more knowledgeable, professionally capable and continuously improving food industry across institutions, catering and commercial enterprises.
                </p>

            </div>

            <!-- COLUMN 3: OUR VALUES (Faceted Diamond with Sparkles) -->
            <div class="px-6 sm:px-8 lg:px-10 py-8 sm:py-10 text-center flex flex-col items-center justify-start reveal-on-scroll delay-300">
                
                <!-- Exact Illustrated Cut Diamond with Sparkles -->
                <svg class="w-20 h-20 sm:w-24 sm:h-24 mx-auto mb-5" viewBox="0 0 100 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <!-- Sparkle Rays around Top -->
                    <line x1="50" y1="6" x2="50" y2="12" stroke="#B4823C" stroke-width="2.5" stroke-linecap="round" />
                    <line x1="32" y1="12" x2="36" y2="17" stroke="#B4823C" stroke-width="2.5" stroke-linecap="round" />
                    <line x1="68" y1="12" x2="64" y2="17" stroke="#B4823C" stroke-width="2.5" stroke-linecap="round" />
                    <!-- Diamond Crown & Table -->
                    <polygon points="32,22 68,22 84,36 16,36" stroke="#1A1A1A" stroke-width="2.5" stroke-linejoin="round" fill="#FAF9F5"/>
                    <!-- Top Accent Facet Fill -->
                    <polygon points="38,22 62,22 50,36" fill="#B4823C" fill-opacity="0.35" stroke="#1A1A1A" stroke-width="2" stroke-linejoin="round"/>
                    <!-- Crown Facet Lines -->
                    <line x1="32" y1="22" x2="38" y2="36" stroke="#1A1A1A" stroke-width="2" />
                    <line x1="68" y1="22" x2="62" y2="36" stroke="#1A1A1A" stroke-width="2" />
                    <!-- Lower Pavilion V-Shape -->
                    <polygon points="16,36 84,36 50,72" stroke="#1A1A1A" stroke-width="2.5" stroke-linejoin="round" fill="none"/>
                    <line x1="38" y1="36" x2="50" y2="72" stroke="#1A1A1A" stroke-width="2" />
                    <line x1="62" y1="36" x2="50" y2="72" stroke="#1A1A1A" stroke-width="2" />
                </svg>

                <!-- Title -->
                <h3 class="font-body font-bold text-sm sm:text-[15px] tracking-wider text-brand-gold uppercase mb-1">
                    OUR VALUES
                </h3>

                <!-- Subtle Horizontal Divider with Centered Icon -->
                <div class="flex items-center justify-center gap-2 w-full my-3">
                    <span class="h-[1px] w-10 bg-neutral-300"></span>
                    <x-lucide-gem class="w-3.5 h-3.5 text-brand-gold stroke-[2]" />
                    <span class="h-[1px] w-10 bg-neutral-300"></span>
                </div>

                <!-- Description -->
                <p class="font-body text-xs sm:text-[13.5px] text-neutral-600 leading-relaxed max-w-xs mx-auto">
                    Grounded in Knowledge, Practice, People, and Better Food empowering sound decisions, strengthening systems, and instilling an enduring culture of operational integrity.
                </p>

            </div>

        </div>

    </div>

</section>

<!-- =====================================================================
     MEET OUR FOUNDER SECTION COMPONENT
====================================================================== -->
<x-founder-section />

<!-- =====================================================================
     PHILOSOPHY, ECOSYSTEM & COMMITMENT SECTION (Section 5.7)
====================================================================== -->
<x-philosophy-ecosystem />

<!-- =====================================================================
     TESTIMONIALS & FAQ SECTIONS (Reused from Home Page)
====================================================================== -->
<x-testimonials />
<x-faq />
@endsection
