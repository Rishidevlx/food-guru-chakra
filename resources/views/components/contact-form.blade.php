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
    class="w-full"
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

    <!-- Form: 3 Balanced Rows with Pure Black Labels & Official 3D Flip x-button -->
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

        <!-- ROW 4: Action Submit Button using Official 3D Flip Button with Send Icon -->
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-2">
            <p class="font-body text-[11px] text-neutral-500 order-2 sm:order-1 text-center sm:text-left">
                We respect your privacy. All information is kept strictly confidential.
            </p>

            <div class="order-1 sm:order-2 w-full sm:w-auto">
                <x-button variant="filled" type="submit" class="w-full sm:w-auto !px-8 sm:!px-10 !py-2.5 sm:!py-3">
                    <x-slot:icon>
                        <x-lucide-send class="w-3.5 h-3.5 sm:w-4 sm:h-4 inline" />
                    </x-slot:icon>
                    Submit Form
                </x-button>
            </div>
        </div>

    </form>
</div>
