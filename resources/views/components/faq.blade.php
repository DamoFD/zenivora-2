<section class="w-full min-h-screen flex flex-col justify-center items-center text-white" id="faq">
    <h2 class="text-white text-3xl font-mont font-extrabold text-center">{!! $information->title !!}</h2>
    <section class="flex flex-col md:w-3/4 font-mont mt-10 px-6 md:px-0">
        @foreach($information->lists as $list)
        <div>
            <h3 class="text-xl font-bold my-2"> {!! $list->title !!}</h3>
            @foreach($list->paragraph as $item)
            <p class="mb-2">{!! $item !!}</p>
            @endforeach
        </div>
        @endforeach
    </section>
</section>
