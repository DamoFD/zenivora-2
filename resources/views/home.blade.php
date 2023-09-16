@php
$technology = [];

$obj1 = new stdClass();
$obj1->title = "Located in Reno, NV";
$obj1->img = "marker.svg";
$technology[] = $obj1;

$obj2 = new stdClass();
$obj2->title = "Rank #1 on Google";
$obj2->img = "seo.svg";
$technology[] = $obj2;

$obj3 = new stdClass();
$obj3->title = "Industry Standard Development";
$obj3->img = "development.svg";
$technology[] = $obj3;
@endphp
<x-app-layout>
    @section('title', 'Unlock Your Brand\'s Potential With Reno Website Designers')
    @section('description', 'Elevate your brand with Zenivora, the leading Reno Website Designers. Expertise in responsive design, SEO, and e-commerce solutions. Based in Reno, NV.')
    <x-hero
        subHeader="Reno Website Designers"/>
    <x-about />
    <x-technology />
    <x-performance />
    <x-seo />
    <x-security />
    <x-pricing />
    <x-contact />
    <script src="{{ asset('js/star-animation.js') }}"></script>
    <script src="{{ asset('js/no-connect-animation.js') }}"></script>
    <script src="{{ asset('js/marquee.js') }}"></script>
</x-app-layout>
