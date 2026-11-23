@extends('layouts.app')

@section('content')
<!-- =====================================================================
     PAGE BANNER (Matches Reference Style with Breadcrumb)
====================================================================== -->
<x-page-banner title="About Us" :breadcrumbs="[['label' => 'About Us']]" />

<!-- =====================================================================
     ABOUT US - HERO / WHO WE ARE SECTION
====================================================================== -->
<section class="bg-white pt-14 sm:pt-20 lg:pt-24 pb-16 sm:pb-24 relative overflow-hidden">
    
    <!-- Subtle Background Ambient Accents -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-brand-light/40 rounded-full blur-3xl pointer-events-none -mr-20 -mt-20"></div>
    <div class="absolute bottom-0 left-0 w-80 h-80 bg-brand-gold/5 rounded-full blur-3xl pointer-events-none -ml-20 -mb-20"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <!-- 2-Column Responsive Grid (Left: Content | Right: Image) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">

            <!-- LEFT COLUMN: Who We Are Content -->
            <div class="lg:col-span-7 reveal-on-scroll">
                
                <!-- Category Badge -->
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-brand-light border border-brand/15 text-brand text-xs font-semibold uppercase tracking-wider mb-4 sm:mb-5">
                    <span class="w-2 h-2 rounded-full bg-brand-gold"></span>
                    Who We Are
                </div>

                <!-- Main Heading (Brand Green) -->
                <h1 class="font-heading font-normal text-3xl sm:text-4xl lg:text-5xl text-brand-dark tracking-tight leading-[1.18] mb-5 sm:mb-6">
                    Integrated Food Industry <span class="text-brand">Excellence</span>
                </h1>

                <!-- Content Paragraph -->
                <p class="font-body text-base sm:text-lg text-black leading-relaxed font-normal mb-6 sm:mb-8">
                    <strong class="font-semibold text-brand-dark">FOOD GURU CHAKRA™</strong> is an independent professional consultancy and training initiative focused on integrated food industry excellence. We bring together food safety, quality management, QHSE, food operations, regulatory compliance and professional learning to help organisations strengthen systems, develop people and improve performance.
                </p>

                <!-- Value Focus Tags / Pills -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-4 mb-8">
                    <div class="flex items-center gap-3 p-3 rounded-xl bg-[#FAF9F5] border border-[#E5E2D9]">
                        <div class="w-8 h-8 rounded-lg bg-brand/10 text-brand flex items-center justify-center flex-shrink-0">
                            <x-lucide-shield-check class="w-4 h-4" />
                        </div>
                        <span class="font-body text-xs sm:text-sm font-medium text-black">Food Safety & HACCP/FSMS</span>
                    </div>

                    <div class="flex items-center gap-3 p-3 rounded-xl bg-[#FAF9F5] border border-[#E5E2D9]">
                        <div class="w-8 h-8 rounded-lg bg-brand/10 text-brand flex items-center justify-center flex-shrink-0">
                            <x-lucide-award class="w-4 h-4" />
                        </div>
                        <span class="font-body text-xs sm:text-sm font-medium text-black">Quality & Regulatory Compliance</span>
                    </div>

                    <div class="flex items-center gap-3 p-3 rounded-xl bg-[#FAF9F5] border border-[#E5E2D9]">
                        <div class="w-8 h-8 rounded-lg bg-brand/10 text-brand flex items-center justify-center flex-shrink-0">
                            <x-lucide-utensils class="w-4 h-4" />
                        </div>
                        <span class="font-body text-xs sm:text-sm font-medium text-black">Food Operations & Central Kitchens</span>
                    </div>

                    <div class="flex items-center gap-3 p-3 rounded-xl bg-[#FAF9F5] border border-[#E5E2D9]">
                        <div class="w-8 h-8 rounded-lg bg-brand/10 text-brand flex items-center justify-center flex-shrink-0">
                            <x-lucide-graduation-cap class="w-4 h-4" />
                        </div>
                        <span class="font-body text-xs sm:text-sm font-medium text-black">Capability & Leadership Training</span>
                    </div>
                </div>

                <!-- Call to Action Buttons using Official 3D Flip Component -->
                <div class="flex flex-wrap items-center gap-4">
                    <x-button variant="filled" href="/contact" class="!px-7 sm:!px-8 !py-3">
                        <x-slot:icon>
                            <x-lucide-arrow-right class="w-4 h-4 inline" />
                        </x-slot:icon>
                        Connect With Us
                    </x-button>

                    <x-button variant="outline" href="/#services" class="!px-6 sm:!px-7 !py-3">
                        Explore Services
                    </x-button>
                </div>

            </div>

            <!-- RIGHT COLUMN: Professional Photography Image -->
            <div class="lg:col-span-5 reveal-on-scroll delay-100">
                <div class="relative mx-auto max-w-md lg:max-w-none">
                    
                    <!-- Decorative Backdrop Frame -->
                    <div class="absolute -inset-2 sm:-inset-3 bg-gradient-to-tr from-brand/20 via-brand-gold/15 to-transparent rounded-3xl blur-md -z-10"></div>

                    <!-- Image Container -->
                    <div class="relative rounded-2xl sm:rounded-3xl overflow-hidden border border-brand-border/70 shadow-2xl bg-white group">
                        <img
                            src="{{ asset('assets/about/who-we-are.jpg') }}"
                            alt="FOOD GURU CHAKRA™ - Professional Food Safety & Quality Management"
                            class="w-full h-auto aspect-[4/3] object-cover transition-transform duration-500 group-hover:scale-105"
                            loading="eager"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/40 via-transparent to-transparent opacity-60"></div>
                        
                        <!-- Floating Highlight Badge -->
                        <div class="absolute bottom-4 left-4 right-4 sm:bottom-6 sm:left-6 sm:right-6 bg-white/95 backdrop-blur-md border border-brand-border/80 rounded-xl p-3.5 sm:p-4 shadow-lg flex items-center gap-3.5">
                            <div class="w-10 h-10 rounded-lg bg-brand text-brand-gold flex items-center justify-center flex-shrink-0 shadow-xs">
                                <x-lucide-sparkles class="w-5 h-5" />
                            </div>
                            <div class="min-w-0">
                                <p class="font-heading text-xs sm:text-sm font-semibold text-brand-dark truncate">
                                    Integrated Food Excellence
                                </p>
                                <p class="font-body text-[11px] text-neutral-600 truncate">
                                    Knowledge • Practice • People • Better Food
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>

</section>
@endsection
