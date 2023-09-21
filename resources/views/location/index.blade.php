<x-app-layout>
    @section('title', 'Local locations')
    @section('description', 'Contact a local Zenivora location near you!')
    <section class="min-h-screen flex justify-center items-center">
        @foreach ($locations as $location)
            <h1>{{ $location }}</h1>
        @endforeach
    </section>
    <canvas class="fixed z-[-1] h-full w-full bg-brand-gray top-0 left-0" id="canvas-2"></canvas>
    <script src="{{ asset('js/no-connect-animation.js') }}"></script>
    <script src="{{ asset('js/marquee.js') }}"></script>
</x-app-layout>
