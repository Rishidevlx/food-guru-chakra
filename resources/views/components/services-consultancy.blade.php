<!-- =====================================================================
     FOOD SAFETY CONSULTANCY SECTION (Section 6.1 & 6.5)
     3-Image Composite on Left + Structured Corporate Content on Right
====================================================================== -->
<section id="consultancy" class="py-16 sm:py-24 bg-secondary-bg/60 border-t border-brand-divider/40 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">

            <!-- =========================================================
                 LEFT COLUMN: 3-Image Composite Grid (Matching Reference)
            ========================================================== -->
            <div class="lg:col-span-6 reveal-on-scroll">
                
                <!-- TOP IMAGE: Wide Corporate Audit & Consultancy Session -->
                <div class="relative overflow-hidden rounded-2xl shadow-md border border-neutral-200/80 group">
                    <img
                        src="{{ asset('assets/services/consultancy-1.jpg') }}"
                        alt="Food Safety Audit & Management Consultation"
                        class="w-full h-64 sm:h-72 lg:h-80 object-cover object-center group-hover:scale-[1.02] transition-transform duration-500"
                    />
                </div>

                <!-- BOTTOM 2 SPLIT IMAGES: Inspection & Kitchen Operations -->
                <div class="grid grid-cols-2 gap-4 sm:gap-6 mt-4 sm:mt-6">
                    
                    <!-- Bottom Left: Food Safety Quality Inspection -->
                    <div class="relative overflow-hidden rounded-2xl shadow-md border border-neutral-200/80 group">
                        <img
                            src="{{ asset('assets/services/consultancy-2.jpg') }}"
                            alt="HACCP & Food Safety Testing Inspection"
                            class="w-full h-44 sm:h-52 lg:h-56 object-cover object-center group-hover:scale-[1.02] transition-transform duration-500"
                        />
                    </div>

                    <!-- Bottom Right: Commercial Kitchen Workflow Operations -->
                    <div class="relative overflow-hidden rounded-2xl shadow-md border border-neutral-200/80 group">
                        <img
                            src="{{ asset('assets/services/consultancy-3.jpg') }}"
                            alt="Central Kitchen Operations & Culinary Excellence"
                            class="w-full h-44 sm:h-52 lg:h-56 object-cover object-center group-hover:scale-[1.02] transition-transform duration-500"
                        />
                    </div>

                </div>

            </div>

            <!-- =========================================================
                 RIGHT COLUMN: Content & Minimalist Feature Grid
            ========================================================== -->
            <div class="lg:col-span-6 reveal-on-scroll delay-100">

                <!-- Main Heading -->
                <h2 class="font-heading font-normal text-2xl sm:text-3xl lg:text-[40px] text-brand-dark tracking-tight leading-tight mb-4">
                    Food Safety Consultancy
                </h2>

                <!-- Narrative Overview -->
                <p class="font-body text-xs sm:text-sm lg:text-[15px] text-brand-muted leading-relaxed mb-8">
                    FOOD GURU CHAKRA™ provides practical, industry-proven consultancy solutions to help organizations strengthen food hygiene, streamline kitchen workflows, eliminate compliance vulnerabilities, and build an enduring culture of operational integrity.
                </p>

                <!-- Clean Capability Items -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-5 mb-8">
                    
                    <!-- 1. Food Safety & Hygiene -->
                    <div class="flex items-center gap-3.5 p-3.5 bg-white border border-brand-border/60 rounded-xl transition-all duration-300 hover:border-brand-gold/60 hover:shadow-sm">
                        <div class="w-10 h-10 rounded-lg bg-secondary-bg/60 flex items-center justify-center shrink-0 border border-brand-border/60 shadow-2xs">
                            <x-lucide-shield-check class="w-5 h-5 text-brand-gold stroke-[2]" />
                        </div>
                        <h3 class="font-body font-semibold text-sm sm:text-[15px] text-brand-dark">
                            Food Safety &amp; Hygiene
                        </h3>
                    </div>

                    <!-- 2. HACCP & FSMS Systems -->
                    <div class="flex items-center gap-3.5 p-3.5 bg-white border border-brand-border/60 rounded-xl transition-all duration-300 hover:border-brand-gold/60 hover:shadow-sm">
                        <div class="w-10 h-10 rounded-lg bg-secondary-bg/60 flex items-center justify-center shrink-0 border border-brand-border/60 shadow-2xs">
                            <x-lucide-clipboard-check class="w-5 h-5 text-brand-gold stroke-[2]" />
                        </div>
                        <h3 class="font-body font-semibold text-sm sm:text-[15px] text-brand-dark">
                            HACCP &amp; FSMS Systems
                        </h3>
                    </div>

                    <!-- 3. QHSE & Quality Systems -->
                    <div class="flex items-center gap-3.5 p-3.5 bg-white border border-brand-border/60 rounded-xl transition-all duration-300 hover:border-brand-gold/60 hover:shadow-sm">
                        <div class="w-10 h-10 rounded-lg bg-secondary-bg/60 flex items-center justify-center shrink-0 border border-brand-border/60 shadow-2xs">
                            <x-lucide-award class="w-5 h-5 text-brand-gold stroke-[2]" />
                        </div>
                        <h3 class="font-body font-semibold text-sm sm:text-[15px] text-brand-dark">
                            QHSE &amp; Quality Systems
                        </h3>
                    </div>

                    <!-- 4. Food Operations & Yield -->
                    <div class="flex items-center gap-3.5 p-3.5 bg-white border border-brand-border/60 rounded-xl transition-all duration-300 hover:border-brand-gold/60 hover:shadow-sm">
                        <div class="w-10 h-10 rounded-lg bg-secondary-bg/60 flex items-center justify-center shrink-0 border border-brand-border/60 shadow-2xs">
                            <x-lucide-utensils class="w-5 h-5 text-brand-gold stroke-[2]" />
                        </div>
                        <h3 class="font-body font-semibold text-sm sm:text-[15px] text-brand-dark">
                            Food Operations &amp; Yield
                        </h3>
                    </div>

                </div>

                <!-- Call to Action Buttons -->
                <div class="flex flex-wrap items-center gap-4">
                    <x-button variant="filled" href="{{ route('contact') }}" class="!px-6 !py-3">
                        <x-slot:icon>
                            <x-lucide-calendar class="w-4 h-4 inline" />
                        </x-slot:icon>
                        Request a Consultation
                    </x-button>

                    <x-button variant="outlined" href="tel:+917845567089" class="!px-6 !py-3">
                        <x-slot:icon>
                            <x-lucide-phone class="w-4 h-4 inline" />
                        </x-slot:icon>
                        Quick Enquiry
                    </x-button>
                </div>

            </div>

        </div>

    </div>
</section>
