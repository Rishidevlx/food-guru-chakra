<section id="expertise" class="relative py-6 sm:py-8 bg-brand overflow-hidden select-none border-y border-white/10">
    
    <!-- Ambient subtle background glow -->
    <div class="absolute inset-0 bg-gradient-to-r from-black/15 via-transparent to-black/15 pointer-events-none z-10"></div>

    @php
        $expertiseItems = [
            'Food Safety',
            'HACCP & FSMS',
            'Quality & QHSE',
            'Food Operations',
            'Compliance',
            'People & Capability Development',
            'Continuous Improvement',
        ];
    @endphp

    <!-- Marquee Track Wrapper -->
    <div class="flex overflow-hidden relative z-0">
        <div class="animate-marquee flex items-center gap-10 sm:gap-14 py-2 cursor-default">
            
            <!-- Loop Set 1 -->
            @foreach ($expertiseItems as $item)
                <div class="flex items-center gap-10 sm:gap-14 flex-shrink-0">
                    <span class="font-heading font-normal text-xl sm:text-2xl md:text-[26px] tracking-wider !text-white uppercase whitespace-nowrap">
                        {{ $item }}
                    </span>
                    <!-- White Leaf Icon Separator -->
                    <x-lucide-leaf class="w-5 h-5 sm:w-6 sm:h-6 !text-white flex-shrink-0 stroke-[2]" />
                </div>
            @endforeach

            <!-- Loop Set 2 (Identical for Seamless Infinite Scroll) -->
            @foreach ($expertiseItems as $item)
                <div class="flex items-center gap-10 sm:gap-14 flex-shrink-0">
                    <span class="font-heading font-normal text-xl sm:text-2xl md:text-[26px] tracking-wider !text-white uppercase whitespace-nowrap">
                        {{ $item }}
                    </span>
                    <!-- White Leaf Icon Separator -->
                    <x-lucide-leaf class="w-5 h-5 sm:w-6 sm:h-6 !text-white flex-shrink-0 stroke-[2]" />
                </div>
            @endforeach

        </div>
    </div>
</section>
