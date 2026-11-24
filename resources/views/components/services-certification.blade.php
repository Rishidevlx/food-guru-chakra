<!-- =====================================================================
     CERTIFICATION SUPPORT SECTION (Section 6.3 & 6.5)
     3x3 Responsive Grid of Corporate Cards
====================================================================== -->
<section id="certification" class="py-12 sm:py-16 lg:py-24 bg-white relative overflow-hidden border-t border-brand-divider/40">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <!-- Section Header (Centered - Clean 2-word title) -->
        <div class="text-center max-w-3xl mx-auto mb-10 sm:mb-14 lg:mb-16 reveal-on-scroll">
            <h2 class="font-heading font-normal text-2xl sm:text-3xl lg:text-4xl text-brand-dark tracking-tight mb-2.5 sm:mb-4">
                Certification Support
            </h2>
            <p class="font-body text-[13px] sm:text-[15px] lg:text-[17px] text-brand-muted leading-relaxed">
                Prepare with Confidence. Implement with Clarity. Improve with Evidence.
            </p>
        </div>

        @php
            $certifications = [
                [
                    'icon' => 'shield-check',
                    'title' => 'ISO 22000:2018 FSMS Readiness',
                    'desc' => 'Comprehensive system gap assessment, food hazard management, and international FSMS certification readiness.',
                ],
                [
                    'icon' => 'award',
                    'title' => 'ISO 9001 Quality Management',
                    'desc' => 'Structured quality management protocols, operational process standards, and continual compliance framework.',
                ],
                [
                    'icon' => 'clipboard-check',
                    'title' => 'HACCP System Development',
                    'desc' => 'Hazard analysis, Critical Control Point (CCP) identification, critical limits validation, and monitoring procedures.',
                ],
                [
                    'icon' => 'badge-check',
                    'title' => 'FSSAI Regulatory Compliance',
                    'desc' => 'Statutory licensing advisory, Schedule 4 hygiene compliance, regulatory filings, and labeling validation.',
                ],
                [
                    'icon' => 'search',
                    'title' => 'Internal Audit Preparation',
                    'desc' => 'Rigorous pre-audit internal inspections, departmental checklists, and objective system performance evaluation.',
                ],
                [
                    'icon' => 'check-circle',
                    'title' => 'External Audit Readiness',
                    'desc' => 'Independent audit walkthrough simulations, personnel briefing, and third-party inspection facilitation.',
                ],
                [
                    'icon' => 'file-text',
                    'title' => 'SOP & Documentation Development',
                    'desc' => 'Clear standard operating procedures, hygiene log sheets, traceability registers, and quality records.',
                ],
                [
                    'icon' => 'wrench',
                    'title' => 'Corrective Action & Compliance Closure',
                    'desc' => 'Root-cause analysis, structured CAPA implementation, non-conformity rectification, and audit closure.',
                ],
                [
                    'icon' => 'refresh-cw',
                    'title' => 'Certification Maintenance & Continual Improvement',
                    'desc' => 'Periodic surveillance audit support, continual system fine-tuning, and long-term compliance sustenance.',
                ],
            ];
        @endphp

        <!-- 3x3 Card Grid matching Homepage Card styling & padding -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            @foreach ($certifications as $index => $item)
                <a
                    href="{{ route('contact') }}"
                    class="group relative bg-white border border-brand/35 hover:border-brand rounded-2xl p-6 sm:p-8 lg:p-9 transition-all duration-300 hover:shadow-xl flex flex-col justify-between cursor-pointer reveal-on-scroll delay-{{ (($index % 3) + 1) * 100 }}"
                >
                    
                    <div>
                        <!-- Circular Icon Badge (Turns golden on card hover) -->
                        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-secondary-bg border border-brand-border/60 text-brand flex items-center justify-center mb-4 sm:mb-6 shadow-xs transition-all duration-300 group-hover:scale-105 group-hover:bg-brand-gold group-hover:border-brand-gold group-hover:text-white">
                            @if ($item['icon'] === 'shield-check')
                                <x-lucide-shield-check class="w-6 h-6 sm:w-7 sm:h-7 transition-colors duration-300 group-hover:text-white" />
                            @elseif ($item['icon'] === 'award')
                                <x-lucide-award class="w-6 h-6 sm:w-7 sm:h-7 transition-colors duration-300 group-hover:text-white" />
                            @elseif ($item['icon'] === 'clipboard-check')
                                <x-lucide-clipboard-check class="w-6 h-6 sm:w-7 sm:h-7 transition-colors duration-300 group-hover:text-white" />
                            @elseif ($item['icon'] === 'badge-check')
                                <x-lucide-badge-check class="w-6 h-6 sm:w-7 sm:h-7 transition-colors duration-300 group-hover:text-white" />
                            @elseif ($item['icon'] === 'search')
                                <x-lucide-search class="w-6 h-6 sm:w-7 sm:h-7 transition-colors duration-300 group-hover:text-white" />
                            @elseif ($item['icon'] === 'check-circle')
                                <x-lucide-check-circle class="w-6 h-6 sm:w-7 sm:h-7 transition-colors duration-300 group-hover:text-white" />
                            @elseif ($item['icon'] === 'file-text')
                                <x-lucide-file-text class="w-6 h-6 sm:w-7 sm:h-7 transition-colors duration-300 group-hover:text-white" />
                            @elseif ($item['icon'] === 'wrench')
                                <x-lucide-wrench class="w-6 h-6 sm:w-7 sm:h-7 transition-colors duration-300 group-hover:text-white" />
                            @elseif ($item['icon'] === 'refresh-cw')
                                <x-lucide-refresh-cw class="w-6 h-6 sm:w-7 sm:h-7 transition-colors duration-300 group-hover:text-white" />
                            @endif
                        </div>

                        <!-- Service Title -->
                        <h3 class="font-heading font-normal text-xl sm:text-2xl text-brand-dark group-hover:text-brand-gold transition-colors duration-300 mb-2.5 sm:mb-3">
                            {{ $item['title'] }}
                        </h3>

                        <!-- One-line Description -->
                        <p class="font-body text-[13px] sm:text-[15px] text-brand-muted leading-relaxed mb-5 sm:mb-6">
                            {{ $item['desc'] }}
                        </p>
                    </div>

                    <!-- Bottom Row: Text on Left + Circular Arrow on Right with Bottom-Fill Effect -->
                    <div class="pt-6 border-t border-brand-border flex items-center justify-between">
                        <span class="font-body font-semibold text-sm sm:text-[15px] text-brand-dark group-hover:text-brand-gold transition-colors duration-300">
                            Learn More
                        </span>
                        
                        <!-- Circular Button with Bottom-to-Top Fill on Hover (Golden Accent) -->
                        <div class="w-11 h-11 rounded-full border-2 border-brand-gold text-brand-gold relative overflow-hidden flex items-center justify-center transition-all duration-300 shadow-xs flex-shrink-0">
                            <span class="absolute inset-0 bg-brand-gold transform translate-y-full group-hover:translate-y-0 transition-transform duration-300 ease-out z-0"></span>
                            <x-lucide-arrow-up-right class="w-5 h-5 relative z-10 text-brand-gold group-hover:text-white transition-all duration-300 group-hover:translate-x-0.5 group-hover:-translate-y-0.5" />
                        </div>
                    </div>

                </a>
            @endforeach
        </div>

        <!-- Centered Call to Action Button (Generous margin-top with clear breathing room) -->
        <div class="w-full flex items-center justify-center text-center mt-20 sm:mt-24 lg:mt-28 reveal-on-scroll">
            <x-button variant="filled" href="{{ route('contact') }}">
                <x-slot:icon>
                    <x-lucide-arrow-right class="w-4 h-4 inline" />
                </x-slot:icon>
                Contact Us
            </x-button>
        </div>

    </div>
</section>
