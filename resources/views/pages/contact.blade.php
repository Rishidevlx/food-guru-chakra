@extends('layouts.app')

@section('content')
<div class="bg-white min-h-screen pt-28 sm:pt-36 lg:pt-40 pb-20 sm:pb-28 relative overflow-hidden">
    
    <!-- Ambient subtle background accent glows -->
    <div class="absolute -top-32 -left-32 w-96 h-96 rounded-full bg-secondary-bg/60 blur-3xl pointer-events-none -z-0"></div>
    <div class="absolute top-1/2 -right-32 w-96 h-96 rounded-full bg-brand-light/50 blur-3xl pointer-events-none -z-0"></div>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <!-- =====================================================================
             1. HEADER ABOVE CARD: 2-Line Content with Section Heading
        ====================================================================== -->
        <div class="text-center max-w-2xl mx-auto mb-12 sm:mb-16 reveal-on-scroll">
            <span class="inline-block text-xs font-semibold uppercase tracking-widest text-brand-dark mb-2.5">
                GET IN TOUCH
            </span>

            <h1 class="font-heading font-normal text-2xl sm:text-3xl lg:text-4xl text-brand-dark tracking-tight mb-3 sm:mb-4 leading-tight">
                Connect With Our Advisory Team
            </h1>

            <p class="font-body text-[13px] sm:text-[15px] lg:text-[16px] text-brand-muted leading-relaxed font-normal">
                Have questions about food safety compliance, audits, kitchen workflow optimization, or SHAKTHI™ training?
                Reach out to our specialized advisory team in Coimbatore.
            </p>
        </div>

        <!-- =====================================================================
             2. SPLIT CONTACT CARD CONTAINER (Matching Uploaded Reference Design)
             - Left: Stylized Map Background + Contact Details
             - Right: Brand Green Form with Speech Bubble Notch
        ====================================================================== -->
        <div class="rounded-3xl overflow-hidden shadow-2xl border border-brand-divider bg-white grid grid-cols-1 lg:grid-cols-12 max-w-5xl mx-auto reveal-on-scroll delay-100">

            <!-- LEFT COLUMN: Map Background + "Let's get in touch" Info -->
            <div class="lg:col-span-6 relative p-8 sm:p-10 lg:p-12 flex flex-col justify-between overflow-hidden bg-[#FAFBF9]">
                
                <!-- Stylized Street Map Vector Pattern Overlay -->
                <div class="absolute inset-0 pointer-events-none opacity-20 select-none -z-0">
                    <svg width="100%" height="100%" viewBox="0 0 600 600" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-full object-cover">
                        <!-- Grid Street Lines -->
                        <path d="M0 80 H600 M0 180 H600 M0 300 H600 M0 420 H600 M0 520 H600" stroke="#09332E" stroke-width="3" stroke-dasharray="6 4" />
                        <path d="M80 0 V600 M200 0 V600 M320 0 V600 M450 0 V600 M550 0 V600" stroke="#09332E" stroke-width="3" stroke-dasharray="6 4" />
                        <!-- Diagonal Main Roads -->
                        <path d="M-50 150 L650 450" stroke="#09332E" stroke-width="6" />
                        <path d="M120 -50 L450 650" stroke="#09332E" stroke-width="5" />
                        <!-- Decorative Blocks -->
                        <rect x="100" y="200" width="80" height="80" fill="#256F45" fill-opacity="0.1" />
                        <rect x="220" y="320" width="80" height="80" fill="#256F45" fill-opacity="0.1" />
                        <rect x="340" y="100" width="90" height="60" fill="#E6A122" fill-opacity="0.1" />
                    </svg>
                </div>

                <!-- Content Layer (Above Map) -->
                <div class="relative z-10">
                    <!-- Heading -->
                    <h2 class="font-heading font-normal text-2xl sm:text-3xl text-brand-dark mb-2.5 tracking-tight">
                        Let&rsquo;s get in touch
                    </h2>

                    <!-- Subtext -->
                    <p class="font-body text-xs sm:text-sm text-brand-muted leading-relaxed mb-8 sm:mb-10 max-w-sm">
                        We&rsquo;re open for any inquiry, audit consultation, or just to have a chat about your food operations.
                    </p>

                    <!-- Contact Details List with Clean Outline Icons -->
                    <div class="space-y-6 sm:space-y-7">
                        
                        <!-- Phone Numbers -->
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-xl bg-white border border-brand-divider text-brand flex items-center justify-center flex-shrink-0 shadow-xs">
                                <x-lucide-phone-call class="w-5 h-5 text-brand" />
                            </div>
                            <div class="flex flex-col font-body text-xs sm:text-sm text-brand-dark">
                                <a href="tel:+919442054000" class="hover:text-brand font-medium transition-colors">
                                    +91 94420 54000
                                </a>
                                <a href="tel:+919876543210" class="hover:text-brand font-medium transition-colors mt-0.5">
                                    +91 98765 43210
                                </a>
                            </div>
                        </div>

                        <!-- Email Addresses -->
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-xl bg-white border border-brand-divider text-brand flex items-center justify-center flex-shrink-0 shadow-xs">
                                <x-lucide-mail class="w-5 h-5 text-brand" />
                            </div>
                            <div class="flex flex-col font-body text-xs sm:text-sm text-brand-dark">
                                <a href="mailto:info@foodguruchakra.com" class="hover:text-brand font-medium transition-colors">
                                    info@foodguruchakra.com
                                </a>
                                <a href="mailto:advisory@foodguruchakra.com" class="hover:text-brand font-medium transition-colors mt-0.5">
                                    advisory@foodguruchakra.com
                                </a>
                            </div>
                        </div>

                        <!-- Headquarters Address -->
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-xl bg-white border border-brand-divider text-brand flex items-center justify-center flex-shrink-0 shadow-xs">
                                <x-lucide-map-pin class="w-5 h-5 text-brand" />
                            </div>
                            <div class="font-body text-xs sm:text-sm text-brand-dark leading-relaxed">
                                <p class="font-medium text-brand-dark">Food Guru Chakra HQ,</p>
                                <p class="text-brand-muted">12/4, Avinashi Road, Peelamedu,</p>
                                <p class="text-brand-muted">Coimbatore, Tamil Nadu — 641004.</p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Bottom Status Indicator -->
                <div class="relative z-10 pt-8 mt-8 border-t border-brand-divider/70 flex items-center gap-2.5 text-xs text-brand-muted font-body">
                    <span class="w-2.5 h-2.5 rounded-full bg-emerald-500 animate-pulse"></span>
                    <span>Advisory team active &bull; Monday &ndash; Saturday (9:00 AM &ndash; 6:30 PM IST)</span>
                </div>

            </div>

            <!-- RIGHT COLUMN: Solid Brand Green Form Container with Speech Bubble Notch -->
            <div
                x-data="{
                    name: '',
                    email: '',
                    phone: '',
                    message: '',
                    submitted: false,
                    handleSubmit() {
                        if (this.name && this.email && this.message) {
                            this.submitted = true;
                        }
                    }
                }"
                class="lg:col-span-6 bg-brand text-white p-8 sm:p-10 lg:p-12 relative flex flex-col justify-between"
            >
                <!-- Desktop Speech Bubble Notch pointing to the Left Map Side -->
                <div
                    class="hidden lg:block absolute top-12 -left-3.5 w-0 h-0 border-t-[12px] border-t-transparent border-b-[12px] border-b-transparent border-r-[14px] border-r-brand z-20 pointer-events-none"
                    aria-hidden="true"
                ></div>

                <!-- Form Heading / State -->
                <div>
                    <h3 class="font-heading font-normal text-xl sm:text-2xl text-white mb-2 tracking-tight">
                        Send a Message
                    </h3>
                    <p class="font-body text-xs sm:text-sm text-white/80 leading-relaxed mb-6 sm:mb-8">
                        Fill in your requirements and our specialists will respond within 24 business hours.
                    </p>

                    <!-- Success Feedback State -->
                    <template x-if="submitted">
                        <div class="p-6 rounded-2xl bg-white/10 border border-white/20 text-center animate-fadeIn my-6">
                            <div class="w-12 h-12 rounded-full bg-white text-brand mx-auto flex items-center justify-center mb-3 shadow-md">
                                <x-lucide-check class="w-6 h-6 stroke-[2.5]" />
                            </div>
                            <h4 class="font-heading font-semibold text-lg text-white mb-1">
                                Thank You!
                            </h4>
                            <p class="font-body text-xs sm:text-sm text-white/80 leading-relaxed">
                                Your message has been received. Our advisory team will contact you shortly.
                            </p>
                        </div>
                    </template>

                    <!-- Interactive Form Inputs -->
                    <form x-show="!submitted" @submit.prevent="handleSubmit" class="space-y-4 sm:space-y-5">
                        
                        <!-- 1. FULL NAME Input with Icon -->
                        <div class="relative flex items-center border border-white/50 focus-within:border-white focus-within:bg-white/10 rounded-xl px-4 py-3 sm:py-3.5 bg-white/5 transition-all">
                            <x-lucide-user class="w-5 h-5 text-white/80 mr-3 flex-shrink-0" />
                            <input
                                type="text"
                                x-model="name"
                                required
                                placeholder="FULL NAME"
                                class="w-full bg-transparent text-white placeholder-white/70 text-xs sm:text-sm uppercase tracking-wider font-semibold focus:outline-none"
                            />
                        </div>

                        <!-- 2. EMAIL Input with Icon -->
                        <div class="relative flex items-center border border-white/50 focus-within:border-white focus-within:bg-white/10 rounded-xl px-4 py-3 sm:py-3.5 bg-white/5 transition-all">
                            <x-lucide-mail class="w-5 h-5 text-white/80 mr-3 flex-shrink-0" />
                            <input
                                type="email"
                                x-model="email"
                                required
                                placeholder="EMAIL"
                                class="w-full bg-transparent text-white placeholder-white/70 text-xs sm:text-sm uppercase tracking-wider font-semibold focus:outline-none"
                            />
                        </div>

                        <!-- 3. PHONE / ORGANIZATION Input with Icon -->
                        <div class="relative flex items-center border border-white/50 focus-within:border-white focus-within:bg-white/10 rounded-xl px-4 py-3 sm:py-3.5 bg-white/5 transition-all">
                            <x-lucide-building class="w-5 h-5 text-white/80 mr-3 flex-shrink-0" />
                            <input
                                type="text"
                                x-model="phone"
                                placeholder="PHONE / ORGANIZATION"
                                class="w-full bg-transparent text-white placeholder-white/70 text-xs sm:text-sm uppercase tracking-wider font-semibold focus:outline-none"
                            />
                        </div>

                        <!-- 4. MESSAGE Textarea -->
                        <div class="relative border border-white/50 focus-within:border-white focus-within:bg-white/10 rounded-xl p-4 bg-white/5 transition-all">
                            <textarea
                                rows="4"
                                x-model="message"
                                required
                                placeholder="MESSAGE"
                                class="w-full bg-transparent text-white placeholder-white/70 text-xs sm:text-sm uppercase tracking-wider font-semibold focus:outline-none resize-none leading-relaxed"
                            ></textarea>
                        </div>

                        <!-- Submit Button (Rounded Pill Button matching reference) -->
                        <div class="pt-2">
                            <button
                                type="submit"
                                class="w-full sm:w-auto px-8 sm:px-10 py-3.5 rounded-full border-2 border-white text-white font-body font-semibold text-xs sm:text-sm uppercase tracking-widest hover:bg-white hover:text-brand transition-all flex items-center justify-center gap-2.5 group cursor-pointer shadow-sm"
                            >
                                <span>SEND MESSAGE</span>
                                <x-lucide-arrow-right class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" />
                            </button>
                        </div>

                    </form>
                </div>

                <!-- Privacy Assurance Note -->
                <p class="font-body text-[11px] text-white/70 mt-6 sm:mt-8">
                    We respect your privacy. All details shared are protected under strict commercial confidentiality and NDA.
                </p>

            </div>

        </div>

    </div>
</div>
@endsection
