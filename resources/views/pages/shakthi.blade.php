@extends('layouts.app')

@section('content')
<!-- =====================================================================
     PAGE BANNER (Consistent with About & Services Pages)
====================================================================== -->
<x-page-banner
    title="SHAKTHI™"
    :breadcrumbs="[['label' => 'SHAKTHI™']]"
/>

<!-- =====================================================================
     HERO SECTION
     Left: Dedicated Content
     Right: Official SHAKTHI™ Hero Image (shakthi-hero.jpg)
====================================================================== -->
<section class="py-16 sm:py-20 lg:py-24 bg-white text-brand-dark relative overflow-hidden">
    
    <!-- Ambient subtle background glow -->
    <div class="absolute -top-32 -right-32 w-96 h-96 rounded-full bg-brand-light/60 blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- 2-Column Responsive Layout -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 sm:gap-14 lg:gap-16 items-center">

            <!-- LEFT COLUMN: Content & Philosophy -->
            <div class="lg:col-span-6 flex flex-col items-center text-center lg:items-start lg:text-left reveal-on-scroll">

                <!-- Main Title -->
                <h1 class="font-heading font-normal text-3xl sm:text-4xl lg:text-5xl text-brand-dark tracking-tight mb-4 sm:mb-6 leading-tight">
                    SHAKTHI™
                </h1>

                <!-- Core Description (User specified content) -->
                <p class="font-body text-[14px] sm:text-[16px] lg:text-[18px] text-brand-muted leading-relaxed font-normal mb-8 max-w-xl mx-auto lg:mx-0">
                    SHAKTHI™ is a distinct knowledge and learning initiative connected to FOOD GURU CHAKRA™, not simply a paid service category or synonym for commercial training.
                </p>

                <!-- Action Buttons -->
                <div class="flex flex-wrap items-center justify-center lg:justify-start gap-4">
                    <x-button variant="filled" href="{{ route('contact') }}">
                        <x-slot:icon>
                            <x-lucide-arrow-right class="w-4 h-4 inline" />
                        </x-slot:icon>
                        Connect With Us
                    </x-button>

                    <x-button variant="outlined" href="tel:+917845567089">
                        <x-slot:icon>
                            <x-lucide-phone class="w-4 h-4 inline" />
                        </x-slot:icon>
                        Quick Call
                    </x-button>
                </div>

            </div>

            <!-- RIGHT COLUMN: Official SHAKTHI™ Hero Image -->
            <div class="lg:col-span-6 flex items-center justify-center reveal-on-scroll delay-150">
                <div class="relative w-full max-w-md lg:max-w-none mx-auto overflow-hidden rounded-2xl shadow-lg border border-brand-border/40">
                    <img
                        src="{{ asset('assets/brand/shakthi-hero.jpg') }}"
                        alt="SHAKTHI™ — Learning Initiative"
                        class="w-full h-[260px] sm:h-[340px] lg:h-[400px] object-cover object-center filter brightness-[0.99] select-none"
                    />
                </div>
            </div>

        </div>

    </div>
</section>

<!-- =====================================================================
     NEW SECTION: WHAT ARE WE LEARNING TODAY?
     Left: SHAKTHI™ Logo (assets/brand/shakthi-logo.png)
     Right: Guidelines / Learning Objectives List
====================================================================== -->
<section id="learning" class="py-16 sm:py-20 lg:py-24 bg-brand-light/35 border-t border-brand-border/40 text-brand-dark relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 sm:gap-14 lg:gap-16 items-center">

            <!-- LEFT COLUMN: Official SHAKTHI™ Logo -->
            <div class="lg:col-span-5 flex items-center justify-center reveal-on-scroll">
                <div class="relative w-full max-w-sm sm:max-w-md mx-auto flex items-center justify-center p-6 sm:p-8 bg-white rounded-2xl border border-brand-border/60 shadow-sm">
                    <img
                        src="{{ asset('assets/brand/shakthi-logo.png') }}"
                        alt="SHAKTHI™ — The World's Most Meaningful Food Companion"
                        class="w-full max-w-[260px] sm:max-w-[320px] h-auto object-contain select-none"
                    />
                </div>
            </div>

            <!-- RIGHT COLUMN: Heading & Objectives List -->
            <div class="lg:col-span-7 flex flex-col items-center text-center lg:items-start lg:text-left reveal-on-scroll delay-150">
                
                <h2 class="font-heading font-normal text-2xl sm:text-3xl lg:text-4xl text-brand-dark tracking-tight mb-6 sm:mb-8 leading-tight">
                    What Are We Learning Today?
                </h2>

                @php
                    $learningPoints = [
                        'Provide a clearly labelled gateway to SHAKTHI™ while keeping its identity distinct.',
                        'At launch, present it as an open learning experience.',
                        'Do not promise membership, LMS, certificates, forums or advanced features unless built, tested and approved.',
                        'Review submissions before public publication; capture source, context and permissions.',
                    ];
                @endphp

                <ul class="space-y-4 w-full max-w-2xl text-left">
                    @foreach ($learningPoints as $point)
                        <li class="flex items-start gap-3.5">
                            <div class="w-5 h-5 rounded-full border border-brand-gold text-brand-gold flex items-center justify-center shrink-0 mt-0.5 bg-white">
                                <x-lucide-check class="w-3.5 h-3.5 text-brand-gold stroke-[2.8]" />
                            </div>
                            <span class="font-body text-[14px] sm:text-[15px] lg:text-[16px] text-brand-dark leading-relaxed font-normal">
                                {{ $point }}
                            </span>
                        </li>
                    @endforeach
                </ul>

            </div>

        </div>

    </div>
</section>

<!-- =====================================================================
     TESTIMONIALS & FAQ SECTIONS (Reused for site consistency)
====================================================================== -->
<x-testimonials />
<x-faq />
@endsection
