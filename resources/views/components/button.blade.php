@props([
    'variant' => 'filled',
    'href' => null,
    'type' => 'button',
])

@php
    $isFilled = $variant === 'filled';

    $baseClasses = "
        group relative inline-flex items-center justify-center
        px-4 sm:px-6 lg:px-7 py-2 sm:py-2.5 lg:py-3 rounded-lg font-body font-semibold text-[13px] sm:text-[14px] lg:text-[15px]
        overflow-hidden transition-all duration-300 cursor-pointer
        select-none shadow-xs hover:shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2
    ";

    $variantClasses = $isFilled
        ? 'bg-brand text-white border-2 border-brand focus:ring-brand'
        : 'bg-transparent text-brand border-2 border-brand focus:ring-brand';

    $fillBgColor = $isFilled ? 'bg-brand-hover' : 'bg-brand';
    $flippedTextColor = 'text-white';
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => "$baseClasses $variantClasses"]) }}>
        <!-- 1. Bottom-to-Top Fill Layer -->
        <span
            aria-hidden="true"
            class="absolute inset-0 w-full h-full {{ $fillBgColor }} transform translate-y-full group-hover:translate-y-0 transition-transform duration-300 ease-out z-0"
        ></span>

        <!-- 2. 3D Text & Icon Flip Container -->
        <span class="relative z-10 inline-flex flex-col overflow-hidden h-[20px] sm:h-[22px] lg:h-[24px] justify-center" style="perspective: 600px;">
            <!-- Front Face -->
            <span
                class="inline-flex items-center gap-2.5 transform transition-all duration-300 ease-out group-hover:-translate-y-full group-hover:-rotate-x-90 group-hover:opacity-0 origin-top"
                style="transform-style: preserve-3d;"
            >
                <span>{{ $slot }}</span>
                @isset($icon)
                    <span class="text-[18px] transition-transform duration-300 group-hover:translate-x-0.5">{{ $icon }}</span>
                @endisset
            </span>

            <!-- Back Face (Flipped) -->
            <span
                class="absolute inset-0 inline-flex items-center gap-2.5 {{ $flippedTextColor }} transform translate-y-full rotate-x-90 opacity-0 transition-all duration-300 ease-out group-hover:translate-y-0 group-hover:rotate-x-0 group-hover:opacity-100 origin-bottom"
                style="transform-style: preserve-3d;"
            >
                <span>{{ $slot }}</span>
                @isset($icon)
                    <span class="text-[18px] transition-transform duration-300 group-hover:translate-x-0.5">{{ $icon }}</span>
                @endisset
            </span>
        </span>
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => "$baseClasses $variantClasses"]) }}>
        <!-- 1. Bottom-to-Top Fill Layer -->
        <span
            aria-hidden="true"
            class="absolute inset-0 w-full h-full {{ $fillBgColor }} transform translate-y-full group-hover:translate-y-0 transition-transform duration-300 ease-out z-0"
        ></span>

        <!-- 2. 3D Text & Icon Flip Container -->
        <span class="relative z-10 inline-flex flex-col overflow-hidden h-[20px] sm:h-[22px] lg:h-[24px] justify-center" style="perspective: 600px;">
            <!-- Front Face -->
            <span
                class="inline-flex items-center gap-2.5 transform transition-all duration-300 ease-out group-hover:-translate-y-full group-hover:-rotate-x-90 group-hover:opacity-0 origin-top"
                style="transform-style: preserve-3d;"
            >
                <span>{{ $slot }}</span>
                @isset($icon)
                    <span class="text-[18px] transition-transform duration-300 group-hover:translate-x-0.5">{{ $icon }}</span>
                @endisset
            </span>

            <!-- Back Face (Flipped) -->
            <span
                class="absolute inset-0 inline-flex items-center gap-2.5 {{ $flippedTextColor }} transform translate-y-full rotate-x-90 opacity-0 transition-all duration-300 ease-out group-hover:translate-y-0 group-hover:rotate-x-0 group-hover:opacity-100 origin-bottom"
                style="transform-style: preserve-3d;"
            >
                <span>{{ $slot }}</span>
                @isset($icon)
                    <span class="text-[18px] transition-transform duration-300 group-hover:translate-x-0.5">{{ $icon }}</span>
                @endisset
            </span>
        </span>
    </button>
@endif
