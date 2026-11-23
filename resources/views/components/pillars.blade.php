<section id="capabilities" class="relative py-6 sm:py-8 bg-brand overflow-hidden select-none border-y border-white/10">
    
    <!-- Ambient subtle background glow -->
    <div class="absolute inset-0 bg-gradient-to-r from-black/15 via-transparent to-black/15 pointer-events-none z-10"></div>

    @php
        $pillars = [
            [
                'name' => 'Food Safety & Hygiene',
                'icon' => 'shield',
            ],
            [
                'name' => 'Food Manufacturing',
                'icon' => 'factory',
            ],
            [
                'name' => 'HACCP & FSMS',
                'icon' => 'award',
            ],
            [
                'name' => 'Distribution',
                'icon' => 'truck',
            ],
            [
                'name' => 'Catering & Food Services',
                'icon' => 'utensils',
            ],
            [
                'name' => 'Capability Development',
                'icon' => 'users',
            ],
        ];
    @endphp

    <!-- Marquee Track Wrapper (Without leaf icon in pillars) -->
    <div class="flex overflow-hidden relative z-0">
        <div class="animate-marquee flex items-center gap-12 sm:gap-16 py-2 cursor-default">
            
            <!-- Loop Set 1 -->
            @foreach ($pillars as $item)
                <div class="flex items-center gap-4 sm:gap-5 flex-shrink-0">
                    <!-- White Pillar Icon -->
                    @if ($item['icon'] === 'shield')
                        <x-lucide-shield class="w-6 h-6 sm:w-7 sm:h-7 !text-white flex-shrink-0 stroke-[2]" />
                    @elseif ($item['icon'] === 'factory')
                        <x-lucide-factory class="w-6 h-6 sm:w-7 sm:h-7 !text-white flex-shrink-0 stroke-[2]" />
                    @elseif ($item['icon'] === 'award')
                        <x-lucide-award class="w-6 h-6 sm:w-7 sm:h-7 !text-white flex-shrink-0 stroke-[2]" />
                    @elseif ($item['icon'] === 'truck')
                        <x-lucide-truck class="w-6 h-6 sm:w-7 sm:h-7 !text-white flex-shrink-0 stroke-[2]" />
                    @elseif ($item['icon'] === 'utensils')
                        <x-lucide-utensils class="w-6 h-6 sm:w-7 sm:h-7 !text-white flex-shrink-0 stroke-[2]" />
                    @elseif ($item['icon'] === 'users')
                        <x-lucide-users class="w-6 h-6 sm:w-7 sm:h-7 !text-white flex-shrink-0 stroke-[2]" />
                    @endif

                    <!-- White Title -->
                    <span class="font-heading font-normal text-xl sm:text-2xl md:text-[26px] tracking-wider !text-white uppercase whitespace-nowrap">
                        {{ $item['name'] }}
                    </span>
                </div>
            @endforeach

            <!-- Loop Set 2 (Identical for Seamless Infinite Scroll) -->
            @foreach ($pillars as $item)
                <div class="flex items-center gap-4 sm:gap-5 flex-shrink-0">
                    <!-- White Pillar Icon -->
                    @if ($item['icon'] === 'shield')
                        <x-lucide-shield class="w-6 h-6 sm:w-7 sm:h-7 !text-white flex-shrink-0 stroke-[2]" />
                    @elseif ($item['icon'] === 'factory')
                        <x-lucide-factory class="w-6 h-6 sm:w-7 sm:h-7 !text-white flex-shrink-0 stroke-[2]" />
                    @elseif ($item['icon'] === 'award')
                        <x-lucide-award class="w-6 h-6 sm:w-7 sm:h-7 !text-white flex-shrink-0 stroke-[2]" />
                    @elseif ($item['icon'] === 'truck')
                        <x-lucide-truck class="w-6 h-6 sm:w-7 sm:h-7 !text-white flex-shrink-0 stroke-[2]" />
                    @elseif ($item['icon'] === 'utensils')
                        <x-lucide-utensils class="w-6 h-6 sm:w-7 sm:h-7 !text-white flex-shrink-0 stroke-[2]" />
                    @elseif ($item['icon'] === 'users')
                        <x-lucide-users class="w-6 h-6 sm:w-7 sm:h-7 !text-white flex-shrink-0 stroke-[2]" />
                    @endif

                    <!-- White Title -->
                    <span class="font-heading font-normal text-xl sm:text-2xl md:text-[26px] tracking-wider !text-white uppercase whitespace-nowrap">
                        {{ $item['name'] }}
                    </span>
                </div>
            @endforeach

        </div>
    </div>
</section>
