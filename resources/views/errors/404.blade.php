@extends('layouts.app')

@section('content')
<div class="relative min-h-[85vh] flex items-center justify-center overflow-hidden bg-white px-4 sm:px-6 lg:px-8 pt-24 pb-16">
    <!-- =====================================================================
         DECORATIVE ORGANIC FLUID SHAPES (Brand Theme Color Palette)
         Matching reference: top-right blob, bottom-right fluid wave, soft dots
    ====================================================================== -->

    <!-- Top-Left Soft Mint Blob -->
    <div class="absolute -top-20 -left-20 w-72 h-72 sm:w-96 sm:h-96 rounded-full bg-secondary-bg/60 blur-2xl pointer-events-none -z-0"></div>

    <!-- Top-Right Organic Fluid Wave Shape (Deep Pine/Emerald Soft Accent) -->
    <div class="absolute -top-12 -right-12 w-64 h-64 sm:w-80 sm:h-80 md:w-96 md:h-96 pointer-events-none -z-0 opacity-80">
        <svg viewBox="0 0 400 400" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-full text-brand/10">
            <path d="M350 50C250 -30 150 20 100 120C50 220 80 320 180 370C280 420 380 350 395 230C410 110 450 130 350 50Z" fill="currentColor"/>
        </svg>
    </div>

    <!-- Top-Right Floating Golden Warm Circle -->
    <div class="absolute top-28 right-12 sm:right-28 w-14 h-14 sm:w-16 sm:h-16 rounded-full bg-brand-gold/20 pointer-events-none -z-0"></div>

    <!-- Middle-Left Soft Floating Dot -->
    <div class="absolute top-1/2 left-8 sm:left-24 w-8 h-8 sm:w-10 sm:h-10 rounded-full bg-brand-gold/25 pointer-events-none -z-0"></div>

    <!-- Center-Right Floating Soft Mint Dot -->
    <div class="absolute top-1/3 right-1/4 w-16 h-16 sm:w-20 sm:h-20 rounded-full bg-secondary-bg pointer-events-none -z-0"></div>

    <!-- Bottom-Right Large Organic Wave (Soft Secondary Green Tint) -->
    <div class="absolute -bottom-24 -right-16 w-80 h-80 sm:w-[500px] sm:h-[500px] pointer-events-none -z-0 opacity-90">
        <svg viewBox="0 0 500 500" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-full text-secondary-bg">
            <path d="M480 350C420 220 320 230 240 280C160 330 80 360 40 440C0 520 80 560 200 550C320 540 540 480 480 350Z" fill="currentColor"/>
        </svg>
    </div>

    <!-- Bottom-Right Floating Soft Teal Dot -->
    <div class="absolute bottom-28 right-1/3 w-8 h-8 sm:w-9 sm:h-9 rounded-full bg-brand/15 pointer-events-none -z-0"></div>

    <!-- =====================================================================
         MAIN 404 CONTENT (Simple, Clean, Brand Styled)
    ====================================================================== -->
    <div class="relative z-10 max-w-xl mx-auto text-center">
        
        <!-- Large 404 Numerals -->
        <h1 class="font-heading font-medium text-8xl sm:text-[140px] md:text-[170px] leading-none tracking-tight text-brand select-none drop-shadow-sm">
            404
        </h1>

        <!-- Page Not Found Title -->
        <h2 class="font-heading font-bold text-2xl sm:text-3xl md:text-4xl text-brand-dark mt-4 sm:mt-6 mb-3 tracking-tight">
            Page not found
        </h2>

        <!-- Subtitle Description -->
        <p class="font-body text-sm sm:text-base text-brand-muted max-w-md mx-auto leading-relaxed">
            Oops! The page you are looking for does not exist. It might have been moved or deleted.
        </p>

        <!-- 3D Retro/Solid Perspective "BACK TO HOME" Button -->
        <div class="mt-8 sm:mt-10">
            <a
                href="/"
                class="inline-block px-8 sm:px-10 py-3.5 bg-white text-brand-dark font-body font-bold text-xs sm:text-sm tracking-widest uppercase border-2 border-brand-dark shadow-[4px_4px_0px_#09332E] hover:shadow-none hover:translate-x-1 hover:translate-y-1 hover:bg-brand hover:text-white transition-all duration-200"
            >
                BACK TO HOME
            </a>
        </div>

    </div>
</div>
@endsection
