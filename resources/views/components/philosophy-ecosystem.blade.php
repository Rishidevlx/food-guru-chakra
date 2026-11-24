<!-- =====================================================================
     OUR PHILOSOPHY & COMMITMENT SECTION (Section 5.7)
     Sticky Static Left Column + React Bits-Style Scrollable Stacking Cards
====================================================================== -->
<section class="py-16 sm:py-24 bg-white border-t border-brand-border/40 relative">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-start">

            <!-- =============================================================
                 LEFT COLUMN: Static / Pinned while cards stack
            ============================================================== -->
            <div class="lg:col-span-5 lg:sticky lg:top-28 self-start reveal-on-scroll">
                
                <h2 class="font-heading font-normal text-2xl sm:text-3xl lg:text-[40px] text-brand-dark tracking-tight leading-tight mb-6">
                    Our Philosophy & Commitment
                </h2>

                <p class="font-body text-base sm:text-lg text-neutral-700 leading-relaxed mb-4">
                    Knowledge should improve decisions, strengthen systems, empower people and create meaningful results.
                </p>

                <p class="font-body text-xs sm:text-sm font-semibold uppercase tracking-wider text-brand-gold mb-6">
                    — Professional Philosophy
                </p>

                <!-- Helpful Scroll Cue in Left Column -->
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 bg-secondary-bg/80 border border-brand-border/60 text-xs font-medium text-neutral-600">
                    <x-lucide-arrow-down class="w-3.5 h-3.5 text-brand-gold animate-bounce" />
                    <span>Scroll to reveal cards</span>
                </div>

            </div>

            <!-- =============================================================
                 RIGHT COLUMN: Pure Stacking Cards (ScrollStack Mechanism)
                 All cards have IDENTICAL fixed height & width (w-full h-[280px] sm:h-[250px])
            ============================================================== -->
            <div class="lg:col-span-7 relative">

                <!-- CARD 01: FOOD GURU CHAKRA™ -->
                <div class="group sticky top-24 lg:top-28 z-10 w-full h-[280px] sm:h-[260px] lg:h-[250px] flex items-center bg-white border border-neutral-200/90 rounded-2xl p-6 sm:p-8 lg:p-10 shadow-md hover:shadow-xl transition-all duration-300">
                    <div class="flex items-start gap-5 sm:gap-8 w-full">
                        <span class="stack-card-num font-heading font-bold text-4xl sm:text-5xl lg:text-6xl tracking-wider shrink-0 w-14 sm:w-20 select-none">
                            01
                        </span>
                        <div class="flex-1">
                            <h3 class="font-heading font-normal text-xl sm:text-2xl lg:text-[26px] text-brand-dark mb-2.5 group-hover:text-brand transition-colors duration-300">
                                FOOD GURU CHAKRA™
                            </h3>
                            <p class="font-body text-xs sm:text-sm lg:text-[14.5px] text-neutral-600 leading-relaxed">
                                Applies food knowledge through practical consultancy and training. We bring together food safety, quality management, QHSE, food operations, and regulatory compliance to help organisations strengthen systems, develop people, and improve performance.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Spacer between Card 01 and Card 02 (Runway for Card 02 to scroll up) -->
                <div class="h-[45vh] lg:h-[55vh]" aria-hidden="true"></div>

                <!-- CARD 02: SHAKTHI™ Initiative (Identical Height & Width, completely hides Card 01) -->
                <div class="group sticky top-24 lg:top-28 z-20 w-full h-[280px] sm:h-[260px] lg:h-[250px] flex items-center bg-white border border-neutral-200/90 rounded-2xl p-6 sm:p-8 lg:p-10 shadow-lg hover:shadow-2xl transition-all duration-300">
                    <div class="flex items-start gap-5 sm:gap-8 w-full">
                        <span class="stack-card-num font-heading font-bold text-4xl sm:text-5xl lg:text-6xl tracking-wider shrink-0 w-14 sm:w-20 select-none">
                            02
                        </span>
                        <div class="flex-1">
                            <h3 class="font-heading font-normal text-xl sm:text-2xl lg:text-[26px] text-brand-dark mb-2.5 group-hover:text-brand transition-colors duration-300">
                                SHAKTHI™ Initiative
                            </h3>
                            <p class="font-body text-xs sm:text-sm lg:text-[14.5px] text-neutral-600 leading-relaxed">
                                A distinct knowledge and learning initiative that connects, preserves, validates, and develops food knowledge and human capability across the food ecosystem. The two initiatives are connected, but not interchangeable.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Spacer between Card 02 and Card 03 (Runway for Card 03 to scroll up) -->
                <div class="h-[45vh] lg:h-[55vh]" aria-hidden="true"></div>

                <!-- CARD 03: Our Enduring Commitment (Identical Height & Width, completely hides Card 02) -->
                <div class="group sticky top-24 lg:top-28 z-30 w-full h-[280px] sm:h-[260px] lg:h-[250px] flex items-center bg-white border border-neutral-200/90 rounded-2xl p-6 sm:p-8 lg:p-10 shadow-xl hover:shadow-2xl transition-all duration-300">
                    <div class="flex items-start gap-5 sm:gap-8 w-full">
                        <span class="stack-card-num font-heading font-bold text-4xl sm:text-5xl lg:text-6xl tracking-wider shrink-0 w-14 sm:w-20 select-none">
                            03
                        </span>
                        <div class="flex-1">
                            <h3 class="font-heading font-normal text-xl sm:text-2xl lg:text-[26px] text-brand-dark mb-2.5 group-hover:text-brand transition-colors duration-300">
                                Our Enduring Commitment
                            </h3>
                            <p class="font-body text-xs sm:text-sm lg:text-[14.5px] text-neutral-600 leading-relaxed">
                                We are committed to helping the food industry—including business owners, healthcare institutions, colleges, restaurants, food manufacturing units, and professionals—build safer systems, stronger operations, capable people, and an enduring culture of continuous improvement.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Hold Spacer: Guarantees Card 03 remains 100% docked on top before both sections scroll away -->
                <div class="h-[60vh] lg:h-[80vh]" aria-hidden="true"></div>

            </div>

        </div>

        <!-- Center Bottom Scroll Cue (Single line at the bottom of the section) -->
        <div class="w-full flex items-center justify-center gap-2 pt-8 text-center" aria-hidden="true">
            <span class="w-8 h-[1px] bg-neutral-300"></span>
            <x-lucide-arrow-down class="w-3.5 h-3.5 text-brand-gold animate-bounce" />
            <span class="font-body text-xs font-medium text-neutral-500 uppercase tracking-widest">
                Scroll to explore more
            </span>
            <span class="w-8 h-[1px] bg-neutral-300"></span>
        </div>

    </div>

</section>
