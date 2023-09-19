<x-app-layout>
    @section('title', $data['meta']->title)
    @section('description', $data['meta']->description)
    @section('schema', '
        {
          "@context": "https://schema.org",
          "@type": "FAQPage",
          "mainEntity": [
          @foreach ($data['faq'] as $question)
            {
              "@type": "Question",
              "name": "{{ $question->title }}",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Some content 1.1. Some content 1.2. Some content 1.3. Some content 1.4."
              }
            },
            {
              "@type": "Question",
              "name": "FAQ Title 2",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Some content 2.1. Some content 2.2."
              }
            }
            //... Continue for other FAQs
          ]
        }
        ')
    <x-hero
        :subHeader="$data['meta']->title"/>
    <x-about />
    <x-technology :technologies="$data['technologies']" />
    <x-img-right :information="$data['performance']" />
    <x-img-left :information="$data['seo']" />
    <x-img-right :information="$data['security']" />
    <x-pricing />
    <x-faq :information="$data['faq']"/>
    <x-contact :locationData="$data['locationData']" :phoneNumber="$data['phoneNumber']"/>
    <canvas class="fixed z-[-1] h-full w-full bg-brand-gray top-0 left-0" id="canvas-2"></canvas>
    <script src="{{ asset('js/star-animation.js') }}"></script>
    <script src="{{ asset('js/no-connect-animation.js') }}"></script>
    <script src="{{ asset('js/marquee.js') }}"></script>
</x-app-layout>
