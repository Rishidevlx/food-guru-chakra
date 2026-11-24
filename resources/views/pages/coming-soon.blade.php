@extends('layouts.app')

@section('content')
<!-- Page Banner -->
<x-page-banner
    :title="$title ?? 'Coming Soon'"
    :breadcrumbs="[['label' => $title ?? 'Coming Soon']]"
/>

<!-- Coming Soon Display Section -->
<section class="py-16 sm:py-24 lg:py-28 bg-white relative overflow-hidden text-center flex items-center justify-center min-h-[50vh]">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 flex flex-col items-center justify-center">
        
        <!-- Speeding Clock Coming Soon Graphic (User Reference) -->
        <div class="w-full max-w-[280px] sm:max-w-[340px] md:max-w-[380px] mx-auto mb-6 sm:mb-8">
            <img
                src="{{ asset('assets/coming-soon.png') }}"
                alt="Coming Soon"
                class="w-full h-auto object-contain select-none"
            />
        </div>

        <!-- Supportive Reassurance Subtitle -->
        <p class="font-body text-xs sm:text-sm lg:text-base text-brand-muted max-w-md mx-auto mb-8 leading-relaxed">
            We are curating high-value knowledge, modules, and resources for this section. Stay tuned!
        </p>

        <!-- Back to Home Action Button -->
        <x-button variant="filled" href="{{ route('home') }}">
            <x-slot:icon>
                <x-lucide-arrow-left class="w-4 h-4 inline" />
            </x-slot:icon>
            Back to Home
        </x-button>

    </div>
</section>
@endsection
