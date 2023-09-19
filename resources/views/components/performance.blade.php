<section class="w-full min-h-screen flex justify-center items-center flex-col mt-56 lg:mt-0" id="performance">
        <h2 class="text-white text-3xl font-mont font-extrabold text-center mt-10">{!! $performanceData->title !!}</h2>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 w-11/12 lg:w-3/4 mt-10">
            <div>
                @foreach($performance as $data)
                    <div class="mb-4">
                        <h3 class="text-white text-lg lg:text-xl font-mont font-extrabold">{{ $data->title }}</h3>
                        <p class="text-white text-lg lg:text-xl font-mont font-extrabold mt-2">{{ $data->paragraph }}</p>
                        <ul class="list-disc list-inside flex flex-col space-y-2 mt-2">
                            @foreach($data->list as $item)
                                <li class="text-white font-roboto">{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
                <p class="text-white text-lg lg:text-xl font-mont font-extrabold mt-10">{!! $performanceData->paragraph1 !!}</p>
                <p class="text-white text-lg lg:text-xl font-mont font-extrabold mt-2 mb-5">{!! $performanceData->paragraph2 !!}</p>
                <x-primary-link href="#contact">Get Quote</x-primary-link>
            </div>

            <div>
                <img srcset="
                    {{ asset("img/{$performanceData->imgMobile}") }} 700w,
                    {{ asset("img/{$performanceData->imgDesktop}") }} 1024w"
                     sizes="(max-width: 700px) 100vw, 1024px"
                     src="{{ asset("img/{$performanceData->imgDesktop}") }}"
                     alt="{{ $performanceData->imgAlt }}">

            </div>
        </div>
</section>
