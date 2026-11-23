@extends('layouts.app')

@section('content')
<div
    x-data="{
        activeSection: 'sec-1',
        sections: [
            { id: 'sec-1', number: '1', title: 'Introduction' },
            { id: 'sec-2', number: '2', title: 'Information We Collect' },
            { id: 'sec-3', number: '3', title: 'How We Use Your Information' },
            { id: 'sec-4', number: '4', title: 'Legal Basis & Regulatory Compliance' },
            { id: 'sec-5', number: '5', title: 'Proprietary Recipe & Client Data Protection' },
            { id: 'sec-6', number: '6', title: 'Third-Party Disclosures & Lab Partners' },
            { id: 'sec-7', number: '7', title: 'Cookies & Analytics' },
            { id: 'sec-8', number: '8', title: 'Data Security & Storage Standards' },
            { id: 'sec-9', number: '9', title: 'Your Rights & Data Choices' },
            { id: 'sec-10', number: '10', title: 'Contact Information & Grievance' }
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
                Privacy Policy
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
                        Have privacy-related questions?<br>
                        Email: <a href="mailto:privacy@foodguruchakra.com" class="text-brand-dark font-medium underline">privacy@foodguruchakra.com</a>
                    </div>
                </div>
            </aside>

            <!-- RIGHT COLUMN: Plain White Legal Content (Zero Cards, Pure Black/Theme Text) -->
            <article class="lg:col-span-8 font-body text-[#1C2826] leading-relaxed space-y-12">
                
                <!-- 1. Introduction -->
                <section id="sec-1" class="legal-section scroll-mt-28">
                    <h2 class="font-heading font-semibold text-2xl sm:text-3xl text-brand-dark mb-4 tracking-tight">
                        1. Introduction
                    </h2>
                    <p class="text-[15px] sm:text-base leading-relaxed mb-4">
                        Welcome to FOOD GURU CHAKRA™ (&ldquo;we&rdquo;, &ldquo;our&rdquo;, or &ldquo;us&rdquo;). We operate as a premier integrated food safety advisory, kitchen design consultancy, and capability development organization headquartered in Coimbatore, Tamil Nadu, India.
                    </p>
                    <p class="text-[15px] sm:text-base leading-relaxed mb-4">
                        This Privacy Policy clearly outlines how we collect, use, process, safeguard, and disclose your personal and commercial organizational information when you visit our website, engage our advisory services, attend SHAKTHI™ knowledge sessions, or interact with our representatives.
                    </p>
                    <p class="text-[15px] sm:text-base leading-relaxed">
                        By accessing our platform or engaging our consulting services, you acknowledge that you have read, understood, and consented to the practices described in this policy. If you do not agree with any terms herein, please refrain from submitting information or using our services.
                    </p>
                </section>

                <!-- 2. Information We Collect -->
                <section id="sec-2" class="legal-section scroll-mt-28">
                    <h2 class="font-heading font-semibold text-2xl sm:text-3xl text-brand-dark mb-4 tracking-tight">
                        2. Information We Collect
                    </h2>
                    <p class="text-[15px] sm:text-base leading-relaxed mb-4">
                        We collect information necessary to deliver high-quality advisory services, conduct facility assessments, and maintain seamless professional communications. This includes:
                    </p>
                    <ul class="list-disc pl-5 space-y-2 text-[15px] sm:text-base mb-4">
                        <li><strong>Contact & Entity Details:</strong> Full name, corporate email address, contact telephone numbers, company name, operational location, and official designation.</li>
                        <li><strong>Facility & Operational Data:</strong> Factory blueprints, kitchen layout specifications, production capacity records, HACCP prerequisite logs, and current food safety certifications voluntarily shared during consultancy diagnostics.</li>
                        <li><strong>SHAKTHI™ Training Data:</strong> Participant names, employee rosters, attendance records, course evaluations, and certification issuance records.</li>
                        <li><strong>Technical & Browsing Data:</strong> IP addresses, browser types, operating systems, referring URLs, and device telemetry automatically gathered through server logs and analytics cookies.</li>
                    </ul>
                </section>

                <!-- 3. How We Use Your Information -->
                <section id="sec-3" class="legal-section scroll-mt-28">
                    <h2 class="font-heading font-semibold text-2xl sm:text-3xl text-brand-dark mb-4 tracking-tight">
                        3. How We Use Your Information
                    </h2>
                    <p class="text-[15px] sm:text-base leading-relaxed mb-4">
                        FOOD GURU CHAKRA™ uses the collected information strictly for legitimate commercial and advisory objectives, including:
                    </p>
                    <ul class="list-disc pl-5 space-y-2 text-[15px] sm:text-base mb-4">
                        <li>Conducting comprehensive food safety audits, gap analyses, and regulatory readiness assessments.</li>
                        <li>Formulating customized standard operating procedures (SOPs), HACCP documentation, and workflow optimization plans.</li>
                        <li>Facilitating corporate training modules, verifying competency benchmarks, and issuing accredited SHAKTHI™ credentials.</li>
                        <li>Responding to client inquiries, generating project scopes, proposals, and administrative invoicing.</li>
                        <li>Fulfilling legal, statutory, and regulatory compliance obligations mandated by Indian food safety authorities.</li>
                    </ul>
                </section>

                <!-- 4. Legal Basis & Regulatory Compliance -->
                <section id="sec-4" class="legal-section scroll-mt-28">
                    <h2 class="font-heading font-semibold text-2xl sm:text-3xl text-brand-dark mb-4 tracking-tight">
                        4. Legal Basis & Regulatory Compliance
                    </h2>
                    <p class="text-[15px] sm:text-base leading-relaxed mb-4">
                        We process personal and organizational data in accordance with applicable laws governing data protection in India, including the Information Technology Act, 2000, the Information Technology (Reasonable Security Practices and Procedures and Sensitive Personal Data or Information) Rules, 2011, and the Digital Personal Data Protection (DPDP) Act, 2023.
                    </p>
                    <p class="text-[15px] sm:text-base leading-relaxed">
                        Where consultancy services require review of statutory compliance records under the Food Safety and Standards Act, 2006 (FSSAI), such processing is undertaken solely on the basis of contractual necessity and direct client authorization.
                    </p>
                </section>

                <!-- 5. Proprietary Recipe & Client Data Protection -->
                <section id="sec-5" class="legal-section scroll-mt-28">
                    <h2 class="font-heading font-semibold text-2xl sm:text-3xl text-brand-dark mb-4 tracking-tight">
                        5. Proprietary Recipe & Client Data Protection
                    </h2>
                    <p class="text-[15px] sm:text-base leading-relaxed mb-4">
                        We recognize that food businesses rely heavily on confidential recipes, ingredient formulations, vendor contacts, and manufacturing trade secrets. FOOD GURU CHAKRA™ maintains the highest standards of confidentiality:
                    </p>
                    <ul class="list-disc pl-5 space-y-2 text-[15px] sm:text-base mb-4">
                        <li>All client culinary recipes, process flowcharts, yield ratios, and operational manuals are treated as strictly confidential trade secrets.</li>
                        <li>We execute binding mutual non-disclosure agreements (NDAs) prior to commencing any diagnostic or on-site engagement.</li>
                        <li>Consulting personnel are bound by rigorous non-compete and confidentiality covenants preventing unauthorized sharing or derivative commercial use.</li>
                    </ul>
                </section>

                <!-- 6. Third-Party Disclosures & Lab Partners -->
                <section id="sec-6" class="legal-section scroll-mt-28">
                    <h2 class="font-heading font-semibold text-2xl sm:text-3xl text-brand-dark mb-4 tracking-tight">
                        6. Third-Party Disclosures & Lab Partners
                    </h2>
                    <p class="text-[15px] sm:text-base leading-relaxed mb-4">
                        We do not sell, rent, or lease your personal or operational data to any commercial broker or third-party marketing network. Data disclosures occur exclusively under the following defined circumstances:
                    </p>
                    <ul class="list-disc pl-5 space-y-2 text-[15px] sm:text-base mb-4">
                        <li><strong>Accredited Testing Laboratories:</strong> When a client requests microbiological or chemical food testing through NABL-accredited laboratory partners.</li>
                        <li><strong>Certification & Statutory Bodies:</strong> Where client explicitly authorizes submission of audit dossiers to external auditing entities (e.g., ISO, FSSC 22000, FSSAI).</li>
                        <li><strong>Legal Mandate:</strong> If disclosure is legitimately required by court subpoena, statutory directive, or governmental regulatory authority.</li>
                    </ul>
                </section>

                <!-- 7. Cookies & Analytics -->
                <section id="sec-7" class="legal-section scroll-mt-28">
                    <h2 class="font-heading font-semibold text-2xl sm:text-3xl text-brand-dark mb-4 tracking-tight">
                        7. Cookies & Analytics
                    </h2>
                    <p class="text-[15px] sm:text-base leading-relaxed mb-4">
                        Our website uses essential functional cookies and non-invasive analytical tools to ensure website security, optimize page load speeds, and understand aggregated visitor engagement trends.
                    </p>
                    <p class="text-[15px] sm:text-base leading-relaxed">
                        You can configure your browser preferences to decline or notify you when cookies are set. Please note that disabling essential cookies may impact certain interactive functionalities of our portal.
                    </p>
                </section>

                <!-- 8. Data Security & Storage Standards -->
                <section id="sec-8" class="legal-section scroll-mt-28">
                    <h2 class="font-heading font-semibold text-2xl sm:text-3xl text-brand-dark mb-4 tracking-tight">
                        8. Data Security & Storage Standards
                    </h2>
                    <p class="text-[15px] sm:text-base leading-relaxed mb-4">
                        FOOD GURU CHAKRA™ implements robust technical, organizational, and physical safeguards designed to shield your data against unauthorized access, alteration, disclosure, or accidental destruction.
                    </p>
                    <ul class="list-disc pl-5 space-y-2 text-[15px] sm:text-base mb-4">
                        <li>Digital audit documentation is stored on encrypted enterprise cloud infrastructure with role-based access control.</li>
                        <li>Physical blueprints, plant schematics, and confidential test samples are stored in restricted-access archives.</li>
                        <li>Regular digital vulnerability assessments and security protocol reviews are performed across all internal systems.</li>
                    </ul>
                </section>

                <!-- 9. Your Rights & Data Choices -->
                <section id="sec-9" class="legal-section scroll-mt-28">
                    <h2 class="font-heading font-semibold text-2xl sm:text-3xl text-brand-dark mb-4 tracking-tight">
                        9. Your Rights & Data Choices
                    </h2>
                    <p class="text-[15px] sm:text-base leading-relaxed mb-4">
                        As a data principal, you hold specific legal rights concerning the personal information we retain about you:
                    </p>
                    <ul class="list-disc pl-5 space-y-2 text-[15px] sm:text-base mb-4">
                        <li><strong>Right to Access:</strong> Request a summary of the personal information we hold about you.</li>
                        <li><strong>Right to Correction:</strong> Request updates or corrections to incomplete or inaccurate data.</li>
                        <li><strong>Right to Erasure:</strong> Request deletion of personal records, subject to statutory retention requirements mandated by Indian tax and food safety laws.</li>
                        <li><strong>Right to Opt-Out:</strong> Unsubscribe from optional technical newsletters or SHAKTHI™ seminar announcements at any time.</li>
                    </ul>
                </section>

                <!-- 10. Contact Information & Grievance -->
                <section id="sec-10" class="legal-section scroll-mt-28">
                    <h2 class="font-heading font-semibold text-2xl sm:text-3xl text-brand-dark mb-4 tracking-tight">
                        10. Contact Information & Grievance
                    </h2>
                    <p class="text-[15px] sm:text-base leading-relaxed mb-4">
                        If you have any questions, requests, or grievances regarding this Privacy Policy or our data handling practices, please contact our designated Grievance & Compliance Officer:
                    </p>
                    <div class="mt-4 p-6 bg-secondary-bg/40 border-l-4 border-brand-dark text-[15px] space-y-1">
                        <p class="font-semibold text-brand-dark">Grievance & Privacy Officer</p>
                        <p>FOOD GURU CHAKRA™ Advisory Services</p>
                        <p>12/4, Avinashi Road, Peelamedu, Coimbatore - 641004, Tamil Nadu, India</p>
                        <p>Email: <a href="mailto:privacy@foodguruchakra.com" class="text-brand font-medium underline">privacy@foodguruchakra.com</a></p>
                        <p>Direct: +91 94420 54000</p>
                    </div>
                </section>

            </article>
        </div>
    </div>
</div>
@endsection
