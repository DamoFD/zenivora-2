<x-app-layout>
    @section('title', 'Local locations')
    @section('description', 'Contact a local Zenivora location near you!')
    <section class="min-h-screen flex justify-center items-center">
        <img class="w-1/3 mx-auto" src="{{ asset('img/earth.webp') }}" />
        @foreach ($data as $name => $location)
            <h1 class="z-10 text-white text-6xl">{{ $name }}</h1>
            <img src="{{ asset('img/' . $location->img) }}" />
        @endforeach
    </section>
    <canvas class="fixed z-[-1] h-full w-full bg-brand-gray top-0 left-0" id="canvas"></canvas>
    <script src="{{ asset('js/star-animation.js') }}"></script>
    <script src="{{ asset('js/marquee.js') }}"></script>
</x-app-layout>
