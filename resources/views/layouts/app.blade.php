<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-title" content="Zenivora">
        <link rel="mask-icon" href="{{ asset('img/zenivora-logo.webp') }}" color="#02ffd7">
        <meta name="msapplication-TileColor" content="#02ffd7">
        <meta property="og:title" content="@yield('title', 'Zenivora')" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ url()->current() }}" />
        <meta property="og:description" content="@yield('description', 'Welcome to Zenivora')" />
        <meta name="theme-color" content="#02ffd7">
        <meta property="og:image" content="{{ asset('img/zenivora-logo.webp') }}">
        <meta property="og:image:alt" content="@yield('description', 'Welcome to Zenivora')" />
        <meta property="og:site_name" content="Zenivora" />
        <link rel="canonical" href="{{ url()->current() }}" />

        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="{{ url()->current() }}">
        <meta property="twitter:title" content="@yield('title', 'Zenivora')">
        <meta property="twitter:description" content="@yield('description', 'Welcome to Zenivora')">
        <meta property="twitter:image" content="{{ asset('img/zenivora-logo.webp') }}">
        <link as="image" href="{{ asset('img/zenivora-logo.webp') }}">

        <title>{{ config('app.name', 'Zenivora') }} | @yield('title', 'Zenivora')</title>

        <!-- Google tag (gtag.js) -->
        <script defer src="https://www.googletagmanager.com/gtag/js?id=G-5TPQGC9VFQ"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-5TPQGC9VFQ');
        </script>
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
        <meta name="description" content="@yield('description', 'Welcome to Zenivora!')" />
        <link rel="icon" href="{{ asset('img/zenivora-logo.webp') }}" type="image/webp">
        <link rel="shortcut icon" href="{{ asset('img/zenivora-logo.webp') }}">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    </head>
    <body class="antialiased">
        @include('layouts.navigation')
        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
        <x-footer />
    </body>
</html>
