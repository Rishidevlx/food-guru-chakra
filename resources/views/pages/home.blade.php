@extends('layouts.app')

@section('content')
<!-- 1. HERO SECTION (Full hero.png Background with Transparent Navbar) -->
<section
    class="relative text-brand-dark pt-24 sm:pt-28 lg:pt-36 pb-8 sm:pb-14 lg:pb-20 min-h-[75vh] lg:min-h-[90vh] flex items-center overflow-hidden bg-cover bg-center bg-no-repeat"
    style="background-image: url('{{ asset('assets/bg/hero.png') }}');"
>
    <!-- Subtle gradient overlay to ensure text contrast while displaying full hero.png graphic -->
    <div class="absolute inset-0 bg-gradient-to-r from-white/30 via-white/10 to-transparent pointer-events-none z-0"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full relative z-10">
        
        <!-- 2-Column Responsive Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 sm:gap-8 lg:gap-8 items-center">

            <!-- LEFT COLUMN: Content, 3D Buttons & Core Pillars (Smooth Scroll Reveal) -->
            <div class="lg:col-span-7 flex flex-col items-start text-left reveal-on-scroll">

                <!-- 1. Main Headline (Compact on Mobile with Minimal Navbar Gap) -->
                <h1 class="font-heading font-normal text-[21px] sm:text-[26px] lg:text-[32px] xl:text-[36px] leading-[1.25] text-brand-dark tracking-tight mb-3 sm:mb-4 max-w-2xl">
                    Quality, Safety & Compliance You Can Trust
                </h1>

                <!-- 2. Concise Body Description (Compact on Mobile) -->
                <p class="font-body text-[13px] sm:text-[15px] lg:text-[16px] text-brand-muted leading-relaxed font-normal mb-4 sm:mb-6 max-w-xl">
                    We help food businesses, institutions and professionals strengthen food safety,
                    improve operational performance, understand compliance requirements and develop
                    practical capabilities.
                </p>

                <!-- 3. Action Buttons (Inline side-by-side with compact sizing) -->
                <div class="flex flex-row items-center gap-2.5 sm:gap-4 w-auto flex-wrap">
                    <!-- Filled Button -->
                    <x-button variant="filled" href="#services">
                        <x-slot:icon>
                            <x-lucide-arrow-up-right class="w-3.5 h-3.5 sm:w-4 sm:h-4 inline" />
                        </x-slot:icon>
                        Explore Our Services
                    </x-button>

                    <!-- Outlined Button -->
                    <x-button variant="outlined" href="{{ route('contact') }}">
                        <x-slot:icon>
                            <x-lucide-arrow-right class="w-3.5 h-3.5 sm:w-4 sm:h-4 inline" />
                        </x-slot:icon>
                        Contact Us
                    </x-button>
                </div>

            </div>

            <!-- RIGHT COLUMN: Circular Chakra Wheel (Proportionate on Mobile) -->
            <div class="lg:col-span-5 flex items-center justify-center reveal-on-scroll delay-200 mt-2 sm:mt-4 lg:mt-0">
                <x-wheel />
            </div>

        </div>

    </div>
</section>

<!-- 1.1 FULL-WIDTH 100% AUTO-SCROLLABLE CORE OPERATIONAL CAPABILITIES (MARQUEE) -->
<x-pillars />

<!-- 2. WHAT WE DO (Three Service Pillars) -->
<x-what-we-do />

<!-- 3. INDUSTRIES WE SERVE (Left Image + Right Checklist) -->
<x-industries />

<!-- 4. AREAS OF EXPERTISE (Infinite Velocity Text Scroll / Marquee) -->
<x-areas-of-expertise />

<!-- 5. WHY FOOD GURU CHAKRA™? (Secondary BG #EEF6EF + 3-Column Minimalist Differentiators) -->
<x-why-us />

<!-- 6. SHAKTHI™ INTRODUCTION (What Are We Learning Today?) -->
<x-shakthi-intro />

<!-- 7. WORDS OF PRAISE / TESTIMONIALS (Dual-Row Infinite Marquee) -->
<x-testimonials />

<!-- 8. FREQUENTLY ASKED QUESTIONS (10-Item Centered Accordion) -->
<x-faq />
@endsection
