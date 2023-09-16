<x-app-layout>
    @section('title', 'Unlock Your Brand\'s Potential With Reno Website Designers')
    @section('description', 'Elevate your brand with Zenivora, the leading Reno Website Designers. Expertise in responsive design, SEO, and e-commerce solutions. Based in Reno, NV.')
    <x-hero
        subHeader="Reno Website Designers"/>
    <x-about />
    <x-technology :technologies="$technologies" />
    <x-performance />
    <x-seo />
    <x-security />
    <x-pricing />
    <x-contact :locationData="$locationData" :phoneNumber="$phoneNumber"/>
    <script src="{{ asset('js/star-animation.js') }}"></script>
    <script src="{{ asset('js/no-connect-animation.js') }}"></script>
    <script src="{{ asset('js/marquee.js') }}"></script>
</x-app-layout>
