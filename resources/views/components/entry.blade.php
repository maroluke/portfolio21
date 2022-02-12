<section id="entry" class="px-6 flex gap-8 relative">
    <div class="entry-bg top-0 right-0 bg-contain sm:bg-cover bg-no-repeat fixed w-full max-w-xl h-full"></div>

    <div class="flex flex-col justify-between text-white md:items-center w-full z-10 max-w-screen-sm m-auto relative md:text-center">
        <div class="py-6">
            <x-lang-switch />
        </div>

        <h1 class="bg-clip-text neon neon-wide text-4xl leading-snug md:text-6xl">
            <span class="block bg-clip-text text-transparent md:leading-snug">@lang('Apps, Usability, Design, Testing.')</span>
            {{-- <span class="block bg-clip-text text-transparent">Ich unterstütze Menschen und Unternehmen bei der Entwicklung von Lösungen für Web und Mobile.</span> --}}
        </h1>

        <p class="pt-8 text-small font-bolder max-w-screen-sm md:m-auto xs:text-tiny md:text-small">{{ __('Möchten Sie sich im Internet neu positionieren, Ihren Kunden ein online–Shopping–Erlebnis bieten, oder Arbeitsprozesse digitalisieren?') }}</p>

        <div id="swipe-down" class="flex justify-between items-center mt-12">
            <div class="opacity-30">
                <span class="font-heading text-sm tracking-widest animate-swipe-y opacity-0 transform translate-y-full inline-block py-3">@lang('Swipe')</span>
            </div>
        </div>
    </div>
            {{-- <div class="grid grid-cols-2 gap-2">
                <x-button route="home" class="flex-1 bg-white">Kontaktieren</x-button>
                <x-button route="home" class="flex-1 bg-white">CV holen</x-button>
            </div> --}} 
</section>