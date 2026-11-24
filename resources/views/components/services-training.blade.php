<!-- =====================================================================
     PROFESSIONAL TRAINING SECTION (Section 6.2 & 6.5)
     Left: Content & Checklist Layout (matching Industries We Serve / Who We Are)
     Right: Training Photograph with Golden Offset Box
====================================================================== -->
<section id="training" class="py-16 sm:py-24 bg-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <!-- 2-Column Responsive Layout: Left (Content & Checklist) & Right (Image with Offset Golden Box) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 sm:gap-12 lg:gap-16 items-center">

            <!-- LEFT COLUMN: Content (Title, Subtext, Checklist with Ticks, Action Buttons) -->
            <div class="lg:col-span-6 flex flex-col justify-center">
                
                <!-- 1. Section Title (Matching exact typography) -->
                <div class="reveal-on-scroll">
                    <h2 class="font-heading font-normal text-2xl sm:text-3xl lg:text-[40px] text-brand-dark tracking-tight mb-3 sm:mb-5 leading-tight">
                        Professional Training
                    </h2>

                    <!-- 2. Subtext / Description -->
                    <p class="font-body text-[13px] sm:text-[15px] lg:text-[16px] text-brand-muted leading-relaxed mb-6 sm:mb-8 max-w-xl">
                        Developing Knowledge. Building Skills. Empowering People. Practical, capability-focused programmes designed to elevate standards, strengthen operational awareness, and foster professional competence across the food industry.
                    </p>
                </div>

                <!-- 3. Clean List of Core Training Capabilities with Golden Circular Ticks (Matching About / Industries UI) -->
                @php
                    $trainingModules = [
                        'Food Safety & Hygiene Awareness',
                        'HACCP & FSMS System Understanding',
                        'QHSE & Workplace Safety Protocols',
                        'Food Production & Kitchen Workflow Management',
                        'Operational Excellence & Productivity Improvement',
                        'Leadership, Supervisory & Capability Development',
                    ];
                @endphp

                <div class="flex flex-col space-y-4 sm:space-y-4.5 mb-9">
                    @foreach ($trainingModules as $index => $item)
                        <div class="flex items-center gap-3.5 group cursor-default reveal-on-scroll delay-{{ ($index + 1) * 100 }}">
                            <!-- Circular Checkmark Icon (Golden Accent) -->
                            <div class="w-5 h-5 rounded-full border border-brand-gold text-brand-gold flex items-center justify-center flex-shrink-0 transition-colors duration-200 group-hover:bg-brand-gold/15">
                                <x-lucide-check class="w-3.5 h-3.5 text-brand-gold stroke-[2.8]" />
                            </div>

                            <!-- Item Title -->
                            <span class="font-body text-[13px] sm:text-[15px] lg:text-[16px] text-brand-dark font-medium transition-colors duration-200 group-hover:text-brand">
                                {{ $item }}
                            </span>
                        </div>
                    @endforeach
                </div>

                <!-- 4. Action Buttons (Matching Homepage & About Page Buttons) -->
                <div class="reveal-on-scroll delay-500 flex flex-wrap items-center gap-4">
                    <x-button variant="filled" href="{{ route('contact') }}">
                        <x-slot:icon>
                            <x-lucide-arrow-right class="w-4 h-4 inline" />
                        </x-slot:icon>
                        Enquire About Training
                    </x-button>

                    <x-button variant="outlined" href="tel:+917845567089">
                        <x-slot:icon>
                            <x-lucide-phone class="w-4 h-4 inline" />
                        </x-slot:icon>
                        Quick Call
                    </x-button>
                </div>

            </div>

            <!-- RIGHT COLUMN: Image with Offset Golden Background Box (Identical to About Page / Industries Style) -->
            <div class="lg:col-span-6 flex items-center justify-center reveal-on-scroll">
                <div class="relative w-full max-w-md lg:max-w-none pr-3 pb-3 sm:pr-6 sm:pb-6">
                    
                    <!-- Decorative Offset Background Accent Box (Golden Accent) -->
                    <div class="absolute -bottom-2.5 -right-2.5 sm:-bottom-5 sm:-right-5 w-full h-full bg-brand-gold rounded-none z-0"></div>

                    <!-- Clean Professional Training Image -->
                    <div class="relative z-10 overflow-hidden shadow-xl bg-gray-100">
                        <img
                            src="{{ asset('assets/services/training.jpg') }}"
                            alt="FOOD GURU CHAKRA™ - Professional Food Safety & Hygiene Training Workshop"
                            class="w-full h-[280px] sm:h-[380px] lg:h-[480px] object-cover object-center filter brightness-[0.98] contrast-[1.03]"
                        />
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>
