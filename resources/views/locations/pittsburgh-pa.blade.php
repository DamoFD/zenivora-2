<x-app-layout>
    @section('title', 'Unlock Your Brand\'s Potential With Pittsburgh Website Designers')
    @section('description', 'Elevate your brand with Zenivora, the leading Pittsburgh Website Designers. Expertise in responsive design, SEO, and e-commerce solutions. Based in Pittsburgh, PA.')
    <x-hero
        subHeader="Pittsburgh Website Designers"/>
    <x-about />
    <x-technology :technologies="$technologies" />
    <x-img-right :performance="$performance" />
    <x-img-left :seo="$seo" />
    <x-img-right :performance="$security" />
    <x-pricing />
    <x-contact :locationData="$locationData" :phoneNumber="$phoneNumber"/>
    <canvas class="fixed z-[-1] h-full w-full bg-brand-gray top-0 left-0" id="canvas-2"></canvas>
    <script src="{{ asset('js/star-animation.js') }}"></script>
    <script src="{{ asset('js/no-connect-animation.js') }}"></script>
    <script src="{{ asset('js/marquee.js') }}"></script>
</x-app-layout>
