<section id="faq" class="py-20 lg:py-28 bg-secondary-bg text-brand-dark relative overflow-hidden" x-data="{ active: null }">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <!-- 1. Centered Header -->
        <div class="text-center mb-12 lg:mb-16 reveal-on-scroll">
            <h2 class="font-heading font-normal text-3xl sm:text-4xl lg:text-[44px] text-brand-dark tracking-tight mb-4">
                Frequently Asked Questions
            </h2>
            <p class="font-body text-[15px] sm:text-[17px] text-brand-muted leading-relaxed font-medium max-w-xl mx-auto">
                Everything you need to know about our food safety, QHSE consultancy, audits, and capability training programs.
            </p>
        </div>

        @php
            $faqs = [
                [
                    'q' => 'What kinds of food businesses and institutions do you work with?',
                    'a' => 'We work across six primary sectors: Institutional Catering & Central Kitchens, Hospitals & Healthcare Food Services, Colleges & Industrial Messes, Restaurants, Hotels & QSRs, Bakeries & Food Manufacturing Facilities, as well as Retail and Food Distribution networks.',
                ],
                [
                    'q' => 'How do you support businesses with FSSAI regulations and mandatory compliance?',
                    'a' => 'We assist with complete regulatory readiness, including FSSAI licensing and state/central registration guidance, Schedule-4 hygiene compliance audits, mandatory food handler medical fitness protocols, NABL-accredited water/food testing coordination, and legal compliance filings to ensure zero non-conformances.',
                ],
                [
                    'q' => 'What is your approach to HACCP and FSMS system development?',
                    'a' => 'We build practical, ground-level HACCP and ISO 22000 Food Safety Management Systems tailored specifically to your facility’s actual kitchen workflow—never generic copy-paste manuals. We identify Critical Control Points (CCPs), create real-time monitoring logs, and coach your floor supervisors.',
                ],
                [
                    'q' => 'Do you provide third-party audit readiness and certification support?',
                    'a' => 'Yes. We prepare organizations for external certification and rigorous buyer/client audits (including ISO 22000, FSSC 22000, HACCP, GMP/GHP, and NABH hospital dietary standards) through pre-audit diagnostic gap assessments, system remediation, and mock audit simulations.',
                ],
                [
                    'q' => 'How are your consultancy engagements priced and structured?',
                    'a' => 'Our engagement models are flexible and transparent. We offer project-based system implementation, fixed-scope audit readiness packages, retainership advisory arrangements for ongoing oversight, or targeted operational workflow diagnostics tailored to your organization’s scale.',
                ],
                [
                    'q' => 'Can you help improve kitchen workflows, layout zoning, and recipe yield?',
                    'a' => 'Absolutely. With over 23 years of hands-on commercial kitchen operations leadership, we optimize kitchen zoning, equipment layout, clean/dirty route segregation, inventory FIFO/FEFO controls, and standardized recipe yield management to minimize food waste and boost productivity.',
                ],
                [
                    'q' => 'What professional training programs do you offer for kitchen staff?',
                    'a' => 'We deliver practical workplace training covering Food Safety & Personal Hygiene, HACCP implementation, QHSE & Chemical Safety, Allergen Management, Cook-Chill Temperature Mapping, and Supervisory Leadership. Programs are interactive and available in English and Tamil.',
                ],
                [
                    'q' => 'Do you support central kitchens and multi-location QSR chains with standardization?',
                    'a' => 'Yes. We specialize in central kitchen batch traceability, cook-chill temperature mapping, standardized packaging protocols, and dispatch safety to ensure that food quality, taste, and safety remain consistent across all satellite locations.',
                ],
                [
                    'q' => 'What is the SHAKTHI™ initiative, and who is it designed for?',
                    'a' => 'SHAKTHI™ ("What Are We Learning Today?") is our dedicated knowledge and continuous learning initiative. It connects food science, operational experience, and human capability building through articles, training masterclasses, and actionable industry insights.',
                ],
                [
                    'q' => 'Where in India do you provide services, and how do we get started?',
                    'a' => 'We serve clients across Tamil Nadu and pan-India. You can get started immediately by clicking our Quick Call button, submitting an enquiry via our Contact page, or scheduling an initial diagnostic discussion with our founder and senior consulting team.',
                ],
            ];
        @endphp

        <!-- 2. Centered Accordion List (Matching Reference Design with Scroll Reveal) -->
        <div class="space-y-3.5 reveal-on-scroll delay-100">
            @foreach ($faqs as $index => $faq)
                <div class="rounded-xl sm:rounded-2xl bg-white border border-brand-divider/60 shadow-2xs overflow-hidden transition-all duration-200 hover:border-brand/40">
                    
                    <!-- Question Button -->
                    <button
                        type="button"
                        @click="active = (active === {{ $index }} ? null : {{ $index }})"
                        class="w-full flex items-center justify-between px-6 sm:px-8 py-5 text-left focus:outline-none cursor-pointer select-none group"
                        :aria-expanded="active === {{ $index }}"
                    >
                        <span class="font-body text-[15px] sm:text-[17px] font-semibold text-brand-dark group-hover:text-brand transition-colors pr-4">
                            {{ $faq['q'] }}
                        </span>

                        <!-- Circular Toggle Icon (Golden Accent) -->
                        <div
                            class="w-7 h-7 sm:w-8 sm:h-8 rounded-full flex items-center justify-center flex-shrink-0 transition-all duration-300"
                            :class="active === {{ $index }} ? 'rotate-45 bg-brand-gold text-white shadow-xs' : 'bg-brand-gold/15 text-brand-gold group-hover:bg-brand-gold group-hover:text-white'"
                        >
                            <x-lucide-plus class="w-4 h-4 stroke-[2.2]" />
                        </div>
                    </button>

                    <!-- Answer Dropdown -->
                    <div
                        x-show="active === {{ $index }}"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 -translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 -translate-y-2"
                        class="px-6 sm:px-8 pb-6 pt-1 text-brand-muted font-body text-[14px] sm:text-[15px] leading-relaxed font-medium border-t border-brand-divider/40"
                    >
                        {{ $faq['a'] }}
                    </div>

                </div>
            @endforeach
        </div>

    </div>
</section>
