@extends('layouts.home')

@section('title', 'Home')

@section('content')

    <div class="bg-gradient-to-b from-base-300 to-base-200">
        <header class="sticky top-0" id="nav">
            <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
                <div class="flex lg:flex-1">
                    <a href="#" class="-m-1.5 p-1.5">
                        {{--                    <span class="sr-only">Your Company</span>--}}
                        {{--                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="">--}}
                        <span class="text-xl font-bold">TheECGaming</span>
                    </a>
                </div>
                <div class="flex lg:hidden">
                    <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-400">
                        <span class="sr-only">Open main menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
                <div class="hidden lg:flex lg:gap-x-12">
                    <a href="#" class="text-sm font-semibold leading-6 text-base-content">Portfolios</a>
                    <a href="#" class="text-sm font-semibold leading-6 text-base-content">Blog</a>
                    <a href="#" class="text-sm font-semibold leading-6 text-base-content">About</a>
                    <a href="#" class="text-sm font-semibold leading-6 text-base-content">Contact</a>
                </div>
                <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                    <a href="#" class="text-sm font-semibold leading-6 text-base-content">Client area <span aria-hidden="true">&rarr;</span></a>
                </div>
            </nav>
            <!-- Mobile menu, show/hide based on menu open state. -->
            {{--        <div class="lg:hidden" role="dialog" aria-modal="true">--}}
            {{--            <!-- Background backdrop, show/hide based on slide-over state. -->--}}
            {{--            <div class="fixed inset-0 z-10"></div>--}}
            {{--            <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-gray-900 px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-white/10">--}}
            {{--                <div class="flex items-center justify-between">--}}
            {{--                    <a href="#" class="-m-1.5 p-1.5">--}}
            {{--                        <span class="sr-only">Your Company</span>--}}
            {{--                        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="">--}}
            {{--                    </a>--}}
            {{--                    <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-400">--}}
            {{--                        <span class="sr-only">Close menu</span>--}}
            {{--                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">--}}
            {{--                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />--}}
            {{--                        </svg>--}}
            {{--                    </button>--}}
            {{--                </div>--}}
            {{--                <div class="mt-6 flow-root">--}}
            {{--                    <div class="-my-6 divide-y divide-gray-500/25">--}}
            {{--                        <div class="space-y-2 py-6">--}}
            {{--                            <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-base-content hover:bg-gray-800">Product</a>--}}
            {{--                            <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-base-content hover:bg-gray-800">Features</a>--}}
            {{--                            <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-base-content hover:bg-gray-800">Marketplace</a>--}}
            {{--                            <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-base-content hover:bg-gray-800">Company</a>--}}
            {{--                        </div>--}}
            {{--                        <div class="py-6">--}}
            {{--                            <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-base-content hover:bg-gray-800">Log in</a>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            {{--        </div>--}}
        </header>
        <div class="relative isolate px-6 pt-14 lg:px-8" id="hero">
            <div class="py-12 lg:py-56">
                <div class="text-center">
                    <h1 class="flex flex-col gap-4 justify-center">
                    <span class="text-5xl lg:text-6xl xl:text-8xl font-semibold tracking-wide text-center">
                    I Am
                    </span>

                        <span class="text-5xl lg:text-8xl xl:text-9xl font-bold tracking-wide text-center">
                        TheECGaming
                    </span>
                    </h1>
                </div>
            </div>
            <div class="absolute bottom-8 left-8 right-8 max-w-7xl mx-auto">
                <div class="flex gap-2">
                    <div class="flex-1">
                        <div class="sm:px-9">
                            <ul class="flex gap-4">
                                <li>
                                    <a href="#!" class="link hover:text-base-content/80">About</a>
                                </li>
                                <li>|</li>
                                <li>
                                    <a href="#!" class="link hover:text-base-content/80">Contact</a>
                                </li>
                                <li>|</li>
                                <li>
                                    <a href="{{ route('links') }}" class="link hover:text-base-content/80">Links</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="hidden sm:block">
                        <span>
                            Copyright &copy; {{ date('Y') }} TheECGaming
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>


<script>
    // On load
window.addEventListener('load', function() {
        // Get the header
        var header = document.getElementById("nav");

        // Get the offset position of the navbar
        var sticky = header.offsetTop;

        // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
        function stickyHeader() {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        }

        // When the user scrolls the page, execute stickyHeader
        window.onscroll = function() {stickyHeader()};


        updateHeroSize();


    })

    //  On resize
    window.addEventListener('resize', function() {
        updateHeroSize();
    })

    function updateHeroSize(){
        let hero = document.getElementById("hero");
        let header = document.getElementById("nav");
        let headerHeight = header.offsetHeight;

        hero.style.height = "calc(100vh - " + headerHeight + "px)";
    }
</script>

@endsection
