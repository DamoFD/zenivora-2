<section class="w-full min-h-screen flex justify-center items-center flex-col mt-56 lg:mt-0" id="performance">
        <h2 class="text-white text-3xl font-mont font-extrabold text-center mt-10 w-11/12">{!! $information->title !!}</h2>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 w-11/12 lg:w-3/4 mt-10">
            <div class="order-2 lg:order-none">
                @foreach($information->lists as $list)
                    <div class="mb-4">
                        <h3 class="text-white text-lg lg:text-xl font-mont font-extrabold">{{ $list->title }}</h3>
                        <p class="text-white text-lg lg:text-xl font-mont font-extrabold mt-2">{{ $list->paragraph }}</p>
                        <ul class="list-disc pl-4 flex flex-col space-y-2 mt-2">
                            @foreach($list->list as $item)
                                <li class="text-white font-roboto">{!! $item !!}</li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
                <p class="text-white text-lg lg:text-xl font-mont font-extrabold mt-10">{!! $information->paragraph1 !!}</p>
                <p class="text-white text-lg lg:text-xl font-mont font-extrabold mt-2 mb-5">{!! $information->paragraph2 !!}</p>
                    <div class="flex justify-center md:justify-start w-full">
                        <x-primary-link href="#contact">Get Quote</x-primary-link>
                    </div>
            </div>
            <div class="order-1 lg:order-2 ">
                <img
                     class="order-1 lg:order-none rounded-lg w-full"
                     src="{{ asset("img/{$information->img}") }}"
                     alt="{{ $information->imgAlt }}"
                >
            </div>
        </div>
</section>
