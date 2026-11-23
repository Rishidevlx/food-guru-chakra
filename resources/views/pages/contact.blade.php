@extends('layouts.app')

@section('content')
<!-- =====================================================================
     PAGE BANNER (Matches Reference Style with Breadcrumb)
====================================================================== -->
<x-page-banner title="Contact Us" :breadcrumbs="[['label' => 'Contact Us']]" />

<!-- =====================================================================
     CONTACT HERO & 2-COLUMN SECTION (Left: Contact Info | Right: Form)
====================================================================== -->
<section class="bg-white pt-14 sm:pt-20 lg:pt-24 pb-16 sm:pb-24 relative">
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- 2-Column Responsive Grid (No vertical divider line) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-start">

            <!-- LEFT COLUMN: Contact Information Component -->
            <div class="lg:col-span-5 reveal-on-scroll">
                <x-contact-info />
            </div>

            <!-- RIGHT COLUMN: Contact Form Component -->
            <div class="lg:col-span-7 reveal-on-scroll delay-100">
                <x-contact-form />
            </div>

        </div>

    </div>

</section>

<!-- =====================================================================
     TESTIMONIALS COMPONENT (Same as Home Page)
====================================================================== -->
<x-testimonials />

<!-- =====================================================================
     FAQ COMPONENT (Same as Home Page)
====================================================================== -->
<x-faq />
@endsection
