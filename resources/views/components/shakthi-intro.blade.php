<section id="shakthi" class="py-20 lg:py-28 bg-secondary-bg text-brand-dark relative overflow-hidden">
    
    <!-- Ambient subtle background accent -->
    <div class="absolute -top-32 -right-32 w-96 h-96 rounded-full bg-brand-light/60 blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- 2-Column Responsive Layout: Left (Content & CTA) & Right (Clean SHAKTHI Logo) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">

            <!-- LEFT COLUMN: Content & CTA -->
            <div class="lg:col-span-7 flex flex-col items-start text-left reveal-on-scroll">

                <!-- Headline -->
                <h2 class="font-heading font-normal text-3xl sm:text-4xl lg:text-[44px] text-brand-dark tracking-tight mb-3 leading-tight">
                    SHAKTHI™
                </h2>
                
                <!-- Tagline -->
                <h3 class="font-heading font-normal text-xl sm:text-2xl lg:text-[26px] text-brand tracking-tight mb-6">
                    What Are We Learning Today?
                </h3>

                <!-- Body Description -->
                <p class="font-body text-[16px] sm:text-[18px] text-brand-muted leading-relaxed font-medium mb-8 max-w-xl">
                    A distinct knowledge and learning initiative connecting food knowledge, practical experience, human capability and continuous development.
                </p>

                <!-- CTA Button -->
                <div class="flex items-center gap-4">
                    <x-button variant="filled" href="#shakthi">
                        <x-slot:icon>
                            <x-lucide-arrow-up-right class="w-4 h-4 inline" />
                        </x-slot:icon>
                        Explore SHAKTHI™
                    </x-button>
                </div>

            </div>

            <!-- RIGHT COLUMN: Clean SHAKTHI Logo (No Card Box, No Shadow, No Hover Scale) -->
            <div class="lg:col-span-5 flex items-center justify-center reveal-on-scroll delay-200">
                <div class="relative w-full max-w-md mx-auto flex items-center justify-center p-4">
                    <img
                        src="{{ asset('assets/brand/shakthi-logo.png') }}"
                        alt="SHAKTHI™ — What Are We Learning Today?"
                        class="w-full max-w-[320px] sm:max-w-[380px] h-auto object-contain filter drop-shadow-sm select-none"
                    />
                </div>
            </div>

        </div>

    </div>
</section>
