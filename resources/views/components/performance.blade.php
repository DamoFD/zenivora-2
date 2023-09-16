<section class="w-full min-h-screen flex justify-center items-center flex-col mt-56 lg:mt-0" id="performance">
        <h2 class="text-white text-3xl font-mont font-extrabold text-center">Industry leading <strong class="bg-gradient-to-r from-brand-primary to-blue-400 text-transparent bg-clip-text">performance</strong></h2>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 w-11/12 lg:w-3/4 mt-10">
            <div>
                <h3 class="text-white text-lg lg:text-xl font-mont font-extrabold">Do you choose between beautiful site, or good performance?</h3>
                <p class="text-white text-lg lg:text-xl font-mont font-extrabold">You can have both!</p>
                <ul class="list-disc list-inside flex flex-col space-y-2 mt-2">
                    <li class="text-white font-roboto">Speed benchmarks for functions</li>
                    <li class="text-white font-roboto">Proper memory management</li>
                    <li class="text-white font-roboto">Modern caching techniques</li>
                    <li class="text-white font-roboto">Lossless image compression</li>
                </ul>
                <h3 class="text-white text-lg lg:text-xl font-mont font-extrabold mt-10">Instant load speeds are not out of reach! At Zenivora, performance is a priority.</h3>
                <ul class="list-disc list-inside flex flex-col space-y-2 mt-2">
                    <li class="text-white font-roboto">Loading is money. It literally costs money to transfer data.</li>
                    <li class="text-white font-roboto"><strong>90%</strong> of customers will leave a site that takes longer than a few seconds to load.</li>
                    <li class="text-white font-roboto">Employees have to wait for software to load. That time adds up quickly.</li>
                    <li class="text-white font-roboto">Even our massive sites filled to the brim with functionality load instantly.</li>
                </ul>
                <p class="text-white text-lg lg:text-xl font-mont font-extrabold mt-10">Here is our benchmark for the <a target="_blank" class="text-brand-primary underline" href="https://discordbrowser.com">DiscordBrowser.</a></p>
                <p class="text-white text-lg lg:text-xl font-mont font-extrabold mt-2 mb-5">Check the benchmark for your site at <a target="_blank" class="text-brand-primary underline" href="https://pagespeed.web.dev/">Google's Pagespeed Insights.</a></p>
                <x-primary-link href="#contact">Get Quote</x-primary-link>
            </div>
            <div>
                <img
                    class="rounded-lg"
                    sizes="(max-width: 700px) 700px, 1024px"
                    srcset="{{ asset('img/website-pagespeed-score-mobile.webp') }} 700w,
                            {{ asset('img/website-pagespeed-score-desktop.webp') }} 1024w"
                    src="{{ asset('img/website-pagespeed-score-desktop.webp') }}"
                    alt="discordbrwser pagespeed insights"
                    loading="lazy"
                >
            </div>
        </div>
</section>
