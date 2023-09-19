<x-app-layout>
    @section('title', 'Unlock Your Brand\'s Potential With Pittsburgh0 Website Designers')
    @section('description', 'Elevate your brand with Zenivora, the leading Pittsburgh Website Designers. Expertise in responsive design, SEO, and e-commerce solutions. Based in Pittsburgh, PA.')
    <x-hero
        subHeader="Pittsburgh Website Designers"/>
    <x-about />
    <x-technology :technologies="$technologies" />
    <x-performance :performance="$performance" :performanceData="$performanceData"/>
    <x-seo />
    <x-security />
    <x-pricing />
    <x-contact :locationData="$locationData" :phoneNumber="$phoneNumber"/>
    <script src="{{ asset('js/star-animation.js') }}"></script>
    <script src="{{ asset('js/no-connect-animation.js') }}"></script>
    <script src="{{ asset('js/marquee.js') }}"></script>
</x-app-layout>
