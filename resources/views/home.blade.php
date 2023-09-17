<x-app-layout>
    @section('title', 'Unlock Your Brand\'s Potential With Zenivora Website Design and Digital Marketing')
    @section('description', 'Elevate your brand with Zenivora, the top Website Designers. Expertise in responsive design, SEO, and e-commerce solutions. Based in Reno, NV.')
    <x-hero
        subHeader="Website Design and Marketing"/>
    <x-about />
    <x-technology :technologies="$technologies" />
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
    <section class="w-full min-h-screen flex justify-center items-center flex-col mt-56 lg:mt-0" id="seo">
            <h2 class="text-white text-3xl font-mont w-11/12 lg:w-full font-extrabold text-center">Proven <strong class="bg-gradient-to-r from-brand-primary to-blue-400 text-transparent bg-clip-text">competitive SEO</strong> practices</h2>
            <div class="grid grid-cols-1 lg:grid-cols-2 w-11/12 lg:w-3/4 mt-10 gap-10">
                <div>
                    <img
                        class="rounded-lg"
                        sizes="(max-width: 700px) 700px, 1024px"
                        srcset="{{ asset('img/discordbrowser-stats-mobile.webp') }} 700w,
                                {{ asset('img/discordbrowser-stats-desktop.webp') }} 1024w"
                        src="{{ asset('img/discordbrowser-stats-desktop.webp') }}"
                        alt="discordbrowser stats"
                        loading="lazy"
                    >
                </div>
                <div>
                    <h3 class="text-white text-lg lg:text-xl font-mont font-extrabold">8.5 billion searches take place on Google every day.</h3>
                    <p class="text-white text-lg lg:text-xl font-mont font-extrabold">We know what your customers are searching.</p>
                    <ul class="list-disc list-inside flex flex-col space-y-2 mt-2">
                        <li class="text-white font-roboto">Keyword research with <a target="_blank" class="text-brand-primary underline" href="https://ahrefs.com">ahrefs</a></li>
                        <li class="text-white font-roboto">Original copy with <a target="_blank" class="text-brand-primary underline" href="https://surferseo.com">Surfer SEO</a></li>
                        <li class="text-white font-roboto">Modern backlink building techniques</li>
                        <li class="text-white font-roboto">Accessibility and translations</li>
                    </ul>
                    <h3 class="text-white text-lg lg:text-xl font-mont font-extrabold mt-10">Outranking your competitors on Google is not out of reach!</h3>
                    <ul class="list-disc list-inside flex flex-col space-y-2 mt-2">
                        <li class="text-white font-roboto">SEO is a long term marketing strategy to gain organic traffic</li>
                        <li class="text-white font-roboto">Backlinks are referrals from other sites telling search engines that your site is legit</li>
                        <li class="text-white font-roboto">60% of users click the top 3 search results</li>
                        <li class="text-white font-roboto">Google drives 8 times more traffic than all social media combined</li>
                    </ul>
                    <p class="text-white text-lg lg:text-xl font-mont font-extrabold mt-10">Here is our traffic for the DiscordBrowser after implementing our SEO techniques.</p>
                    <p class="text-white text-lg lg:text-xl font-mont font-extrabold mt-2">Check your backlink profile with <a target="_blank" href="https://ahrefs.com/backlink-checker" class="text-brand-primary underline">ahrefs</a></p>
                </div>
            </div>
    </section>
    <section class="w-full min-h-screen flex justify-center items-center flex-col mt-56 lg:mt-0" id="security">
            <h2 class="text-white text-3xl w-11/12 lg:w-full font-mont font-extrabold text-center">Enterprise-class <strong class="bg-gradient-to-r from-brand-primary to-blue-400 text-transparent bg-clip-text">security</strong></h2>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 w-11/12 lg:w-3/4 mt-10">
                <div>
                    <h3 class="text-white text-lg lg:text-xl font-mont font-extrabold">Why does security matter?</h3>
                    <p class="text-white text-lg lg:text-xl font-mont font-extrabold">Security is important from a legal and moral standpoint.</p>
                    <ul class="list-disc list-inside flex flex-col space-y-2 mt-2">
                        <li class="text-white font-roboto">Penetration Testing</li>
                        <li class="text-white font-roboto">Brute Force Attempts</li>
                        <li class="text-white font-roboto">SQL injection</li>
                        <li class="text-white font-roboto">Cross-site scripting</li>
                    </ul>
                    <h3 class="text-white text-lg lg:text-xl font-mont font-extrabold mt-10">Security is a priority at your Reno Zenivora!</h3>
                    <ul class="list-disc list-inside flex flex-col space-y-2 mt-2">
                        <li class="text-white font-roboto">Cyber crime is expected to grow 15% every year</li>
                        <li class="text-white font-roboto">Wordpress is the most hacked CMS (mainly due to DIY)</li>
                        <li class="text-white font-roboto">There are 2,200 successful cyberattacks per day</li>
                        <li class="text-white font-roboto">95% of cyberattacks are due to human error</li>
                    </ul>
                    <p class="text-white text-lg lg:text-xl font-mont font-extrabold my-10">Here is a visual representation of <a target="_blank" class="text-brand-primary underline" href="https://threatmap.checkpoint.com/">real-time cyberattacks</a></p>
                    <x-primary-link href="#contact">Contact</x-primary-link>
                </div>
                <div>
                    <img
                        class="rounded-lg"
                        sizes="(max-width: 700px) 700px, 1024px"
                        srcset="{{ asset('img/arch-rice-mobile.webp') }} 700w,
                                {{ asset('img/arch-rice-desktop.webp') }} 1024w"
                        src="{{ asset('img/arch-rice-desktop.webp') }}"
                        alt="Arch Linux Security Practices"
                        loading="lazy"
                    >
                </div>
            </div>
    </section>
    <x-pricing />
    <x-contact :locationData="$locationData" :phoneNumber="$phoneNumber"/>
    <canvas class="fixed z-[-1] h-full w-full bg-brand-gray top-0 left-0" id="canvas-2"></canvas>
    <script src="{{ asset('js/star-animation.js') }}"></script>
    <script src="{{ asset('js/no-connect-animation.js') }}"></script>
    <script src="{{ asset('js/marquee.js') }}"></script>
</x-app-layout>
