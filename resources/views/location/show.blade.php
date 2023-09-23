<x-app-layout>
    @section('title', $data['meta']->title)
    @section('description', $data['meta']->description)

    @section('schema')
        <script type="application/ld+json">
            {!! $data['schema']!!}
        </script>
    @endsection
    <x-hero
        :information="$data['meta']"
    />
    <x-about :information="$data['about']"/>
    <x-technology :technologies="$data['technologies']" />
    <x-img-right :information="$data['performance']" />
    <x-img-left :information="$data['seo']" />
    <x-img-right :information="$data['security']" />
    <x-pricing />
    <x-contact :locationData="$data['locationData']" :phoneNumber="$data['phoneNumber']"/>
    <x-faq :information="$data['faq']"/>
    <canvas class="fixed z-[-1] h-full w-full bg-brand-gray top-0 left-0" id="canvas"></canvas>
    <script src="{{ asset('js/star-animation.js') }}"></script>
    <script src="{{ asset('js/marquee.js') }}"></script>
</x-app-layout>
