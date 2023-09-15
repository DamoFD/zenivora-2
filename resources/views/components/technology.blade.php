<section class="w-full min-h-screen flex justify-center items-center flex-col mt-56 lg:mt-0" id="technology">
    <h2 class="text-white text-center text-3xl font-mont font-extrabold">Harness the power of <strong class="bg-gradient-to-r from-brand-primary to-blue-400 text-transparent bg-clip-text">next-gen</strong> website technology</h2>
    <div class="grid w-11/12 lg:w-3/4 grid-cols-1 lg:grid-cols-3 gap-6 mt-10">
        @foreach ($technologies as $technology)
            <x-gradient-border-card
                :title="$technology->title"
                :img="$technology->img"
                :text1="$technology->text1"
                :text2="$technology->text2"
                :list1="$technology->list1"
                :list2="$technology->list2"
                :list3="$technology->list3"
            />
        @endforeach
</section>
