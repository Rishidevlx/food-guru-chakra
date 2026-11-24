<!-- =====================================================================
     MEET OUR FOUNDER COMPONENT
     Styled matching reference template layout with left photo & right bio
====================================================================== -->
<section id="founder" class="py-16 sm:py-20 lg:py-28 bg-secondary-bg text-brand-dark relative overflow-hidden">
    
    <!-- Corner Decorative Dot Grid (Top Right) -->
    <div class="absolute top-6 right-6 sm:top-10 sm:right-12 pointer-events-none select-none opacity-40 hidden sm:block" aria-hidden="true">
        <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
            <pattern id="founder-dots" x="0" y="0" width="16" height="16" patternUnits="userSpaceOnUse">
                <circle cx="4" cy="4" r="2" fill="var(--theme-accent-gold)" />
            </pattern>
            <rect width="100" height="100" fill="url(#founder-dots)" />
        </svg>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">

            <!-- LEFT COLUMN: Founder Portrait Image with Golden Offset Box -->
            <div class="lg:col-span-5 flex justify-center reveal-on-scroll">
                <div class="relative w-full max-w-sm lg:max-w-none pr-3 pb-3 sm:pr-5 sm:pb-5">
                    
                    <!-- Decorative Offset Golden Frame matching site visual language -->
                    <div class="absolute -bottom-2.5 -right-2.5 sm:-bottom-4 sm:-right-4 w-full h-full bg-brand-gold rounded-none z-0"></div>

                    <!-- Sharp Container with Shadow -->
                    <div class="relative z-10 overflow-hidden shadow-xl bg-gray-100">
                        <img
                            src="{{ asset('assets/about/founder.jpg') }}"
                            alt="G. Chakravarthy - Founder of FOOD GURU CHAKRA™"
                            class="w-full h-[340px] sm:h-[440px] lg:h-[480px] object-cover object-top filter brightness-[0.98] contrast-[1.02]"
                        />
                    </div>
                </div>
            </div>

            <!-- RIGHT COLUMN: Founder Content matching template layout -->
            <div class="lg:col-span-7 flex flex-col justify-center reveal-on-scroll delay-150">

                <!-- Main Section Title -->
                <h2 class="font-heading font-normal text-2xl sm:text-3xl lg:text-[40px] text-brand-dark tracking-tight mb-2 leading-tight">
                    Meet Our Founder
                </h2>

                <!-- Founder Name -->
                <h3 class="font-heading text-lg sm:text-xl font-normal text-brand-dark/80 mb-4">
                    G. Chakravarthy
                </h3>

                <!-- Biography Paragraph 1 -->
                <p class="font-body text-[13px] sm:text-[15px] lg:text-[16px] text-brand-muted leading-relaxed mb-4">
                    G. Chakravarthy brings more than 23 years of multidisciplinary professional experience across QHSE, food safety, food service operations, and learning & development. He established FOOD GURU CHAKRA™ to help organisations strengthen systems, develop people, and continuously improve operations.
                </p>

                <!-- Biography Paragraph 2 -->
                <p class="font-body text-[13px] sm:text-[15px] lg:text-[16px] text-brand-muted leading-relaxed mb-8">
                    His extensive areas of professional practice include HACCP & FSMS implementation, comprehensive food safety audits, institutional and healthcare food services, central kitchen cook-chill management, process improvement, training strategy, and frontline competency development.
                </p>

                <!-- Key Metrics / Statistics Row (Matching uploaded template 1B+ / 4M+ / 95% style) -->
                <div class="grid grid-cols-3 gap-4 sm:gap-6 pt-6 border-t border-brand-border/80">
                    <div>
                        <p class="font-heading text-2xl sm:text-3xl lg:text-4xl font-normal text-brand-dark">
                            <span data-counter="23" data-counter-suffix="+" data-counter-duration="2400">0+</span>
                        </p>
                        <p class="font-body text-xs sm:text-sm text-neutral-600 mt-1">Years Experience</p>
                    </div>
                    <div>
                        <p class="font-heading text-2xl sm:text-3xl lg:text-4xl font-normal text-brand-dark">QHSE</p>
                        <p class="font-body text-xs sm:text-sm text-neutral-600 mt-1">& Food Safety</p>
                    </div>
                    <div>
                        <p class="font-heading text-2xl sm:text-3xl lg:text-4xl font-normal text-brand-dark">FSMS</p>
                        <p class="font-body text-xs sm:text-sm text-neutral-600 mt-1">Audit Mastery</p>
                    </div>
                </div>

            </div>

        </div>
    </div>

</section>
