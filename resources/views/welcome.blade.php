<x-layout>
    @section('content')
        <div class="entry-fade z-10 absolute top-0 left-0 right-0 bottom-0 w-full opacity-100 z-50">
            <div class="absolute -top-full left-0 right-0 bottom-0 w-full h-full bg-gradient-to-b from-transparent to-black"></div>
            <div class="absolute top-0 left-0 right-0 bottom-0 w-full h-full bg-black"></div>
        </div>

        <x-entry />

        {{-- <div id="intro-gradient" class="h-64 w-full relative z-10"></div> --}}

        <x-intro />

        <div class="relative bg-black">
            <section class="z-10 relative w-full floating">
                <img loading="lazy" class="lazy w-full max-w-lg mx-auto" src="{{ asset('media/macbook-2.jpg') }}" alt="MacBook">
                <div class="w-full h-full bg-gradient-to-b from-black to-transparent top-full absolute left-0"></div>
            </section>

            <x-references />
            
            {{-- <x-cta-support /> --}}
            
            
            {{-- <x-cta-employers /> --}}
            
            <x-portrait />
            
            <section class="box-shadow bg-black relative -mb-24 sm:-my-12 sm:w-full sm:h-96 sm:overflow-hidden sm:rounded sm:mx-auto sm:flex sm:items-center max-w-screen-lg">
                <div class="absolute left-0 bottom-0 w-full h-[50%] bg-gradient-to-t from-black z-20"></div>
                <div class="absolute left-0 bottom-0 w-1/2 h-full bg-gradient-to-r from-black z-20"></div>
                <div class="absolute right-0 bottom-0 w-1/2 h-full bg-gradient-to-l from-black z-20"></div>
                <img loading="lazy" class="lazy parallax-3 sm:w-full md:mt-10" src="{{ asset('media/helloworld-lxfactory.jpg') }}" alt="Hello World - Lisboa - LX Factory">
            </section>

            <x-footer />
        </div>
    @stop
</x-layout>