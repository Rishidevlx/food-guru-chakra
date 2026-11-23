@extends('layouts.app')

@section('content')
<!-- =====================================================================
     CONTACT HERO & 2-COLUMN SECTION (Left: Contact Info | Right: Form)
====================================================================== -->
<section class="bg-white pt-28 sm:pt-36 lg:pt-40 pb-16 sm:pb-24 relative">
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- 2-Column Responsive Grid with Vertical Half-Line Divider -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-start relative">

            <!-- =====================================================================
                 LEFT COLUMN: "Let's Get In Touch" + Clean Static Cards (Minimal Radius)
            ====================================================================== -->
            <div class="lg:col-span-5 flex flex-col justify-start relative lg:pr-10 xl:pr-12 reveal-on-scroll">
                
                <span class="inline-block text-xs font-semibold uppercase tracking-widest text-brand mb-2.5">
                    GET IN TOUCH
                </span>

                <h1 class="font-heading font-normal text-3xl sm:text-4xl lg:text-[42px] text-brand-dark tracking-tight mb-3 leading-tight">
                    Let&rsquo;s Get In Touch
                </h1>

                <p class="font-body text-xs sm:text-sm text-neutral-600 leading-relaxed mb-7 max-w-md">
                    We are open for any inquiry, food safety audit consultation, kitchen workflow assessment, or advisory discussion regarding your facility.
                </p>

                <!-- Stacked 3 Clean White Cards (Minimal Radius, No Hover Effect, Clean Data) -->
                <div class="space-y-3.5 w-full">

                    <!-- CARD 1: Quick Call -->
                    <div class="p-4 rounded-lg bg-white border border-brand-divider shadow-2xs flex items-center gap-3.5">
                        <div class="w-10 h-10 rounded-md bg-brand-light text-brand flex items-center justify-center flex-shrink-0">
                            <x-lucide-phone class="w-5 h-5 text-brand" />
                        </div>
                        <div class="flex-1 min-w-0">
                            <span class="block font-body text-[11px] font-semibold uppercase tracking-wider text-neutral-500 mb-0.5">
                                Quick Call
                            </span>
                            <a href="tel:+917845567089" class="block font-body text-sm sm:text-[15px] font-semibold text-black hover:text-brand-gold transition-colors">
                                +91 78455 67089
                            </a>
                        </div>
                    </div>

                    <!-- CARD 2: Email Us -->
                    <div class="p-4 rounded-lg bg-white border border-brand-divider shadow-2xs flex items-center gap-3.5">
                        <div class="w-10 h-10 rounded-md bg-brand-light text-brand flex items-center justify-center flex-shrink-0">
                            <x-lucide-mail class="w-5 h-5 text-brand" />
                        </div>
                        <div class="flex-1 min-w-0">
                            <span class="block font-body text-[11px] font-semibold uppercase tracking-wider text-neutral-500 mb-0.5">
                                Email Us
                            </span>
                            <a href="mailto:chakramyid@gmail.com" class="block font-body text-sm sm:text-[15px] font-semibold text-black hover:text-brand-gold transition-colors truncate">
                                chakramyid@gmail.com
                            </a>
                        </div>
                    </div>

                    <!-- CARD 3: Locations (Replaced Headquarters with Locations, Removed Food Guru Chakra name) -->
                    <div class="p-4 rounded-lg bg-white border border-brand-divider shadow-2xs flex items-start gap-3.5">
                        <div class="w-10 h-10 rounded-md bg-brand-light text-brand flex items-center justify-center flex-shrink-0 mt-0.5">
                            <x-lucide-map-pin class="w-5 h-5 text-brand" />
                        </div>
                        <div class="flex-1 min-w-0">
                            <span class="block font-body text-[11px] font-semibold uppercase tracking-wider text-neutral-500 mb-1">
                                Locations
                            </span>
                            <p class="font-body text-xs sm:text-[13px] text-neutral-700 leading-relaxed">
                                Subha Complex, 106 F/ 7, Collector Office Road,<br>
                                Annai Nagar, Perambalur – 621212, India.
                            </p>
                        </div>
                    </div>

                </div>

                <!-- Vertical Half-Line Divider (Between Left and Right Sections on Desktop) -->
                <div class="hidden lg:block absolute right-0 top-16 bottom-16 w-[1px] bg-brand-divider" aria-hidden="true"></div>

            </div>

            <!-- =====================================================================
                 RIGHT COLUMN: Clean Borderless Form Layout (Direct on Page)
            ====================================================================== -->
            <div
                x-data="{
                    firstName: '',
                    lastName: '',
                    email: '',
                    phone: '',
                    message: '',
                    submitted: false,
                    handleSubmit() {
                        this.submitted = true;
                    }
                }"
                class="lg:col-span-7 lg:pl-6 xl:pl-8 reveal-on-scroll delay-100"
            >
                <div class="mb-6 sm:mb-8">
                    <h2 class="font-heading font-normal text-2xl sm:text-3xl text-brand-dark mb-2 tracking-tight">
                        Send Us a Message
                    </h2>
                    <p class="font-body text-xs sm:text-sm text-neutral-600">
                        Fill in your requirements below and our specialized team will contact you promptly.
                    </p>
                </div>

                <!-- Success Alert Banner -->
                <template x-if="submitted">
                    <div class="p-6 sm:p-8 rounded-2xl bg-brand-light/60 border border-brand/20 shadow-sm text-center mb-8 animate-fadeIn">
                        <div class="w-12 h-12 rounded-full bg-brand text-white mx-auto flex items-center justify-center mb-3 shadow-sm">
                            <x-lucide-check class="w-6 h-6 stroke-[2.5]" />
                        </div>
                        <h3 class="font-heading font-normal text-xl sm:text-2xl text-brand-dark mb-1">
                            Thank you for reaching out!
                        </h3>
                        <p class="font-body text-xs sm:text-sm text-neutral-600 leading-relaxed max-w-md mx-auto">
                            Your inquiry has been received. Our team will get back to you shortly.
                        </p>
                    </div>
                </template>

                <!-- Form: 3 Balanced Rows with Pure Black Labels (No Outer Card Border) -->
                <form x-show="!submitted" @submit.prevent="handleSubmit" class="space-y-5 sm:space-y-6">

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 sm:gap-6">
                        
                        <!-- ROW 1, COL 1: First Name -->
                        <div>
                            <label class="block font-body text-xs font-semibold text-black mb-2">
                                First Name
                            </label>
                            <div class="relative flex items-center bg-[#FAF9F5] border border-[#E5E2D9] rounded-xl px-3.5 py-3 sm:py-3.5 focus-within:bg-white focus-within:border-brand focus-within:ring-1 focus-within:ring-brand shadow-2xs transition-all">
                                <x-lucide-user class="w-4 h-4 text-neutral-500 mr-2.5 flex-shrink-0" />
                                <input
                                    type="text"
                                    x-model="firstName"
                                    placeholder="Enter your first name..."
                                    class="w-full bg-transparent text-xs sm:text-sm font-body text-black placeholder-neutral-400 focus:outline-none"
                                />
                            </div>
                        </div>

                        <!-- ROW 1, COL 2: Last Name -->
                        <div>
                            <label class="block font-body text-xs font-semibold text-black mb-2">
                                Last Name
                            </label>
                            <div class="relative flex items-center bg-[#FAF9F5] border border-[#E5E2D9] rounded-xl px-3.5 py-3 sm:py-3.5 focus-within:bg-white focus-within:border-brand focus-within:ring-1 focus-within:ring-brand shadow-2xs transition-all">
                                <x-lucide-user class="w-4 h-4 text-neutral-500 mr-2.5 flex-shrink-0" />
                                <input
                                    type="text"
                                    x-model="lastName"
                                    placeholder="Enter your last name..."
                                    class="w-full bg-transparent text-xs sm:text-sm font-body text-black placeholder-neutral-400 focus:outline-none"
                                />
                            </div>
                        </div>

                        <!-- ROW 2, COL 1: Email Address -->
                        <div>
                            <label class="block font-body text-xs font-semibold text-black mb-2">
                                Email Address
                            </label>
                            <div class="relative flex items-center bg-[#FAF9F5] border border-[#E5E2D9] rounded-xl px-3.5 py-3 sm:py-3.5 focus-within:bg-white focus-within:border-brand focus-within:ring-1 focus-within:ring-brand shadow-2xs transition-all">
                                <x-lucide-mail class="w-4 h-4 text-neutral-500 mr-2.5 flex-shrink-0" />
                                <input
                                    type="email"
                                    x-model="email"
                                    placeholder="Enter your email address..."
                                    class="w-full bg-transparent text-xs sm:text-sm font-body text-black placeholder-neutral-400 focus:outline-none"
                                />
                            </div>
                        </div>

                        <!-- ROW 2, COL 2: Mobile Number -->
                        <div>
                            <label class="block font-body text-xs font-semibold text-black mb-2">
                                Mobile Number
                            </label>
                            <div class="relative flex items-center bg-[#FAF9F5] border border-[#E5E2D9] rounded-xl px-3.5 py-3 sm:py-3.5 focus-within:bg-white focus-within:border-brand focus-within:ring-1 focus-within:ring-brand shadow-2xs transition-all">
                                <x-lucide-phone class="w-4 h-4 text-neutral-500 mr-2.5 flex-shrink-0" />
                                <input
                                    type="tel"
                                    x-model="phone"
                                    placeholder="Enter your mobile number..."
                                    class="w-full bg-transparent text-xs sm:text-sm font-body text-black placeholder-neutral-400 focus:outline-none"
                                />
                            </div>
                        </div>

                        <!-- ROW 3: Message (Full Width Across Columns) -->
                        <div class="sm:col-span-2">
                            <label class="block font-body text-xs font-semibold text-black mb-2">
                                Message
                            </label>
                            <div class="relative flex items-start bg-[#FAF9F5] border border-[#E5E2D9] rounded-xl p-3.5 sm:p-4 focus-within:bg-white focus-within:border-brand focus-within:ring-1 focus-within:ring-brand shadow-2xs transition-all">
                                <x-lucide-message-square class="w-4 h-4 text-neutral-500 mr-2.5 mt-1 flex-shrink-0" />
                                <textarea
                                    rows="4"
                                    x-model="message"
                                    placeholder="Enter your message here..."
                                    class="w-full bg-transparent text-xs sm:text-sm font-body text-black placeholder-neutral-400 focus:outline-none resize-none leading-relaxed"
                                ></textarea>
                            </div>
                        </div>

                    </div>

                    <!-- ROW 4: Action Submit Button with Send Icon -->
                    <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-2">
                        <p class="font-body text-[11px] text-neutral-500 order-2 sm:order-1 text-center sm:text-left">
                            We respect your privacy. All information is kept strictly confidential.
                        </p>

                        <button
                            type="submit"
                            class="w-full sm:w-auto px-8 sm:px-10 py-3 sm:py-3.5 rounded-lg bg-[#09332E] hover:bg-brand text-white font-body font-semibold text-xs sm:text-sm tracking-wide transition-all inline-flex items-center justify-center gap-2 group cursor-pointer shadow-sm hover:shadow-md order-1 sm:order-2"
                        >
                            <span>Submit Form</span>
                            <x-lucide-send class="w-4 h-4 transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform" />
                        </button>
                    </div>

                </form>
            </div>

        </div>

    </div>

</section>

<!-- =====================================================================
     4. TESTIMONIALS COMPONENT (Same as Home Page)
====================================================================== -->
<x-testimonials />

<!-- =====================================================================
     5. FAQ COMPONENT (Same as Home Page)
====================================================================== -->
<x-faq />
@endsection
