<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

    <title>{{ $title ?? 'FOOD GURU CHAKRA™ | Integrated Food Industry Excellence' }}</title>

    <!-- ⭐ CENTRALIZED THEME & TYPOGRAPHY SYSTEM -->
    @include('theme.theme')

    <!-- Scripts and Styles via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-white text-[#09332E] font-body antialiased selection:bg-[#0C341C] selection:text-white">
    <div class="min-h-screen flex flex-col bg-white">
        <!-- Livewire Navbar (No emoji in file names) -->
        <livewire:navbar />

        <!-- Main Content -->
        <main class="flex-grow">
            {{ $slot ?? '' }}
            @yield('content')
        </main>

        <!-- Global Official Footer -->
        <x-footer />
    </div>

    @livewireScripts
</body>
</html>
