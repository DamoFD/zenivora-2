<x-app-layout>
    @section('title', 'Unlock Your Brand\'s Potential With Reno Website Designers')
    @section('description', 'Elevate your brand with Zenivora, the leading Reno Website Designers. Expertise in responsive design, SEO, and e-commerce solutions. Based in Reno, NV.')
    <x-hero
        subHeader="Reno Website Designers"/>
    <x-about />
    <x-technology :technologies="$technologies" />
    <x-img-right :information="$performance" />
    <x-img-left :information="$seo" />
    <x-img-right :information="$security" />
    <x-pricing />
    <x-contact :locationData="$locationData" :phoneNumber="$phoneNumber"/>
    <canvas class="fixed z-[-1] h-full w-full bg-brand-gray top-0 left-0" id="canvas-2"></canvas>
    <script src="{{ asset('js/star-animation.js') }}"></script>
    <script src="{{ asset('js/no-connect-animation.js') }}"></script>
    <script src="{{ asset('js/marquee.js') }}"></script>
</x-app-layout>
