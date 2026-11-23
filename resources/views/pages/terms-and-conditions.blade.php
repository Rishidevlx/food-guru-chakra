@extends('layouts.app')

@section('content')
<div
    x-data="{
        activeSection: 'term-1',
        sections: [
            { id: 'term-1', number: '1', title: 'Acceptance of Terms' },
            { id: 'term-2', number: '2', title: 'Scope of Advisory Services' },
            { id: 'term-3', number: '3', title: 'Client Engagements & NDA' },
            { id: 'term-4', number: '4', title: 'Intellectual Property & SHAKTHI™' },
            { id: 'term-5', number: '5', title: 'Regulatory Disclaimers & Audits' },
            { id: 'term-6', number: '6', title: 'Fees, Retainers & Invoicing' },
            { id: 'term-7', number: '7', title: 'Client Responsibilities' },
            { id: 'term-8', number: '8', title: 'Limitation of Liability' },
            { id: 'term-9', number: '9', title: 'Termination & Cancellation' },
            { id: 'term-10', number: '10', title: 'Governing Law & Jurisdiction' }
        ],
        init() {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        this.activeSection = entry.target.id;
                    }
                });
            }, {
                rootMargin: '-15% 0px -65% 0px',
                threshold: 0
            });

            document.querySelectorAll('.legal-section').forEach(sec => observer.observe(sec));
        },
        scrollTo(id) {
            const el = document.getElementById(id);
            if (el) {
                const yOffset = -110;
                const y = el.getBoundingClientRect().top + window.pageYOffset + yOffset;
                window.scrollTo({ top: y, behavior: 'smooth' });
                this.activeSection = id;
            }
        }
    }"
    class="bg-white min-h-screen pt-28 sm:pt-36 pb-24"
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- =====================================================================
             TOP HEADER STRIP (Minimal, Clean, Professional)
        ====================================================================== -->
        <div class="border-b border-brand-divider pb-8 mb-12 sm:mb-16">
            <span class="inline-block text-xs font-semibold uppercase tracking-widest text-brand-dark mb-2">
                FOOD GURU CHAKRA™ LEGAL
            </span>
            <h1 class="font-heading font-normal text-3xl sm:text-4xl md:text-5xl text-brand-dark tracking-tight">
                Terms and Conditions
            </h1>
            <p class="font-body text-xs sm:text-sm text-brand-muted mt-2">
                Effective Date: November 2026 &nbsp;|&nbsp; Last Updated: November 2026
            </p>
        </div>

        <!-- =====================================================================
             MAIN 2-COLUMN LAYOUT:
             - Left: Sticky Table of Contents with Active Scrollspy Indicator
             - Right: Plain Clean Legal Text (No Card Wrappers, Pure White Bg)
        ====================================================================== -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16">
            
            <!-- LEFT COLUMN: Sticky Table of Contents -->
            <aside class="lg:col-span-4">
                <div class="sticky top-28 self-start">
                    <h2 class="font-heading font-semibold text-lg sm:text-xl text-brand-dark mb-6 tracking-tight">
                        Table of Contents
                    </h2>

                    <!-- Navigation Links with Vertical Indicator -->
                    <nav class="space-y-1 font-body text-sm">
                        <template x-for="item in sections" :key="item.id">
                            <a
                                :href="'#' + item.id"
                                @click.prevent="scrollTo(item.id)"
                                :class="activeSection === item.id 
                                    ? 'border-brand-dark text-brand-dark font-semibold pl-4 bg-brand-light/30' 
                                    : 'border-transparent text-gray-500 hover:text-brand-dark hover:border-gray-300 pl-4'"
                                class="flex items-center py-2.5 border-l-2 transition-all duration-200 text-left text-[14px]"
                            >
                                <span x-text="item.number + '. ' + item.title" class="truncate"></span>
                            </a>
                        </template>
                    </nav>

                    <!-- Quick Support Contact Note -->
                    <div class="mt-10 pt-6 border-t border-brand-divider text-xs text-brand-muted leading-relaxed">
                        Need legal clarification?<br>
                        Email: <a href="mailto:legal@foodguruchakra.com" class="text-brand-dark font-medium underline">legal@foodguruchakra.com</a>
                    </div>
                </div>
            </aside>

            <!-- RIGHT COLUMN: Plain White Legal Content (Zero Cards, Pure Black/Theme Text) -->
            <article class="lg:col-span-8 font-body text-[#1C2826] leading-relaxed space-y-12">
                
                <!-- 1. Acceptance of Terms -->
                <section id="term-1" class="legal-section scroll-mt-28">
                    <h2 class="font-heading font-semibold text-2xl sm:text-3xl text-brand-dark mb-4 tracking-tight">
                        1. Acceptance of Terms
                    </h2>
                    <p class="text-[15px] sm:text-base leading-relaxed mb-4">
                        By accessing, browsing, or utilizing the website of FOOD GURU CHAKRA™ (accessible at foodguruchakra.com) or executing a Service Engagement Agreement with us, you agree to be legally bound by these Terms and Conditions (&ldquo;Terms&rdquo;).
                    </p>
                    <p class="text-[15px] sm:text-base leading-relaxed mb-4">
                        If you represent a corporate entity, institution, cloud kitchen network, food processing plant, or hospitality establishment, you represent and warrant that you hold full legal authority to bind that commercial entity to these Terms.
                    </p>
                    <p class="text-[15px] sm:text-base leading-relaxed">
                        If you do not accept these Terms without reservation, you must immediately terminate access to our portal and discontinue any advisory engagements.
                    </p>
                </section>

                <!-- 2. Scope of Advisory Services -->
                <section id="term-2" class="legal-section scroll-mt-28">
                    <h2 class="font-heading font-semibold text-2xl sm:text-3xl text-brand-dark mb-4 tracking-tight">
                        2. Scope of Advisory & Consultancy Services
                    </h2>
                    <p class="text-[15px] sm:text-base leading-relaxed mb-4">
                        FOOD GURU CHAKRA™ provides professional technical advisory, food safety management framework development, kitchen infrastructure workflow planning, and human capability building across the food and beverage industry.
                    </p>
                    <ul class="list-disc pl-5 space-y-2 text-[15px] sm:text-base mb-4">
                        <li><strong>Food Safety & Hygiene:</strong> Prerequisite program implementation, HACCP plan formulation, ISO 22000 and FSSC 22000 preparedness.</li>
                        <li><strong>Operational Planning:</strong> Commercial kitchen zoning, central production unit (CPU) workflow modeling, cook-chill system specifications.</li>
                        <li><strong>Statutory Readiness:</strong> FSSAI documentation guidance, mock audit simulations, and non-conformance remediation.</li>
                        <li><strong>Capability Development:</strong> SHAKTHI™ knowledge sessions, frontline hygiene training, and supervisor masterclasses.</li>
                    </ul>
                </section>

                <!-- 3. Client Engagements & Confidentiality (NDA) -->
                <section id="term-3" class="legal-section scroll-mt-28">
                    <h2 class="font-heading font-semibold text-2xl sm:text-3xl text-brand-dark mb-4 tracking-tight">
                        3. Client Engagements & Confidentiality (NDA)
                    </h2>
                    <p class="text-[15px] sm:text-base leading-relaxed mb-4">
                        All consulting diagnostic projects are executed under stringent confidentiality obligations. Any technical blueprints, formulation recipes, supply chain lists, or operational logs shared with us are treated as privileged business trade secrets.
                    </p>
                    <p class="text-[15px] sm:text-base leading-relaxed">
                        Similarly, all proprietary diagnostic methodology, audit scoring indices, and operational roadmaps provided by FOOD GURU CHAKRA™ remain strictly confidential to the engaged client entity and shall not be distributed to uncontracted third parties.
                    </p>
                </section>

                <!-- 4. Intellectual Property & SHAKTHI™ -->
                <section id="term-4" class="legal-section scroll-mt-28">
                    <h2 class="font-heading font-semibold text-2xl sm:text-3xl text-brand-dark mb-4 tracking-tight">
                        4. Intellectual Property & Training Materials (SHAKTHI™)
                    </h2>
                    <p class="text-[15px] sm:text-base leading-relaxed mb-4">
                        The trademarks, service marks, brand logos (including FOOD GURU CHAKRA™ and SHAKTHI™ — What Are We Learning Today?), instructional manuals, slide decks, training toolkits, and website source content are the exclusive intellectual property of FOOD GURU CHAKRA™.
                    </p>
                    <p class="text-[15px] sm:text-base leading-relaxed">
                        Clients and enrolled participants receive a limited, revocable, non-transferable internal license to utilize training courseware for in-house staff capability building. Reproduction, public broadcasting, resale, or sublicensing of our educational materials is strictly prohibited without prior written consent.
                    </p>
                </section>

                <!-- 5. Regulatory Disclaimers & Audits -->
                <section id="term-5" class="legal-section scroll-mt-28">
                    <h2 class="font-heading font-semibold text-2xl sm:text-3xl text-brand-dark mb-4 tracking-tight">
                        5. Audit Representations & Regulatory Disclaimers
                    </h2>
                    <p class="text-[15px] sm:text-base leading-relaxed mb-4">
                        FOOD GURU CHAKRA™ functions solely as an independent technical advisory and capability consultancy. We are not a statutory regulatory body, court of law, or government enforcement agency.
                    </p>
                    <p class="text-[15px] sm:text-base leading-relaxed mb-4">
                        While our advisory recommendations and mock audits adhere to established FSSAI, HACCP, and ISO standards, statutory licensing, formal certification awards, and legal compliance determinations rest exclusively with the relevant statutory authorities or accredited registrar bodies.
                    </p>
                    <p class="text-[15px] sm:text-base leading-relaxed">
                        Client remains solely responsible for day-to-day operational hygiene adherence, physical plant maintenance, and full compliance with governing local, state, and national food laws.
                    </p>
                </section>

                <!-- 6. Fees, Retainers & Invoicing -->
                <section id="term-6" class="legal-section scroll-mt-28">
                    <h2 class="font-heading font-semibold text-2xl sm:text-3xl text-brand-dark mb-4 tracking-tight">
                        6. Service Fees, Retainers & Invoicing
                    </h2>
                    <p class="text-[15px] sm:text-base leading-relaxed mb-4">
                        Consultancy retainers, project milestone fees, and training honorariums are defined within the applicable Statement of Work (SOW) or Official Service Proposal signed by both parties.
                    </p>
                    <ul class="list-disc pl-5 space-y-2 text-[15px] sm:text-base mb-4">
                        <li>All financial quotes are exclusive of applicable Indian Goods and Services Tax (GST), which will be charged at statutory rates.</li>
                        <li>Invoices are payable within the net terms stated on the invoice (typically 15 business days from presentation).</li>
                        <li>Delinquent payments may incur statutory late fees and may result in immediate suspension of active advisory services.</li>
                    </ul>
                </section>

                <!-- 7. Client Responsibilities & On-Site Verification -->
                <section id="term-7" class="legal-section scroll-mt-28">
                    <h2 class="font-heading font-semibold text-2xl sm:text-3xl text-brand-dark mb-4 tracking-tight">
                        7. Client Responsibilities & On-Site Verification
                    </h2>
                    <p class="text-[15px] sm:text-base leading-relaxed mb-4">
                        To enable our specialists to deliver accurate gap assessments and tailored recommendations, the client agrees to:
                    </p>
                    <ul class="list-disc pl-5 space-y-2 text-[15px] sm:text-base mb-4">
                        <li>Grant safe, authorized on-site physical access to factory floors, kitchen preparation corridors, dry storage areas, and cold rooms.</li>
                        <li>Provide accurate, truthful documentation regarding batch traceability, pest management logs, water potability tests, and employee health fitness cards.</li>
                        <li>Ensure visiting consultancy personnel are briefed on facility-specific occupational safety guidelines.</li>
                    </ul>
                </section>

                <!-- 8. Limitation of Liability -->
                <section id="term-8" class="legal-section scroll-mt-28">
                    <h2 class="font-heading font-semibold text-2xl sm:text-3xl text-brand-dark mb-4 tracking-tight">
                        8. Limitation of Liability
                    </h2>
                    <p class="text-[15px] sm:text-base leading-relaxed mb-4">
                        To the maximum extent permitted by applicable Indian law, FOOD GURU CHAKRA™, its directors, advisors, and employees shall not be liable for any indirect, incidental, punitive, special, or consequential damages, including loss of revenue, business interruption, goodwill impairment, or product spoilage.
                    </p>
                    <p class="text-[15px] sm:text-base leading-relaxed">
                        Our cumulative aggregate financial liability arising out of or related to any consultancy engagement, whether sounding in contract, tort, or statutory duty, shall not exceed the total advisory fees paid by the client under the specific Statement of Work directly giving rise to the claim.
                    </p>
                </section>

                <!-- 9. Termination & Cancellation -->
                <section id="term-9" class="legal-section scroll-mt-28">
                    <h2 class="font-heading font-semibold text-2xl sm:text-3xl text-brand-dark mb-4 tracking-tight">
                        9. Termination & Cancellation
                    </h2>
                    <p class="text-[15px] sm:text-base leading-relaxed mb-4">
                        Either party may terminate an active advisory contract upon thirty (30) days advance written notice, or immediately in the event of a material breach that remains uncured for fifteen (15) days following formal written notification.
                    </p>
                    <p class="text-[15px] sm:text-base leading-relaxed">
                        Upon termination, the client shall promptly remunerate FOOD GURU CHAKRA™ for all milestones completed and out-of-pocket technical expenses incurred up to the date of termination. Provisions relating to Confidentiality, Intellectual Property, and Limitation of Liability shall survive termination indefinitely.
                    </p>
                </section>

                <!-- 10. Governing Law & Dispute Resolution -->
                <section id="term-10" class="legal-section scroll-mt-28">
                    <h2 class="font-heading font-semibold text-2xl sm:text-3xl text-brand-dark mb-4 tracking-tight">
                        10. Governing Law & Jurisdiction
                    </h2>
                    <p class="text-[15px] sm:text-base leading-relaxed mb-4">
                        These Terms and Conditions shall be governed by, construed, and enforced in accordance with the substantive laws of India, without regard to conflict of law principles.
                    </p>
                    <p class="text-[15px] sm:text-base leading-relaxed mb-4">
                        Any dispute, claim, or controversy arising out of or relating to these Terms or the breach thereof shall first be submitted to mutual amicable conciliation. If unresolved within thirty (30) days, the dispute shall be resolved through binding arbitration in accordance with the Indian Arbitration and Conciliation Act, 1996. The seat and venue of arbitration shall be Coimbatore, Tamil Nadu, India.
                    </p>
                    <p class="text-[15px] sm:text-base leading-relaxed">
                        Subject to arbitration, the courts situated exclusively in Coimbatore, Tamil Nadu, India shall exercise exclusive jurisdiction over any legal proceedings arising hereunder.
                    </p>
                </section>

            </article>
        </div>
    </div>
</div>
@endsection
