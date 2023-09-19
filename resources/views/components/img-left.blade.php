<section class="w-full min-h-screen flex justify-center items-center flex-col mt-56 lg:mt-0" id="seo">
    <h2 class="text-white text-3xl font-mont w-11/12 lg:w-full font-extrabold text-center">{!! $seoData->title !!}</h2>
    <div class="grid grid-cols-1 lg:grid-cols-2 w-11/12 lg:w-3/4 mt-10 gap-10">
        <div>
            <img srcset="
                 {{ asset("img/{$seoData->imgMobile}") }} 700w,
                 {{ asset("img/{$seoData->imgDesktop}") }} 1024w"
                 sizes="(max-width: 700px) 100vw, 1024px"
                 class="rounded-lg"
                 src="{{ asset("img/{$seoData->imgDesktop}") }}"
                 alt="{{ $seoData->imgAlt }}"
            >
        </div>
        <div>
            @foreach($seo as $data)
                <div class="mb-4">
                    <h3 class="text-white text-lg lg:text-xl font-mont font-extrabold">{{ $data->title }}</h3>
                    <p class="text-white text-lg lg:text-xl font-mont font-extrabold mt-2">{{ $data->paragraph }}</p>
                    <ul class="list-disc list-inside flex flex-col space-y-2 mt-2">
                        @foreach($data->list as $item)
                            <li class="text-white font-roboto">{!! $item !!}</li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
            <p class="text-white text-lg lg:text-xl font-mont font-extrabold mt-10">{!! $seoData->paragraph1 !!}</p>
            <p class="text-white text-lg lg:text-xl font-mont font-extrabold mt-2 mb-5">{!! $seoData->paragraph2 !!}</p>
            <x-primary-link href="#contact">Get Quote</x-primary-link>
        </div>
{{--            <h3 class="text-white text-lg lg:text-xl font-mont font-extrabold">8.5 billion searches take place on Google every day.</h3>--}}
{{--            <p class="text-white text-lg lg:text-xl font-mont font-extrabold">We know what your customers are searching.</p>--}}
{{--            <ul class="list-disc list-inside flex flex-col space-y-2 mt-2">--}}
{{--                <li class="text-white font-roboto">Keyword research with <a target="_blank" class="text-brand-primary underline" href="https://ahrefs.com">ahrefs</a></li>--}}
{{--                <li class="text-white font-roboto">Original copy with <a target="_blank" class="text-brand-primary underline" href="https://surferseo.com">Surfer SEO</a></li>--}}
{{--                <li class="text-white font-roboto">Modern backlink building techniques</li>--}}
{{--                <li class="text-white font-roboto">Accessibility and translations</li>--}}
{{--            </ul>--}}
{{--            <h3 class="text-white text-lg lg:text-xl font-mont font-extrabold mt-10">Outranking your competitors on Google is not out of reach!</h3>--}}
{{--            <ul class="list-disc list-inside flex flex-col space-y-2 mt-2">--}}
{{--                <li class="text-white font-roboto">SEO is a long term marketing strategy to gain organic traffic</li>--}}
{{--                <li class="text-white font-roboto">Backlinks are referrals from other sites telling search engines that your site is legit</li>--}}
{{--                <li class="text-white font-roboto">60% of users click the top 3 search results</li>--}}
{{--                <li class="text-white font-roboto">Google drives 8 times more traffic than all social media combined</li>--}}
{{--            </ul>--}}
{{--            <p class="text-white text-lg lg:text-xl font-mont font-extrabold mt-10">Here is our traffic for the DiscordBrowser after implementing our SEO techniques.</p>--}}
{{--            <p class="text-white text-lg lg:text-xl font-mont font-extrabold mt-2">Check your backlink profile with <a target="_blank" href="https://ahrefs.com/backlink-checker" class="text-brand-primary underline">ahrefs</a></p>--}}
        </div>
    </div>
</section>
