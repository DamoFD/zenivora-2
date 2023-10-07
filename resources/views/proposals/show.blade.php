<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('img/zenivora-logo.webp') }}" type="image/webp">
    <link rel="shortcut icon" href="{{ asset('img/zenivora-logo.webp') }}">
    <title>Proposal</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="relative">

    {{-- Header --}}
    <header class="absolute top-0 left-0 w-full">
        <nav class="w-3/4 mx-auto flex justify-between items-center mt-4">
            <x-application-logo />
            <ul class="flex space-x-10 text-white">
                <li>
                    <a>Dashboard</a>
                </li>
                <li>
                    <a>About</a>
                </li>
                <li>
                    <a>Pricing</a>
                </li>
                <li>
                    <a>Download PDF</a>
                </li>
            </ul>
            <form>
                <button class="px-4 py-2 bg-gradient-to-b from-[#0D88CE] to-[#1F68CF] rounded-md text-white font-bold">Accept Proposal</button>
            </form>
        </nav>
    </header>
    {{-- !Header --}}

    {{-- Hero --}}
    <section class="relative w-full min-h-screen flex items-center justify-center">
        <div class="w-3/4">
            <div class="flex items-center space-x-4">
                <p class="uppercase text-xl text-[#0D88CE] font-bold">The Award Winning</p>
                <div class="bg-[#0D88CE] h-[2px] w-36"></div>
            </div>
            <h1 class="w-1/2 text-white text-7xl font-extrabold">Top <strong class="bg-clip-text text-transparent bg-gradient-to-b from-[#0D88CE] to-[#1F68CF]">Software</strong> Engineers</h1>
            <p class="w-1/3 text-lg text-white border-l-2 border-[#0D88CE] pl-5 py-2 mt-4">Trusted advisors, and powerful advocates focused on increasing your digital real estate.</p>
        </div>
        <img src="{{ asset('img/beach-hero.jpg') }}" class="w-full h-full absolute top-0 left-0 object-cover z-[-1]" />
        <div class="bg-[rgba(0,0,0,0.65)] w-full h-full absolute top-0 left-0 z-[-1]"></div>
    </section>
</body>
</html>
