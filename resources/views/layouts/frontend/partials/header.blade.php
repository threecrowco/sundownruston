<header class="hidden text-white bg-gray-200 lg:block">
    <div class="container flex justify-between w-full mx-auto">
        <div class="flex items-center justify-center flex-none w-1/3 px-8 py-8 text-white bg-black">
            @include('layouts.frontend.partials.logo')
        </div>
        <div class="flex flex-col flex-grow">
            <div class="flex items-center justify-between px-8 py-2 text-xs font-medium tracking-widest text-white uppercase bg-brand-gold">
                <span> {{ isOpen() }} </span>
                <span>615-573-6833</span>
            </div>
            <div class="flex items-center justify-end flex-grow px-8 text-sm font-medium text-black uppercase bg-white tracking-widest-plus">
                <a class="ml-0" href="/">Home</a>
                <a class="ml-12" href="/about">About</a>
                <a class="ml-12" href="/menu">Menu</a>
                <a class="ml-12" href="/events">Events</a>
                <a class="ml-12" href="/contact">Contact</a>
            </div>
        </div>
    </div>
</header>
<header class="flex flex-col items-center justify-between lg:hidden">
    <div class="flex items-center justify-center w-full px-8 py-1 text-xs font-medium tracking-widest text-white uppercase bg-brand-gold">
                <span>{{ isOpen() }}</span>
            </div>
    <div class="flex items-center justify-center w-full px-8 py-8 text-white bg-black">
        @include('layouts.frontend.partials.logo')
    </div>
    <div class="flex items-center justify-center w-full py-3 border-b border-gray-300">
        <button id="mobilemenu" class="focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 text-gray-300 fill-current" viewBox="0 0 20 20">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M3 5C3 4.44772 3.44772 4 4 4H16C16.5523 4 17 4.44772 17 5C17 5.55228 16.5523 6 16 6H4C3.44772 6 3 5.55228 3 5Z"></path>
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M3 10C3 9.44772 3.44772 9 4 9H16C16.5523 9 17 9.44772 17 10C17 10.5523 16.5523 11 16 11H4C3.44772 11 3 10.5523 3 10Z"></path>
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M3 15C3 14.4477 3.44772 14 4 14H16C16.5523 14 17 14.4477 17 15C17 15.5523 16.5523 16 16 16H4C3.44772 16 3 15.5523 3 15Z"></path>
            </svg>
        </button>
    </div>
    <div id="mobiledropdown" class="hidden w-full border-b border-gray-300">
        <a class="block px-6 py-4 font-medium tracking-wider text-gray-900 uppercase hover:bg-brand-gold hover:text-white" href="/">Home</a>
        <a class="block px-6 py-4 font-medium tracking-wider text-gray-900 uppercase border-t border-gray-300 hover:bg-brand-gold hover:text-white" href="/about">About</a>
        <a class="block px-6 py-4 font-medium tracking-wider text-gray-900 uppercase border-t border-gray-300 hover:bg-brand-gold hover:text-white" href="/menu">Menu</a>
        <a class="block px-6 py-4 font-medium tracking-wider text-gray-900 uppercase border-t border-gray-300 hover:bg-brand-gold hover:text-white" href="/events">Events</a>
        <a class="block px-6 py-4 font-medium tracking-wider text-gray-900 uppercase border-t border-gray-300 hover:bg-brand-gold hover:text-white" href="/contact">Contact</a>
        <div class="flex items-center justify-between text-sm font-medium tracking-wider text-gray-900 uppercase border-t border-gray-300">
            <div class="flex items-center justify-center flex-1 py-4 hover:bg-brand-gold hover:text-white">Facebook</div>
            <div class="flex items-center justify-center flex-1 py-4 hover:bg-brand-gold hover:text-white">Twitter</div>
            <div class="flex items-center justify-center flex-1 py-4 hover:bg-brand-gold hover:text-white">Instagram</div>
        </div>
    </div>
</header>
