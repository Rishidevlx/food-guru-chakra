<section id="services" class="pt-10 sm:pt-14 lg:pt-16 pb-20 lg:pb-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- 1. Section Header (Scroll Reveal) -->
        <div class="text-center max-w-3xl mx-auto mb-10 sm:mb-14 lg:mb-16 reveal-on-scroll">
            <h2 class="font-heading font-normal text-2xl sm:text-3xl lg:text-4xl text-brand-dark tracking-tight mb-2.5 sm:mb-4">
                What We Do
            </h2>
            
            <p class="font-body text-[13px] sm:text-[15px] lg:text-[17px] text-brand-muted leading-relaxed">
                Integrated capability across food safety, quality management, regulatory compliance, operational performance and people capability.
            </p>
        </div>

        <!-- 2. Three Clean Service Pillar Cards (No scale animation on hover, only border & arrow fill) -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- CARD 1: Consultancy -->
            <a
                href="{{ route('contact') }}"
                class="reveal-on-scroll delay-100 group relative bg-white border border-brand/35 hover:border-brand rounded-2xl p-6 sm:p-8 lg:p-9 transition-all duration-300 hover:shadow-xl flex flex-col justify-between cursor-pointer"
            >
                <div>
                    <!-- Icon Badge -->
                    <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl bg-brand-light text-brand flex items-center justify-center mb-4 sm:mb-6 shadow-xs">
                        <x-lucide-clipboard-check class="w-6 h-6 sm:w-7 sm:h-7" />
                    </div>

                    <!-- Title -->
                    <h3 class="font-heading font-normal text-xl sm:text-2xl text-brand-dark group-hover:text-brand transition-colors duration-300 mb-2.5 sm:mb-3">
                        Consultancy
                    </h3>

                    <!-- Description -->
                    <p class="font-body text-[13px] sm:text-[15px] text-brand-muted leading-relaxed mb-5 sm:mb-6">
                        Strengthening food safety, QHSE and food operations through practical, implementation-focused support.
                    </p>
                </div>

                <!-- Bottom Row: Text on Left + Circular Arrow on Right with Bottom-Fill Effect -->
                <div class="pt-6 border-t border-brand-border flex items-center justify-between">
                    <span class="font-body font-semibold text-sm sm:text-[15px] text-brand-dark group-hover:text-brand transition-colors duration-300">
                        Explore Consultancy
                    </span>

                    <!-- Circular Button with Bottom-to-Top Fill on Hover (Golden Accent) -->
                    <div class="w-11 h-11 rounded-full border-2 border-brand-gold text-brand-gold relative overflow-hidden flex items-center justify-center transition-all duration-300 shadow-xs flex-shrink-0">
                        <span class="absolute inset-0 bg-brand-gold transform translate-y-full group-hover:translate-y-0 transition-transform duration-300 ease-out z-0"></span>
                        <x-lucide-arrow-up-right class="w-5 h-5 relative z-10 text-brand-gold group-hover:text-white transition-all duration-300 group-hover:translate-x-0.5 group-hover:-translate-y-0.5" />
                    </div>
                </div>
            </a>

            <!-- CARD 2: Training -->
            <a
                href="{{ route('contact') }}"
                class="reveal-on-scroll delay-200 group relative bg-white border border-brand/35 hover:border-brand rounded-2xl p-6 sm:p-8 lg:p-9 transition-all duration-300 hover:shadow-xl flex flex-col justify-between cursor-pointer"
            >
                <div>
                    <!-- Icon Badge -->
                    <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl bg-brand-light text-brand flex items-center justify-center mb-4 sm:mb-6 shadow-xs">
                        <x-lucide-graduation-cap class="w-6 h-6 sm:w-7 sm:h-7" />
                    </div>

                    <!-- Title -->
                    <h3 class="font-heading font-normal text-xl sm:text-2xl text-brand-dark group-hover:text-brand transition-colors duration-300 mb-2.5 sm:mb-3">
                        Training
                    </h3>

                    <!-- Description -->
                    <p class="font-body text-[13px] sm:text-[15px] text-brand-muted leading-relaxed mb-5 sm:mb-6">
                        Developing knowledge, practical skills, leadership and workplace capability across all food sectors.
                    </p>
                </div>

                <!-- Bottom Row: Text on Left + Circular Arrow on Right with Bottom-Fill Effect -->
                <div class="pt-6 border-t border-brand-border flex items-center justify-between">
                    <span class="font-body font-semibold text-sm sm:text-[15px] text-brand-dark group-hover:text-brand transition-colors duration-300">
                        Explore Training
                    </span>

                    <!-- Circular Button with Bottom-to-Top Fill on Hover (Golden Accent) -->
                    <div class="w-11 h-11 rounded-full border-2 border-brand-gold text-brand-gold relative overflow-hidden flex items-center justify-center transition-all duration-300 shadow-xs flex-shrink-0">
                        <span class="absolute inset-0 bg-brand-gold transform translate-y-full group-hover:translate-y-0 transition-transform duration-300 ease-out z-0"></span>
                        <x-lucide-arrow-up-right class="w-5 h-5 relative z-10 text-brand-gold group-hover:text-white transition-all duration-300 group-hover:translate-x-0.5 group-hover:-translate-y-0.5" />
                    </div>
                </div>
            </a>

            <!-- CARD 3: Certification Support -->
            <a
                href="{{ route('contact') }}"
                class="reveal-on-scroll delay-300 group relative bg-white border border-brand/35 hover:border-brand rounded-2xl p-6 sm:p-8 lg:p-9 transition-all duration-300 hover:shadow-xl flex flex-col justify-between cursor-pointer"
            >
                <div>
                    <!-- Icon Badge -->
                    <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl bg-brand-light text-brand flex items-center justify-center mb-4 sm:mb-6 shadow-xs">
                        <x-lucide-award class="w-6 h-6 sm:w-7 sm:h-7" />
                    </div>

                    <!-- Title -->
                    <h3 class="font-heading font-normal text-xl sm:text-2xl text-brand-dark group-hover:text-brand transition-colors duration-300 mb-2.5 sm:mb-3">
                        Certification Support
                    </h3>

                    <!-- Description -->
                    <p class="font-body text-[13px] sm:text-[15px] text-brand-muted leading-relaxed mb-5 sm:mb-6">
                        Helping organisations understand requirements, prepare systems and improve audit readiness.
                    </p>
                </div>

                <!-- Bottom Row: Text on Left + Circular Arrow on Right with Bottom-Fill Effect -->
                <div class="pt-6 border-t border-brand-border flex items-center justify-between">
                    <span class="font-body font-semibold text-sm sm:text-[15px] text-brand-dark group-hover:text-brand transition-colors duration-300">
                        Explore Certification Support
                    </span>

                    <!-- Circular Button with Bottom-to-Top Fill on Hover (Golden Accent) -->
                    <div class="w-11 h-11 rounded-full border-2 border-brand-gold text-brand-gold relative overflow-hidden flex items-center justify-center transition-all duration-300 shadow-xs flex-shrink-0">
                        <span class="absolute inset-0 bg-brand-gold transform translate-y-full group-hover:translate-y-0 transition-transform duration-300 ease-out z-0"></span>
                        <x-lucide-arrow-up-right class="w-5 h-5 relative z-10 text-brand-gold group-hover:text-white transition-all duration-300 group-hover:translate-x-0.5 group-hover:-translate-y-0.5" />
                    </div>
                </div>
            </a>

        </div>

    </div>
</section>
