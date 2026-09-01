<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- SEO Meta --}}
    <title>@yield('title', 'Berkah Media Gemilang | Precision Media. Raw Energy.')</title>
    <meta name="description" content="@yield('meta_description', 'PT Berkah Media Gemilang - Perusahaan media terkemuka yang menyediakan Event Organizer, Media Buying, Event Production & Logistik, Digital & Social Media. Amplifying Brands. Igniting Events.')">
    <meta name="keywords" content="Berkah Media Gemilang, BMG, event organizer, media buying, event production, digital marketing, social media, Indonesia">
    <meta name="author" content="PT Berkah Media Gemilang">

    {{-- Open Graph --}}
    <meta property="og:title" content="@yield('title', 'Berkah Media Gemilang | Precision Media. Raw Energy.')">
    <meta property="og:description" content="@yield('meta_description', 'PT Berkah Media Gemilang - High-octane media buying and event production powerhouse.')">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="id_ID">

    {{-- Material Icons --}}
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">

    {{-- Vite Assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-bmg-surface text-bmg-on-surface overflow-x-hidden">
    {{-- Navigation --}}
    @include('components.navbar')

    {{-- Mobile Menu --}}
    @include('components.mobile-menu')

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('components.footer')

    @stack('scripts')
</body>
</html>
