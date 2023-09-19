<section class="w-full min-h-screen flex justify-center items-center flex-col mt-56 lg:mt-0" id="seo">
    <h2 class="text-white text-3xl font-mont w-11/12 lg:w-full font-extrabold text-center">{!! $seo->title !!}</h2>
    <div class="grid grid-cols-1 lg:grid-cols-2 w-11/12 lg:w-3/4 mt-10 gap-10">
        <div>
            <img srcset="
                 {{ asset("img/{$seo->imgMobile}") }} 700w,
                 {{ asset("img/{$seo->imgDesktop}") }} 1024w"
                 sizes="(max-width: 700px) 100vw, 1024px"
                 class="rounded-lg"
                 src="{{ asset("img/{$seo->imgDesktop}") }}"
                 alt="{{ $seo->imgAlt }}"
            >
        </div>
        <div>
            @foreach($seo->lists as $list)
                <div class="mb-4">
                    <h3 class="text-white text-lg lg:text-xl font-mont font-extrabold">{{ $list->title }}</h3>
                    <p class="text-white text-lg lg:text-xl font-mont font-extrabold mt-2">{{ $list->paragraph }}</p>
                    <ul class="list-disc list-inside flex flex-col space-y-2 mt-2">
                        @foreach($list->list as $item)
                            <li class="text-white font-roboto">{!! $item !!}</li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
            <p class="text-white text-lg lg:text-xl font-mont font-extrabold mt-10">{!! $seo->paragraph1 !!}</p>
            <p class="text-white text-lg lg:text-xl font-mont font-extrabold mt-2 mb-5">{!! $seo->paragraph2 !!}</p>
            <x-primary-link href="#contact">Get Quote</x-primary-link>
        </div>
    </div>
</section>
