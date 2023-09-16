<div class="flex justify-center items-center p-1 rounded-lg bg-gradient-to-b from-brand-primary to-blue-400">
    <div class="w-full h-full gradient-border bg-brand-gray rounded-lg p-10 flex justify-center flex-col">
        <img class="w-12 h-12 mb-4 self-center" src='{{ asset("svg/{$img}") }}' alt="development" />
        <h3 class="text-white text-xl font-mont font-extrabold text-center">{{ $title }}</h3>
        <p class="text-white text-lg font-roboto mt-4">{{ $text1 }}</p>
        <p class="text-white text-lg font-roboto mt-4">{{ $text2 }}</p>
        <ul class="list-disc">
            <li class="text-white text-lg font-roboto mt-4">{!! $list1 !!}</li>
            <li class="text-white text-lg font-roboto mt-4">{!! $list2 !!}</li>
            <li class="text-white text-lg font-roboto mt-4">{!! $list3 !!}</li>
        </ul>
    </div>
</div>
