<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <section class="w-full h-screen justify-center items-center flex flex-col overflow-x-hidden" id="hero">
        <canvas class="fixed h-screen w-full bg-[#232323] top-0 left-0" id="canvas"></canvas>
        <h1 class="z-[2] font-extrabold text-5xl text-[#02ffd7] uppercase typing mb-12">Zenivora</h1>
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
        <div class="z-[2] mt-16 flex space-x-24">
            <a class="border border-[#02ffd7] text-[#02ffd7] text-lg font-extrabold shadow-lg shadow-[#02ffd7] px-12 py-2" href="">Pricing</a>
            <a href="" class="border border-[#02ffd7] text-[#02ffd7] text-lg font-extrabold shadow-lg shadow-[#02ffd7] px-12 py-2">Contact</a>
        </div>
        </section>
<script src="{{ asset('js/star-animation.js') }}"></script>
    </body>
</html>
