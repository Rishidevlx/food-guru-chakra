@extends('layouts.app')

@section('content')
<!-- 1. HERO SECTION (Full hero.png Background with Transparent Navbar) -->
<section
    class="relative text-brand-dark pt-28 sm:pt-36 lg:pt-40 pb-16 lg:pb-24 min-h-[90vh] lg:min-h-[92vh] flex items-center overflow-hidden bg-cover bg-center bg-no-repeat"
    style="background-image: url('{{ asset('assets/bg/hero.png') }}');"
>
    <!-- Subtle gradient overlay to ensure text contrast while displaying full hero.png graphic -->
    <div class="absolute inset-0 bg-gradient-to-r from-white/30 via-white/10 to-transparent pointer-events-none z-0"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full relative z-10">
        
        <!-- 2-Column Responsive Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-8 items-center">

            <!-- LEFT COLUMN: Content, 3D Buttons & Core Pillars (Smooth Scroll Reveal) -->
            <div class="lg:col-span-7 flex flex-col items-start text-left reveal-on-scroll">

                <!-- 1. Main Headline (Without awkward line-break, flows naturally) -->
                <h1 class="font-heading font-normal text-2xl sm:text-3xl lg:text-[32px] xl:text-[36px] leading-[1.3] text-brand-dark tracking-tight mb-5 max-w-2xl">
                    Quality, Safety & Compliance You Can Trust
                </h1>

                <!-- 2. Concise Body Description (Poppins 17px font-medium) -->
                <p class="font-body text-[16px] sm:text-[17px] text-brand-muted leading-relaxed font-medium mb-8 max-w-xl">
                    We help food businesses, institutions and professionals strengthen food safety,
                    improve operational performance, understand compliance requirements and develop
                    practical capabilities.
                </p>

                <!-- 3. Action Buttons with 3D text flip & bottom-up color fill -->
                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-4 sm:gap-5 w-full sm:w-auto">
                    <!-- Filled Button -->
                    <x-button variant="filled" href="#services">
                        <x-slot:icon>
                            <x-lucide-arrow-up-right class="w-4 h-4 inline" />
                        </x-slot:icon>
                        Explore Our Services
                    </x-button>

                    <!-- Outlined Button -->
                    <x-button variant="outlined" href="#contact">
                        <x-slot:icon>
                            <x-lucide-arrow-right class="w-4 h-4 inline" />
                        </x-slot:icon>
                        Contact Us
                    </x-button>
                </div>

            </div>

            <!-- RIGHT COLUMN: Circular Chakra Wheel (Staggered Reveal) -->
            <div class="lg:col-span-5 flex items-center justify-center reveal-on-scroll delay-200">
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
