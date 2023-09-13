@if(session('success'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show" class="z-10 fixed top-0 left-0 w-full bg-green-600 h-16 md:h-10 flex items-center p-4 text-white font-roboto">
        <p class="font-extrabold md:text-lg text-brand-white font-baloo">{{ session('success') }}</p>
    </div>
@endif
