<section class="w-full min-h-screen flex justify-center items-center flex-col mt-56 lg:mt-0" id="contact">
    <x-snackbar />
    <h2 class="text-white text-3xl font-mont font-extrabold text-center">Let's talk about <strong class="bg-gradient-to-r from-brand-primary to-blue-400 text-transparent bg-clip-text">your business</strong></h2>
    <div class="flex flex-col lg:flex-row w-11/12 lg:w-1/2 mt-10 items-center space-y-10 lg:space-y-0 lg:justify-between">
        <form action="{{ route('email') }}" method="post" class="flex flex-col border border-brand-primary rounded-lg p-10 w-full lg:w-1/2">
            @csrf
            <h3 class="text-white text-xl font-mont font-extrabold text-center">What Are Your Goals?</h3>
            <label class="text-white font-roboto mt-4 font-bold" for="name">Name*</label>
            <input value="{{ old('name') }}" class="text-white border font-roboto border-brand-primary bg-brand-gray placeholder:text-gray-300 focus:ring-0 focus:border-blue-400" id="name" placeholder="John Doe" type="text" name="name">
            @error('name')
                <p class="text-red-500 font-roboto">{{ $message }}</p>
            @enderror
            <label class="text-white font-roboto mt-4 font-bold" for="email">Email*</label>
            <input value="{{ old('email') }}" class="text-white border font-roboto border-brand-primary bg-brand-gray placeholder:text-gray-300 focus:ring-0 focus:border-blue-400" id="email" placeholder="example@example.com" type="text" name="email">
            @error('email')
                <p class="text-red-500 font-roboto">{{ $message }}</p>
            @enderror
            <label class="text-white font-roboto mt-4 font-bold" for="message">Message*</label>
            <textarea class="text-white border font-roboto border-brand-primary bg-brand-gray placeholder:text-gray-300 focus:ring-0 focus:border-blue-400" rows="5" id="message" placeholder="Enter your projects details..." type="text" name="message">{{ old('message') }}</textarea>
            @error('message')
                <p class="text-red-500 font-roboto">{{ $message }}</p>
            @enderror
            <x-primary-button class="mt-10">Submit</x-primary-button>
        </form>
        <div class="flex flex-col space-y-6">
            <h3 class="text-white text-xl font-mont font-extrabold">Contact Information</h3>
            <a target="_blank" href="sms:(775) 230-7383" class="flex items-center">
                <img class="w-6 h-6" src="{{ asset('svg/sms.svg') }}" alt="sms" />
                <p class="text-white font-roboto ml-4 text-lg">Text: {{ $phoneNumber->text }}</p>
            </a>
            <a target="_blank" href="tel:(775) 230-7383" class="flex items-center">
                <img class="w-6 h-6" src="{{ asset('svg/phone.svg') }}" alt="phone" />
                <p class="text-white font-roboto ml-4 text-lg">Call: {{ $phoneNumber->call }}</p>
            </a>
            <a target="_blank" href="https://www.facebook.com/Zenivora.Official" class="flex items-center">
                <img class="w-6 h-6" src="{{ asset('svg/messenger.svg') }}" alt="facebook messenger" />
                <p class="text-white font-roboto ml-4 text-lg">Facebook Messenger</p>
            </a>
            <a target="_blank" href="email:contact@zenivora.com" class="flex items-center">
                <img class="w-6 h-6" src="{{ asset('svg/email.svg') }}" alt="email" />
                <p class="text-white font-roboto ml-4 text-lg">Email: contact@zenivora.com</p>
            </a>
            <div class="flex">
                <img class="w-6 h-6" src="{{ asset('svg/marker.svg') }}" alt="location" />
                <p class="text-white font-roboto ml-4 text-lg">{!! $locationData->text !!}</p>
            </div>
        </div>
    </div>
    <div id="map" class="w-11/12 lg:w-1/2 h-72 rounded-lg mt-10"></div>

        <script>
            var map = L.map('map').setView([{{ $locationData->x }}, {{ $locationData->y }}], {{ $locationData->zoom }});

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap contributors'
            }).addTo(map);

            var marker = L.marker([{{ $locationData->x }}, {{ $locationData->y }}]).addTo(map);

            marker.bindPopup("{!! $locationData->text !!}").openPopup();
        </script>
</section>
