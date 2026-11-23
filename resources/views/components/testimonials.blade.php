<section id="testimonials" class="py-20 lg:py-24 bg-white text-brand-dark relative overflow-hidden">
    
    <!-- Ambient subtle background glow -->
    <div class="absolute -top-40 -left-40 w-96 h-96 rounded-full bg-brand-light/50 blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-40 -right-40 w-96 h-96 rounded-full bg-brand-light/40 blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 mb-10 lg:mb-12">
        
        <!-- Section Header (Clean & Compact) -->
        <div class="text-center max-w-2xl mx-auto reveal-on-scroll">

            <!-- Main Heading (Reduced size per user request) -->
            <h2 class="font-heading font-normal text-2xl sm:text-3xl lg:text-[34px] text-brand-dark tracking-tight mb-3 leading-tight">
                Words of Praise from Industry Leaders
            </h2>

            <!-- Subtitle (Compact) -->
            <p class="font-body text-[14px] sm:text-[15px] text-brand-muted leading-relaxed font-medium max-w-lg mx-auto">
                Real operational impact and compliance confidence shared by our partner institutions, hospitals, and food enterprises.
            </p>
        </div>

    </div>

    @php
        $row1 = [
            [
                'quote' => 'Food Guru Chakra completely transformed our dietary kitchen protocols. Their evidence-based HACCP systems and patient meal traceability gave our clinical auditors zero non-conformances.',
                'name' => 'Dr. Arvind Subramanian',
                'role' => 'Director of Medical Operations',
                'org' => 'Apollo Health Group',
                'avatar' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=150&q=80',
            ],
            [
                'quote' => 'Managing 15,000+ meals daily across multiple campuses required deep operational insight. Their workflow redesign cut food prep bottlenecks by 30% while enforcing strict hygiene standards.',
                'name' => 'Kavitha Rajagopal',
                'role' => 'Head of Hospitality & Catering',
                'org' => 'SRM University Campuses',
                'avatar' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=150&q=80',
            ],
            [
                'quote' => 'Practical and kitchen-tested. They do not just dump theoretical manuals on you; their hands-on coaching instilled genuine food safety culture in our frontline culinary teams.',
                'name' => 'Chef Rajesh Varma',
                'role' => 'Executive Chef',
                'org' => 'The Heritage Grand Resorts',
                'avatar' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=150&q=80',
            ],
            [
                'quote' => 'Their GMP/GHP audit readiness and allergen management frameworks allowed us to breeze through our ISO 22000 surveillance audit with exemplary marks.',
                'name' => 'Sundar Raman',
                'role' => 'VP of Quality Assurance',
                'org' => 'Annapoorna Food Products',
                'avatar' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=150&q=80',
            ],
        ];

        $row2 = [
            [
                'quote' => 'Scaling from 3 to 18 outlets was daunting for our quality control. Food Guru Chakra developed standardized kitchen SOPs and recipe yield protocols that keep our safety identical everywhere.',
                'name' => 'Meera Krishnan',
                'role' => 'General Manager',
                'org' => 'GreenBites QSR Chain',
                'avatar' => 'https://images.unsplash.com/photo-1580489944761-15a19d654956?auto=format&fit=crop&w=150&q=80',
            ],
            [
                'quote' => 'The temperature mapping and batch dispatch safety procedures they engineered eliminated cold-chain deviations completely. Truly invaluable partners for institutional catering.',
                'name' => 'Vikramaditya Rao',
                'role' => 'Head of Central Operations',
                'org' => 'Apex Institutional Catering',
                'avatar' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&w=150&q=80',
            ],
            [
                'quote' => 'Their shelf-life verification and packaging guidance helped us expand retail distribution across 4 states without compromising natural freshness or compliance.',
                'name' => 'Pooja Hegde',
                'role' => 'Operations Lead',
                'org' => 'Sunrise Artisan Bakeries',
                'avatar' => 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=150&q=80',
            ],
            [
                'quote' => 'Food safety in healthcare is non-negotiable. Their patient meal tagging and sample retention systems gave our management complete peace of mind during NABH inspections.',
                'name' => 'Anand Natarajan',
                'role' => 'Director of Healthcare Services',
                'org' => 'LifeLine Multi-Specialty Hospital',
                'avatar' => 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&w=150&q=80',
            ],
        ];
    @endphp

    <!-- Dual-Row Opposite Marquee Wrapper with White Smoky Edge Gradients (Scroll Reveal) -->
    <div class="relative w-full overflow-hidden select-none reveal-on-scroll delay-100">
        
        <!-- Left White Smoky Gradient Overlay -->
        <div class="absolute left-0 top-0 bottom-0 w-20 sm:w-36 lg:w-48 bg-gradient-to-r from-white via-white/80 to-transparent pointer-events-none z-20"></div>

        <!-- Right White Smoky Gradient Overlay -->
        <div class="absolute right-0 top-0 bottom-0 w-20 sm:w-36 lg:w-48 bg-gradient-to-l from-white via-white/80 to-transparent pointer-events-none z-20"></div>

        <div class="flex flex-col gap-6 sm:gap-7 overflow-hidden">
            
            <!-- ROW 1: Scrolls Left (animate-marquee) -->
            <div class="flex overflow-hidden relative z-0">
                <div class="animate-marquee flex items-center gap-6 py-2 cursor-default">
                    
                    <!-- Loop Set 1 -->
                    @foreach ($row1 as $card)
                        <div class="w-[310px] sm:w-[360px] lg:w-[390px] flex-shrink-0 rounded-2xl sm:rounded-3xl p-6 sm:p-7 bg-white border border-brand-divider shadow-xs hover:border-brand/40 hover:shadow-md transition-all duration-300 flex flex-col justify-between">
                            <div>
                                <!-- Quote Icon -->
                                <div class="w-10 h-10 rounded-xl bg-brand-light flex items-center justify-center text-brand mb-4">
                                    <x-lucide-quote class="w-5 h-5 text-brand fill-brand/20" />
                                </div>

                                <!-- Quote Text -->
                                <p class="font-body text-[13px] sm:text-[14px] font-medium text-brand-dark/90 leading-relaxed mb-6">
                                    {{ $card['quote'] }}
                                </p>
                            </div>

                            <!-- Client Info Footer -->
                            <div class="flex items-center gap-3 pt-4 border-t border-brand-divider/70">
                                <img
                                    src="{{ $card['avatar'] }}"
                                    alt="{{ $card['name'] }}"
                                    class="w-10 h-10 rounded-full object-cover border border-brand-divider flex-shrink-0"
                                />
                                <div class="flex flex-col">
                                    <span class="font-heading font-normal text-[15px] sm:text-[16px] text-brand-dark leading-snug">
                                        {{ $card['name'] }}
                                    </span>
                                    <span class="font-body text-xs text-brand-muted font-medium">
                                        {{ $card['role'] }} · {{ $card['org'] }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <!-- Loop Set 2 (Identical for Seamless Loop) -->
                    @foreach ($row1 as $card)
                        <div class="w-[310px] sm:w-[360px] lg:w-[390px] flex-shrink-0 rounded-2xl sm:rounded-3xl p-6 sm:p-7 bg-white border border-brand-divider shadow-xs hover:border-brand/40 hover:shadow-md transition-all duration-300 flex flex-col justify-between">
                            <div>
                                <!-- Quote Icon -->
                                <div class="w-10 h-10 rounded-xl bg-brand-light flex items-center justify-center text-brand mb-4">
                                    <x-lucide-quote class="w-5 h-5 text-brand fill-brand/20" />
                                </div>

                                <!-- Quote Text -->
                                <p class="font-body text-[13px] sm:text-[14px] font-medium text-brand-dark/90 leading-relaxed mb-6">
                                    {{ $card['quote'] }}
                                </p>
                            </div>

                            <!-- Client Info Footer -->
                            <div class="flex items-center gap-3 pt-4 border-t border-brand-divider/70">
                                <img
                                    src="{{ $card['avatar'] }}"
                                    alt="{{ $card['name'] }}"
                                    class="w-10 h-10 rounded-full object-cover border border-brand-divider flex-shrink-0"
                                />
                                <div class="flex flex-col">
                                    <span class="font-heading font-normal text-[15px] sm:text-[16px] text-brand-dark leading-snug">
                                        {{ $card['name'] }}
                                    </span>
                                    <span class="font-body text-xs text-brand-muted font-medium">
                                        {{ $card['role'] }} · {{ $card['org'] }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

            <!-- ROW 2: Scrolls Right (animate-marquee-reverse) -->
            <div class="flex overflow-hidden relative z-0">
                <div class="animate-marquee-reverse flex items-center gap-6 py-2 cursor-default">
                    
                    <!-- Loop Set 1 -->
                    @foreach ($row2 as $card)
                        <div class="w-[310px] sm:w-[360px] lg:w-[390px] flex-shrink-0 rounded-2xl sm:rounded-3xl p-6 sm:p-7 bg-white border border-brand-divider shadow-xs hover:border-brand/40 hover:shadow-md transition-all duration-300 flex flex-col justify-between">
                            <div>
                                <!-- Quote Icon -->
                                <div class="w-10 h-10 rounded-xl bg-brand-light flex items-center justify-center text-brand mb-4">
                                    <x-lucide-quote class="w-5 h-5 text-brand fill-brand/20" />
                                </div>

                                <!-- Quote Text -->
                                <p class="font-body text-[13px] sm:text-[14px] font-medium text-brand-dark/90 leading-relaxed mb-6">
                                    {{ $card['quote'] }}
                                </p>
                            </div>

                            <!-- Client Info Footer -->
                            <div class="flex items-center gap-3 pt-4 border-t border-brand-divider/70">
                                <img
                                    src="{{ $card['avatar'] }}"
                                    alt="{{ $card['name'] }}"
                                    class="w-10 h-10 rounded-full object-cover border border-brand-divider flex-shrink-0"
                                />
                                <div class="flex flex-col">
                                    <span class="font-heading font-normal text-[15px] sm:text-[16px] text-brand-dark leading-snug">
                                        {{ $card['name'] }}
                                    </span>
                                    <span class="font-body text-xs text-brand-muted font-medium">
                                        {{ $card['role'] }} · {{ $card['org'] }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <!-- Loop Set 2 (Identical for Seamless Loop) -->
                    @foreach ($row2 as $card)
                        <div class="w-[310px] sm:w-[360px] lg:w-[390px] flex-shrink-0 rounded-2xl sm:rounded-3xl p-6 sm:p-7 bg-white border border-brand-divider shadow-xs hover:border-brand/40 hover:shadow-md transition-all duration-300 flex flex-col justify-between">
                            <div>
                                <!-- Quote Icon -->
                                <div class="w-10 h-10 rounded-xl bg-brand-light flex items-center justify-center text-brand mb-4">
                                    <x-lucide-quote class="w-5 h-5 text-brand fill-brand/20" />
                                </div>

                                <!-- Quote Text -->
                                <p class="font-body text-[13px] sm:text-[14px] font-medium text-brand-dark/90 leading-relaxed mb-6">
                                    {{ $card['quote'] }}
                                </p>
                            </div>

                            <!-- Client Info Footer -->
                            <div class="flex items-center gap-3 pt-4 border-t border-brand-divider/70">
                                <img
                                    src="{{ $card['avatar'] }}"
                                    alt="{{ $card['name'] }}"
                                    class="w-10 h-10 rounded-full object-cover border border-brand-divider flex-shrink-0"
                                />
                                <div class="flex flex-col">
                                    <span class="font-heading font-normal text-[15px] sm:text-[16px] text-brand-dark leading-snug">
                                        {{ $card['name'] }}
                                    </span>
                                    <span class="font-body text-xs text-brand-muted font-medium">
                                        {{ $card['role'] }} · {{ $card['org'] }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

        </div>

    </div>
</section>
