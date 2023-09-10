<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <section class="w-full h-screen justify-center items-center flex flex-col overflow-x-hidden" id="hero">
        <canvas class="fixed h-screen w-full bg-[#232323] top-0 left-0" id="canvas"></canvas>
        <h1 class="z-[2] font-extrabold text-5xl text-[#02ffd7] uppercase typing mb-10">Zenivora</h1>
        <h2 class="span loader uppercase zoom-out">
        <span>R</span>
        <span>e</span>
        <span>n</span>
        <span>o</span>
        <span>&nbsp;</span>
        <span>W</span>
        <span>e</span>
        <span>b</span>
        <span>s</span>
        <span>i</span>
        <span>t</span>
        <span>e</span>
        <span>&nbsp;</span>
        <span>D</span>
        <span>e</span>
        <span>s</span>
        <span>i</span>
        <span>g</span>
        <span>n</span>
        <span>e</span>
        <span>r</span>
        <span>s</span>
        </h2>
        </section>
<script src="{{ asset('js/star-animation.js') }}"></script>
    </body>
</html>
