<x-layout>
    @section('content')
        <div class="entry-fade fixed top-0 left-0 right-0 bottom-0 w-full opacity-100 z-50">
            <div class="absolute -top-full left-0 right-0 bottom-0 w-full h-full bg-gradient-to-b from-transparent to-black"></div>
            <div class="absolute top-0 left-0 right-0 bottom-0 w-full h-full bg-black"></div>
        </div>

        <x-blur />

        <x-entry />

        {{-- <div id="intro-gradient" class="h-64 w-full relative z-10"></div> --}}

        <div class="relative">
            <x-intro />

            <x-references />

            <section class="full-image z-10 relative -my-20 sm:-my-64">
                <img class="parallax" src="{{ asset('media/hello-world.png') }}" alt="Hello World - Lisboa">
            </section>

            <x-cta-support />

            <section class="full-image z-10 relative max-w-lg mx-auto">
                <img class="floating" src="{{ asset('media/macbook-2.png') }}" alt="MacBook">
            </section>

            <x-cta-employers />

            <x-portrait />

            <x-nl-subscribe />

            <x-footer />
        </div>

        {{-- <div x-data="{ open: false }">
            <button @click="open = true">Open Dropdown</button>

            <ul
                x-show="open"
                @click.away="open = false"
            >
                Dropdown Body
            </ul>
        </div> --}}
    @stop
</x-layout>