<section id="entry" class="w-full">
    <div class="fixed top-0 bottom-0 w-full flex gap-8 justify-start">
        <div class="entry-bg top-0 right-0 bg-right-top bg-cover sm:bg-contain bg-no-repeat absolute w-full max-w-screen-xs h-full xs:after:bg-gradient-to-r xs:after:from-black xs:after:to-transparent"></div>

        <div class="flex flex-col gap-24 mx-auto text-white md:items-center w-full h-full z-10 max-w-screen-md md:text-center">
            <div class="px-6 pt-6 pb-12 bg-gradient-to-b from-black sm:bg-none">
                {{-- <x-lang-switch /> --}}
                <x-logo />
            </div>

            <div class="flex flex-col gap-12 px-6">
                {{-- <p class="text-small max-w-screen-sm md:m-auto xs:text-medium md:text-medium">{{ __('Ich entwickle') }}</p> --}}
                
                <h1 class="bg-clip-text neon neon-wide bg-gradient-to-tr from-cyan-500 via-indigo-500 to-pink-500 text-4xl leading-snug md:text-6xl">
                    <span class="block bg-clip-text text-transparent md:leading-snug">@lang('Progressive Web-Lösungen für Agenturen & Unternehmen.')</span>
                    {{-- <span class="block bg-clip-text text-transparent">Ich unterstütze Menschen und Unternehmen bei der Entwicklung von Lösungen für Web und Mobile.</span> --}}
                </h1>
            </div>

            <div id="swipe-down" class="flex justify-between items-center pb-6 px-6 md:flex-col md:gap-10">
                <div class="opacity-75 md:order-2">
                    <span class="text-micro font-heading tracking-widest animate-swipe-y opacity-0 transform translate-y-full inline-block">@lang('Swipe')</span>
                </div>
        
                <x-contact-actions class="md:order-1"/>
            </div>
        </div>
    </div>
            {{-- <div class="grid grid-cols-2 gap-2">
                <x-button route="home" class="flex-1 bg-white">Kontaktieren</x-button>
                <x-button route="home" class="flex-1 bg-white">CV holen</x-button>
            </div> --}} 
</section>