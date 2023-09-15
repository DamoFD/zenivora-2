@php
    $arr = str_split($subHeader);

    $letters = array_map(function($item) {
         return ($item === ' ') ? '&nbsp;' : $item;
    }, $arr);
@endphp

<section class="w-full min-h-screen justify-center items-center flex flex-col overflow-x-hidden" id="hero">
    <canvas class="absolute h-screen w-full bg-brand-gray top-0 left-0" id="canvas"></canvas>
    <h1 class="z-[2] font-extrabold text-4xl md:text-7xl lg:text-8xl font-mont text-brand-primary uppercase typing mb-2 md:mb-6 lg:mb-12">Zenivora</h1>
    <h2 class="span loader uppercase zoom-out font-roboto">
        @foreach ($letters as $letter)
            <span>{!! $letter !!}</span>
        @endforeach
    </h2>
    <div class="z-[2] mt-16 flex space-x-4 md:space-x-24">
        <x-primary-link href="#pricing">Pricing</x-primary-link>
        <x-primary-link class="shake" href="#contact">Contact</x-primary-link>
    </div>
</section>
