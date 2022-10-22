<section id="entry" class="px-6 flex gap-8 fixed h-screen top-0 bottom-0 justify-center w-full pb-24">
    <div class="entry-bg top-0 right-0 bg-contain sm:bg-cover bg-no-repeat fixed w-full max-w-xl h-full"></div>

    <div class="flex flex-col justify-between text-white md:items-center w-full z-10 max-w-screen-sm relative md:text-center">
        <div class="py-6">
            {{-- <x-lang-switch /> --}}
            <x-logo />
        </div>

        <div class="flex flex-col gap-12">
            <h1 class="bg-clip-text neon neon-wide text-4xl leading-snug md:text-6xl">
                <span class="block bg-clip-text text-transparent md:leading-snug">@lang('Apps, Usability, Design, Testing')</span>
                {{-- <span class="block bg-clip-text text-transparent">Ich unterstütze Menschen und Unternehmen bei der Entwicklung von Lösungen für Web und Mobile.</span> --}}
            </h1>

            <p class="text-small max-w-screen-sm md:m-auto xs:text-medium md:text-medium">{{ __('Möchten Sie sich im Internet neu positionieren, Ihre Produkte online verkaufen, oder Arbeitsprozesse digitalisieren?') }}</p>
        </div>

        <div id="swipe-down" class="flex justify-between items-center pb-6 md:flex-col md:gap-10">
            <div class="opacity-75 md:order-2">
                <span class="text-micro font-heading tracking-widest animate-swipe-y opacity-0 transform translate-y-full inline-block">@lang('Swipe')</span>
            </div>

            <x-contact-actions class="md:order-1"/>
        </div>
    </div>
            {{-- <div class="grid grid-cols-2 gap-2">
                <x-button route="home" class="flex-1 bg-white">Kontaktieren</x-button>
                <x-button route="home" class="flex-1 bg-white">CV holen</x-button>
            </div> --}} 
</section>