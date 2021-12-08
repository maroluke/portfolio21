<section id="entry" class="px-6 flex gap-8 top-0 bottom-0 left-0 right-0 relative">
    {{-- <div class="entry-bg top-0 right-0 bg-contain bg-no-repeat fixed w-full h-full xs:bg-cover sm:w-2/3 sm:justify-self-end"></div> --}}

    <div class="flex flex-col text-white h-full justify-end w-full">
        <div class="absolute top-0 left-0 px-6">
            <x-lang-switch />
        </div>

        <h1 class="bg-clip-text neon neon-wide md:w-2/3 text-4xl">
            <span class="block bg-clip-text text-transparent">@lang('Ich unterstütze Unternehmen bei der Entwicklung nutzerzentrierter Lösungen für Web und Mobile')</span>
            {{-- <span class="block bg-clip-text text-transparent">xxxIch unterstütze Menschen und Unternehmen bei der Entwicklung von Lösungen für Web und Mobile.</span> --}}
        </h1>

        <div class="flex justify-between my-12">
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