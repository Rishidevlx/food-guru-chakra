<section id="industries" class="py-14 sm:py-20 lg:py-28 bg-white text-brand-dark relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <!-- 2-Column Responsive Layout: Left (Image with Offset Backdrop Box) & Right (Title, Subtext, List with Ticks & Button) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 sm:gap-12 lg:gap-16 items-center">

            <!-- LEFT COLUMN: Image with Offset Brand Color Backdrop (Scroll Reveal on Entering Viewport) -->
            <div class="lg:col-span-6 flex items-center justify-center reveal-on-scroll">
                <div class="relative w-full max-w-md lg:max-w-none pr-3 pb-3 sm:pr-6 sm:pb-6">
                    
                    <!-- Decorative Offset Background Accent Box (Golden Accent) -->
                    <div class="absolute -bottom-2.5 -right-2.5 sm:-bottom-5 sm:-right-5 w-full h-full bg-brand-gold rounded-none z-0"></div>

                    <!-- Clean Operations Foreground Image -->
                    <div class="relative z-10 overflow-hidden shadow-xl bg-gray-100">
                        <img
                            src="https://images.unsplash.com/photo-1556910103-1c02745aae4d?auto=format&fit=crop&w=1000&q=85"
                            alt="Commercial kitchen and food safety operations team"
                            class="w-full h-[260px] sm:h-[380px] lg:h-[500px] object-cover object-center filter brightness-[0.98] contrast-[1.03]"
                        />
                    </div>

                </div>
            </div>

            <!-- RIGHT COLUMN: Content (Title, Description, Clean Checklist with Ticks, Outlined Button) -->
            <div class="lg:col-span-6 flex flex-col justify-center">
                
                <!-- 1. Section Title (Scroll Reveal) -->
                <div class="reveal-on-scroll">
                    <h2 class="font-heading font-normal text-2xl sm:text-3xl lg:text-[40px] text-brand-dark tracking-tight mb-3 sm:mb-5 leading-tight">
                        Industries We Serve
                    </h2>

                    <!-- 2. Subtext / Description -->
                    <p class="font-body text-[13px] sm:text-[15px] lg:text-[17px] text-brand-muted leading-relaxed mb-5 sm:mb-7 max-w-xl">
                        Practical, compliance-focused solutions tailored to the distinct operational needs of food businesses, institutions and commercial kitchens.
                    </p>
                </div>

                <!-- 3. Clean List of 6 Industries with Staggered Scroll Reveal -->
                @php
                    $industries = [
                        'Institutional Catering and Central Kitchens',
                        'Hospitals and Healthcare Food Services',
                        'Colleges and Industrial Food Services',
                        'Restaurants, Hotels and QSR',
                        'Bakeries and Food Manufacturing',
                        'Retail and Food Distribution',
                    ];
                @endphp

                <div class="flex flex-col space-y-4 sm:space-y-4.5 mb-9">
                    @foreach ($industries as $index => $title)
                        <div class="flex items-center gap-3.5 group cursor-default reveal-on-scroll delay-{{ ($index + 1) * 100 }}">
                            <!-- Circular Checkmark Icon (Golden Accent) -->
                            <div class="w-5 h-5 rounded-full border border-brand-gold text-brand-gold flex items-center justify-center flex-shrink-0 transition-colors duration-200 group-hover:bg-brand-gold/15">
                                <x-lucide-check class="w-3.5 h-3.5 text-brand-gold stroke-[2.8]" />
                            </div>

                            <!-- Industry Name -->
                            <span class="font-body text-[13px] sm:text-[15px] lg:text-[16px] text-brand-dark font-medium transition-colors duration-200 group-hover:text-brand">
                                {{ $title }}
                            </span>
                        </div>
                    @endforeach
                </div>

                <!-- 4. Outlined Action Button with Staggered Delay -->
                <div class="reveal-on-scroll delay-500">
                    <x-button variant="outlined" href="#contact">
                        <x-slot:icon>
                            <x-lucide-arrow-right class="w-4 h-4 inline" />
                        </x-slot:icon>
                        Contact Us
                    </x-button>
                </div>

            </div>

        </div>

    </div>
</section>