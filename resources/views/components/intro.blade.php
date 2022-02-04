<section id="intro" class="z-20 relative text-white mb-8 max-w-screen-xl">
    <div class="flex relative w-full">
        <div class="flex-1 parallax flex justify-end z-20">
            <img class="device-shadow w-48 self-center -mr-4" src="{{ asset('media/mobile-screen-fundament-14.png') }}" alt="Mobile Screen">
        </div>

        <div class="flex-1 parallax-2 flex justify-start z-10">
            <img class="device-shadow w-40 self-center ml-2 -mt-8" src="{{ asset('media/mobile-screen-fundament-13.png') }}" alt="Mobile Screen">
        </div>
    </div>

    <div class="relative z-20 bg-shadow xs:flex xs:items-center bg-white -mt-44 sm:container sm:rounded-lg mx-auto">
        <div class="px-6 z-10 text-black py-10">
            {{-- <p class="mt-10 text-small xs:text-tiny">Als erfahrener Softwareentwickler verstehe ich es, Ideen mit den fortschrittlichsten Technologien umzusetzen, um daraus effektive, digitale Erlebnisse zu <!-- entwickeln --> schaffen.</p> --}}
            {{-- <p class="mt-10 text-small xs:text-tiny">{{ __('Als erfahrener Softwareentwickler realisiere ich individuelle, nutzerzentrierte Applikationen für Web und Mobile.') }}</p> --}}
            <h2>{{ __('Hallo,') }} {{ __('mein Name ') }} {{ __('ist ') }}<span class='bg-clip-text neon neon-flat'>Marko</span></h2>
            <div class="md:flex md:gap-8">
                <p class="mt-10 text-small xs:text-tiny md:flex-1">{{ __('Als erfahrener Softwareentwickler realisiere ich nutzerzentrierte Anwendungen und aussagekräftige Websites sowohl für Mobile als auch für Desktop.') }}</p>
                <p class="mt-10 text-small xs:text-tiny md:flex-1">{{ __('Ich begleite Sie dabei von der ersten Idee, über Absichten und Auswirkungen, bis hin zum marktreifen Produkt.') }}</p>
                <p class="mt-10 text-small xs:text-tiny md:flex-1">{{ __('Mein Experten– Netzwerk in den Bereichen Design und Entwicklung unterstützt uns dabei je nach Bedarf.') }}</p>
            </div>
        </div>

        {{-- <div class="px-6">
            <p></p>
        </div> --}}
    </div>
</section>