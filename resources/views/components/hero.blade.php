@php
    $arr = str_split($information->title);

    $lettersDesktop = array_map(function($item) {
         return ($item === ' ') ? '&nbsp;' : $item;
    }, $arr);

    $spaceCount = 0;
    $lettersMobile = array_map(function($item) use (&$spaceCount) {
        if ($item === ' ') {
            $spaceCount++;
            if ($spaceCount === 2) {
                return '<br />';
            } else {
                return '&nbsp;';
            }
        }
         return $item;
    }, $arr);
@endphp

<section class="w-full min-h-screen justify-center items-center flex flex-col overflow-x-hidden" id="hero">
    @if (request()->routeIs('home'))
        {{--<img src="{{ asset('img/' . $img) }}" class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 h-3/4" />--}}
    @else
        <picture class="absolute w-full object-cover h-3/4 bottom-0 left-0">
            <source srcset="{{ asset('img/' . $information->img) }}" media="(min-width: 600px)" />
            <img src="{{ asset('img/' . $information->img_mobile) }}" alt="{{ $information->title }}" />
        </picture>
    @endif
    <h1 class="z-[2] w-full font-extrabold text-4xl md:text-7xl lg:text-8xl font-mont text-brand-primary uppercase typing mb-2 md:mb-6 lg:mb-12">Zenivora</h1>
    <h2 class="hidden lg:block span loader uppercase zoom-out font-roboto">
        @foreach ($lettersDesktop as $letter)
            <span>{!! $letter !!}</span>
        @endforeach
    </h2>
    <h2 class="block lg:hidden span loader uppercase zoom-out font-roboto text-center">
        @foreach ($lettersMobile as $letter)
            <span>{!! $letter !!}</span>
        @endforeach
    </h2>
    <div class="z-[2] mt-14 flex space-x-4 md:space-x-24 mb-36">
        <x-primary-link href="#pricing">Pricing</x-primary-link>
        <x-primary-link class="shake" href="#contact">Contact</x-primary-link>
    </div>
</section>
