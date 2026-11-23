<section id="shakthi" class="py-14 sm:py-20 lg:py-28 bg-secondary-bg text-brand-dark relative overflow-hidden">
    
    <!-- Ambient subtle background accent -->
    <div class="absolute -top-32 -right-32 w-96 h-96 rounded-full bg-brand-light/60 blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- 2-Column Responsive Layout: Left (Content & CTA) & Right (Clean SHAKTHI Logo) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 sm:gap-12 lg:gap-16 items-center">

            <!-- LEFT COLUMN: Content & CTA (Centered on Mobile, Left-aligned on Desktop) -->
            <div class="lg:col-span-7 flex flex-col items-center text-center lg:items-start lg:text-left reveal-on-scroll">

                <!-- Headline (Compact on Mobile) -->
                <h2 class="font-heading font-normal text-2xl sm:text-3xl lg:text-[40px] text-brand-dark tracking-tight mb-2 sm:mb-3 leading-tight">
                    SHAKTHI™
                </h2>
                
                <!-- Tagline (Compact on Mobile) -->
                <h3 class="font-heading font-normal text-lg sm:text-xl lg:text-[24px] text-brand tracking-tight mb-3 sm:mb-5">
                    What Are We Learning Today?
                </h3>

                <!-- Body Description (Compact on Mobile) -->
                <p class="font-body text-[13px] sm:text-[15px] lg:text-[17px] text-brand-muted leading-relaxed font-normal mb-5 sm:mb-7 max-w-xl mx-auto lg:mx-0">
                    A distinct knowledge and learning initiative connecting food knowledge, practical experience, human capability and continuous development.
                </p>

                <!-- CTA Button (Centered on Mobile) -->
                <div class="flex items-center justify-center lg:justify-start gap-4">
                    <x-button variant="filled" href="#shakthi">
                        <x-slot:icon>
                            <x-lucide-arrow-up-right class="w-3.5 h-3.5 sm:w-4 sm:h-4 inline" />
                        </x-slot:icon>
                        Explore SHAKTHI™
                    </x-button>
                </div>

            </div>

            <!-- RIGHT COLUMN: Clean SHAKTHI Logo (No Card Box, No Shadow, No Hover Scale) -->
            <div class="lg:col-span-5 flex items-center justify-center reveal-on-scroll delay-200">
                <div class="relative w-full max-w-md mx-auto flex items-center justify-center p-2 sm:p-4">
                    <img
                        src="{{ asset('assets/brand/shakthi-logo.png') }}"
                        alt="SHAKTHI™ — What Are We Learning Today?"
                        class="w-full max-w-[220px] sm:max-w-[320px] lg:max-w-[380px] h-auto object-contain filter drop-shadow-sm select-none"
                    />
                </div>
            </div>

        </div>

    </div>
</section>
