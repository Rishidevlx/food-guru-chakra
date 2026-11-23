<section id="why-us" class="py-24 lg:py-32 bg-secondary-bg text-brand-dark relative overflow-hidden">
    
    <!-- Left Decorative Dot Matrix Pattern (Matching Uploaded Reference Design) -->
    <div class="absolute left-4 sm:left-8 lg:left-12 top-1/2 -translate-y-1/2 pointer-events-none select-none hidden sm:block opacity-65" aria-hidden="true">
        <svg width="28" height="320" viewBox="0 0 28 320" fill="none" xmlns="http://www.w3.org/2000/svg">
            <pattern id="dot-grid" x="0" y="0" width="10" height="16" patternUnits="userSpaceOnUse">
                <circle cx="4" cy="4" r="1.75" fill="var(--theme-accent-gold)" opacity="0.8" />
            </pattern>
            <rect width="28" height="320" fill="url(#dot-grid)" />
        </svg>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <!-- 1. Centered Section Header (Scroll Reveal on Viewport Entry) -->
        <div class="text-center max-w-3xl mx-auto mb-16 lg:mb-20 reveal-on-scroll">
            <h2 class="font-heading font-normal text-3xl sm:text-4xl lg:text-[44px] text-brand-dark tracking-tight mb-4 uppercase">
                Why FOOD GURU CHAKRA™?
            </h2>

            <p class="font-body text-[16px] sm:text-[18px] text-brand-muted leading-relaxed max-w-2xl mx-auto">
                Integrated industry capability, evidence-based recommendations, and people-centred development tailored for sustainable food systems.
            </p>
        </div>

        <!-- 2. Core Differentiators Grid (3 Columns, Clean Minimalist Outline Icons, No Hover Scaling) -->
        @php
            $differentiators = [
                [
                    'icon' => 'shield-check',
                    'title' => 'Integrated Industry Expertise',
                    'desc' => 'End-to-end capability connecting food safety, quality management, regulatory compliance and kitchen operations.',
                ],
                [
                    'icon' => 'utensils-crossed',
                    'title' => 'Practical & Implementation-Focused',
                    'desc' => 'Ground-level solutions built for real-world kitchens and facilities, not just theoretical audit checklists.',
                ],
                [
                    'icon' => 'clipboard-check',
                    'title' => 'Evidence-Based Recommendations',
                    'desc' => 'Data-backed, objective insights and root-cause analysis that drive measurable operational improvements.',
                ],
                [
                    'icon' => 'users',
                    'title' => 'People-Centred Development',
                    'desc' => 'Building long-term internal capability and food safety culture through engaging, practical training.',
                ],
                [
                    'icon' => 'layers',
                    'title' => 'Flexible Engagement Models',
                    'desc' => 'Tailored consultancy and advisory arrangements that adapt seamlessly to your operational scale.',
                ],
                [
                    'icon' => 'trending-up',
                    'title' => 'Continuous Improvement Mindset',
                    'desc' => 'Sustained operational excellence, proactive hazard prevention, and long-term capability growth.',
                ],
            ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-10 lg:gap-x-14 gap-y-12 lg:gap-y-16">
            @foreach ($differentiators as $index => $item)
                <div class="flex flex-col items-center text-center cursor-default reveal-on-scroll delay-{{ (($index % 3) + 1) * 100 }}">
                    
                    <!-- Clean Minimalist Outline Icon Container (No Scale Hover Animation) -->
                    <div class="w-16 h-16 sm:w-18 sm:h-18 flex items-center justify-center mb-5 text-brand">
                        @if ($item['icon'] === 'shield-check')
                            <x-lucide-shield-check class="w-11 h-11 text-brand stroke-[1.4]" />
                        @elseif ($item['icon'] === 'utensils-crossed')
                            <x-lucide-utensils-crossed class="w-11 h-11 text-brand stroke-[1.4]" />
                        @elseif ($item['icon'] === 'clipboard-check')
                            <x-lucide-clipboard-check class="w-11 h-11 text-brand stroke-[1.4]" />
                        @elseif ($item['icon'] === 'users')
                            <x-lucide-users class="w-11 h-11 text-brand stroke-[1.4]" />
                        @elseif ($item['icon'] === 'layers')
                            <x-lucide-layers class="w-11 h-11 text-brand stroke-[1.4]" />
                        @elseif ($item['icon'] === 'trending-up')
                            <x-lucide-trending-up class="w-11 h-11 text-brand stroke-[1.4]" />
                        @endif
                    </div>

                    <!-- Title (Clean and Static) -->
                    <h3 class="font-heading font-normal text-xl sm:text-[22px] text-brand-dark mb-3 tracking-tight">
                        {{ $item['title'] }}
                    </h3>

                    <!-- Short Description -->
                    <p class="font-body text-[14px] sm:text-[15px] text-brand-muted leading-relaxed max-w-xs mx-auto">
                        {{ $item['desc'] }}
                    </p>

                </div>
            @endforeach
        </div>

    </div>
</section>
