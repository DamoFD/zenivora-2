<x-app-layout>
    @section('title', $data['meta']->title)
    @section('description', $data['meta']->description)
    <x-hero
        :subHeader="$data['meta']->title"/>
    <x-about />
    <x-technology :technologies="$data['technologies']" />
    <x-img-right :information="$data['performance']" />
    <x-img-left :information="$data['seo']" />
    <x-img-right :information="$data['security']" />
    <x-pricing />
    <x-contact :locationData="$data['locationData']" :phoneNumber="$data['phoneNumber']"/>
    <canvas class="fixed z-[-1] h-full w-full bg-brand-gray top-0 left-0" id="canvas-2"></canvas>
    <script src="{{ asset('js/star-animation.js') }}"></script>
    <script src="{{ asset('js/no-connect-animation.js') }}"></script>
    <script src="{{ asset('js/marquee.js') }}"></script>
</x-app-layout>
