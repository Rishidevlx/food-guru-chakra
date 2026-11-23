@php
    $cx = 250;
    $cy = 250;
    $rInner = 82;
    $rOuter = 236;
    $numSlices = 6;
    $gapDeg = 2.4;
    $sliceSpan = 360 / $numSlices;

    function getSectorPath($cx, $cy, $rInner, $rOuter, $startDeg, $endDeg) {
        $degToRad = function($deg) {
            return (($deg - 90) * M_PI) / 180.0;
        };

        $startRad = $degToRad($startDeg);
        $endRad = $degToRad($endDeg);

        $x1Outer = $cx + $rOuter * cos($startRad);
        $y1Outer = $cy + $rOuter * sin($startRad);

        $x2Outer = $cx + $rOuter * cos($endRad);
        $y2Outer = $cy + $rOuter * sin($endRad);

        $x1Inner = $cx + $rInner * cos($endRad);
        $y1Inner = $cy + $rInner * sin($endRad);

        $x2Inner = $cx + $rInner * cos($startRad);
        $y2Inner = $cy + $rInner * sin($startRad);

        $largeArc = ($endDeg - $startDeg <= 180) ? 0 : 1;

        return "M $x1Outer $y1Outer A $rOuter $rOuter 0 $largeArc 1 $x2Outer $y2Outer L $x1Inner $y1Inner A $rInner $rInner 0 $largeArc 0 $x2Inner $y2Inner Z";
    }

    $sliceImages = [
        'https://images.unsplash.com/photo-1577219491135-ce391730fb2c?auto=format&fit=crop&w=700&q=80',
        'https://images.unsplash.com/photo-1582719471384-894fbb16e074?auto=format&fit=crop&w=700&q=80',
        'https://images.unsplash.com/photo-1615865417491-9941019fbc00?auto=format&fit=crop&w=700&q=80',
        'https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=700&q=80',
        'https://images.unsplash.com/photo-1540420773420-3366772f4999?auto=format&fit=crop&w=700&q=80',
        'https://images.unsplash.com/photo-1578916171728-46686eac8d58?auto=format&fit=crop&w=700&q=80',
    ];
@endphp

<div class="relative w-full max-w-[190px] sm:max-w-[260px] md:max-w-[340px] lg:max-w-[480px] aspect-square mx-auto flex items-center justify-center p-1 sm:p-2 select-none">
    
    <!-- Decorative Outer Glow Ring using CSS variable -->
    <div class="absolute inset-4 rounded-full bg-gradient-to-tr from-brand/12 via-brand-dark/5 to-brand-gold/10 blur-xl -z-10"></div>

    <!-- SVG Circular Chakra Wheel -->
    <svg viewBox="0 0 500 500" class="w-full h-full drop-shadow-xl overflow-visible">
        <defs>
            <clipPath id="center-logo-clip">
                <circle cx="{{ $cx }}" cy="{{ $cy }}" r="75"></circle>
            </clipPath>

            @foreach ($sliceImages as $i => $imgUrl)
                @php
                    $startAngle = $i * $sliceSpan + $gapDeg / 2;
                    $endAngle = ($i + 1) * $sliceSpan - $gapDeg / 2;
                    $pathData = getSectorPath($cx, $cy, $rInner, $rOuter, $startAngle, $endAngle);
                @endphp
                <clipPath id="chakra-slice-{{ $i }}">
                    <path d="{{ $pathData }}"></path>
                </clipPath>
            @endforeach

            <!-- Center Shadow Filter -->
            <filter id="center-shadow" x="-20%" y="-20%" width="140%" height="140%">
                <feDropShadow dx="0" dy="4" stdDeviation="6" flood-opacity="0.18" flood-color="var(--theme-text-main)"></feDropShadow>
            </filter>
        </defs>

        <!-- Slices Group (Wedge images with hover effect) -->
        @foreach ($sliceImages as $i => $imgUrl)
            @php
                $startAngle = $i * $sliceSpan + $gapDeg / 2;
                $endAngle = ($i + 1) * $sliceSpan - $gapDeg / 2;
                $pathData = getSectorPath($cx, $cy, $rInner, $rOuter, $startAngle, $endAngle);
            @endphp
            <g class="cursor-pointer transition-all duration-300 hover:opacity-95">
                <image
                    href="{{ $imgUrl }}"
                    x="0"
                    y="0"
                    width="500"
                    height="500"
                    preserveAspectRatio="xMidYMid slice"
                    clip-path="url(#chakra-slice-{{ $i }})"
                    class="transition-transform duration-500 hover:scale-105 origin-center"
                />
                <path
                    d="{{ $pathData }}"
                    fill="none"
                    stroke="#FFFFFF"
                    stroke-width="2.5"
                ></path>
            </g>
        @endforeach

        <!-- Center Medallion (Circular Hub with Official Logo & CSS Variable Stroke) -->
        <g filter="url(#center-shadow)">
            <circle
                cx="{{ $cx }}"
                cy="{{ $cy }}"
                r="{{ $rInner - 2 }}"
                fill="#FFFFFF"
                stroke="var(--theme-bg-secondary)"
                stroke-width="3.5"
            ></circle>

            <circle
                cx="{{ $cx }}"
                cy="{{ $cy }}"
                r="{{ $rInner - 7 }}"
                fill="#FFFFFF"
                stroke="var(--theme-accent-gold)"
                stroke-width="1.5"
                stroke-dasharray="4 2"
            ></circle>

            <image
                href="{{ asset('assets/logo/logo.png') }}"
                x="{{ $cx - 56 }}"
                y="{{ $cy - 56 }}"
                width="112"
                height="112"
                preserveAspectRatio="xMidYMid meet"
            />
        </g>
    </svg>
</div>
