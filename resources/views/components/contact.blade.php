<section class="w-full min-h-screen flex justify-center items-center flex-col mt-56 lg:mt-0" id="technology">
    <h2 class="text-white text-3xl font-mont font-extrabold text-center">Let's talk about <strong class="bg-gradient-to-r from-brand-primary to-blue-400 text-transparent bg-clip-text">your business</strong></h2>
    <div class="flex flex-col lg:flex-row w-11/12 lg:w-1/2 mt-10 items-center space-y-10 lg:space-y-0 lg:justify-between">
        <form class="flex flex-col border border-brand-primary rounded-lg p-10 w-full lg:w-1/2">
            <h3 class="text-white text-xl font-mont font-extrabold text-center">What Are Your Goals?</h3>
            <label class="text-white font-roboto mt-4 font-bold" for="email">Email*</label>
            <input class="border border-brand-primary bg-brand-gray placeholder:text-gray-300" id="email" placeholder="example@example.com" type="text">
            <label class="text-white font-roboto mt-4 font-bold" for="message">Message*</label>
            <textarea class="mb-10 border border-brand-primary bg-brand-gray placeholder:text-gray-300" id="message" placeholder="example@example.com" type="text"></textarea>
            <x-primary-button>Submit</x-primary-button>
        </form>
        <div class="flex flex-col space-y-6">
            <h3 class="text-white text-xl font-mont font-extrabold">Contact Information</h3>
            <a href="sms:(775) 230-7383" class="flex items-center">
                <img class="w-6 h-6" src="{{ asset('svg/sms.svg') }}" alt="sms" />
                <p class="text-white font-roboto ml-4 text-lg">Text: (775) 230-7383</p>
            </a>
            <a href="tel:(775) 230-7383" class="flex items-center">
                <img class="w-6 h-6" src="{{ asset('svg/phone.svg') }}" alt="phone" />
                <p class="text-white font-roboto ml-4 text-lg">Call: (775) 230-7383</p>
            </a>
            <a href="https://facebook.com/zenivora" class="flex items-center">
                <img class="w-6 h-6" src="{{ asset('svg/messenger.svg') }}" alt="facebook messenger" />
                <p class="text-white font-roboto ml-4 text-lg">Facebook Messenger</p>
            </a>
            <a href="email:contact@zenivora.com" class="flex items-center">
                <img class="w-6 h-6" src="{{ asset('svg/email.svg') }}" alt="email" />
                <p class="text-white font-roboto ml-4 text-lg">Email: contact@zenivora.com</p>
            </a>
            <a class="flex">
                <img class="w-6 h-6" src="{{ asset('svg/marker.svg') }}" alt="location" />
                <p class="text-white font-roboto ml-4 text-lg">Address:<br />2390 Tripp Dr #2<br />Reno, NV 89512</p>
            </a>
        </div>
    </div>
</section>
