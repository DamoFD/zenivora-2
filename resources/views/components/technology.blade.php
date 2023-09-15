<section class="w-full min-h-screen flex justify-center items-center flex-col mt-56 lg:mt-0" id="technology">
    <h2 class="text-white text-center text-3xl font-mont font-extrabold">Harness the power of <strong class="bg-gradient-to-r from-brand-primary to-blue-400 text-transparent bg-clip-text">next-gen</strong> website technology</h2>
    <div class="grid w-11/12 lg:w-3/4 grid-cols-1 lg:grid-cols-3 gap-6 mt-10">
        @foreach ($technologies as $technology)
            <x-gradient-border-card :img="$technology->img" :title="$technology->title"></x-gradient-border-card>
        @endforeach
    <div class="grid w-11/12 lg:w-3/4 grid-cols-1 lg:grid-cols-3 gap-6 mt-10">
        <x-gradient-border-card
            img="marker.svg"
            title="Located in Reno, NV"
        >
            <p class="text-white text-lg font-roboto mt-4">You may have noticed how hard it is to find software engineers that are <em>actually</em> located in the Reno area.</p>
            <p class="text-white text-lg font-roboto mt-4">Zenivora is a <strong>local</strong> business here in Reno, NV!</p>
            <ul class="list-disc">
                <li class="text-white text-lg font-roboto mt-4">Access to strong local market research.</li>
                <li class="text-white text-lg font-roboto mt-4">Take advantage of high-tier connections in the Reno, NV area.</li>
                <li class="text-white text-lg font-roboto mt-4">Local Reno, NV business that contributes to massive codebases including the <a class="text-brand-primary underline" href="https://wordpress.org">Wordpress Core</a> and the <a class="text-brand-primary underline" href="https://phpmyadmin.net">PhpMyAdmin database interface</a>.</li>
            </ul>
        </x-gradient-border-card>
        <x-gradient-border-card
            img="seo.svg"
            title="Rank #1 on Google"
        >
            <p class="text-white text-lg font-roboto mt-4">Web agencies love to promise the world. Look at how many <em>low-quality, low-performant</em> sites there are in Reno, NV.</p>
            <p class="text-white text-lg font-roboto mt-4">Here at Zenivora, you are <strong>guaranteed</strong> a high-quality site that <em>will</em> rank.</p>
            <ul class="list-disc">
                <li class="text-white text-lg font-roboto mt-4">You will receive powerful keyword research with <a class="text-brand-primary underline" href="https://ahrefs.com">Ahrefs</a>.</li>
                <li class="text-white text-lg font-roboto mt-4">Gain the SERPs with keyword rich articles with <a class="text-brand-primary underline" href="https://surferseo.com">Surfer SEO</a>.</li>
                <li class="text-white text-lg font-roboto mt-4">Increase visibility with high authority and relevant backlinks</li>
            </ul>
        </x-gradient-border-card>
        <x-gradient-border-card
            img="development.svg"
            title="Industry Standard Development"
        >
            <p class="text-white text-lg font-roboto mt-4">The developers at Zenivora have experience working with <strong>thousands</strong> of other developers on huge codebases.</p>
            <p class="text-white text-lg font-roboto mt-4">Your software has the <em>ability</em> to run your business for you.</p>
            <ul class="list-disc">
                <li class="text-white text-lg font-roboto mt-4">Your software will manage your customers, employees, books, and inventory.</li>
                <li class="text-white text-lg font-roboto mt-4">Withstand huge influxes of requests and traffic with proper optimizations.</li>
                <li class="text-white text-lg font-roboto mt-4">Anything redundant and annoying within your business <strong>can</strong> be automated.</li>
            </ul>
        </x-gradient-border-card>
    </div>
</section>
