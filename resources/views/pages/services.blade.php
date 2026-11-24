@extends('layouts.app')

@section('content')
<!-- 1. HERO PAGE BANNER -->
<x-page-banner
    title="Our Services"
    :breadcrumbs="[['label' => 'Services']]"
/>

<!-- 2. PROFESSIONAL TRAINING SECTION -->
<x-services-training />

<!-- 3. FOOD SAFETY CONSULTANCY SECTION -->
<x-services-consultancy />

<!-- 4. CERTIFICATION SUPPORT SECTION -->
<x-services-certification />

<!-- 5. HOW IT WORKS (3-STEP PROCESS) -->
<x-how-it-works />

<!-- 6. TESTIMONIALS SECTION -->
<x-testimonials />

<!-- 7. FREQUENTLY ASKED QUESTIONS SECTION -->
<x-faq />
@endsection
