<section id="intro" class="z-20 relative text-black mx-auto bg-dirty-white">
    <div class="relative z-20 mx-auto xs:flex xs:items-center">
        <div class="px-6 pt-12 z-10 text-black sm:container sm:flex sm:gap-8 sm:mx-auto sm:justify-end xl:max-w-screen-lg">
            {{-- <p class="mt-10 text-small xs:text-tiny">Als erfahrener Softwareentwickler verstehe ich es, Ideen mit den fortschrittlichsten Technologien umzusetzen, um daraus effektive, digitale Erlebnisse zu <!-- entwickeln --> schaffen.</p> --}}
            {{-- <p class="mt-10 text-small xs:text-tiny">{{ __('Als erfahrener Softwareentwickler realisiere ich individuelle, nutzerzentrierte Applikationen für Web und Mobile.') }}</p> --}}
            <div class="sm:w-2/6 flex flex-col justify-between">
                <h2>{{ __('Hallo,') }} {{ __('mein Name ') }} {{ __('ist ') }}<span class='bg-clip-text neon neon-flat'>Marko</span></h2>
                <div class="cursor-none memoji-sticker h-72 lg:mx-0 flex-grow bg-contain bg-center bg-no-repeat sm:h-80"></div>
            </div>
            
            <div class="sm:w-4/6 md:w-3/6">
                <p class="mt-8 text-small leading-tight md:flex-1 sm:mt-0">{{ __('Als erfahrener Softwareentwickler realisiere ich nutzerzentrierte Anwendungen und aussagekräftige Websites sowohl für Mobile als auch für Desktop.') }}</p>
                <p class="mt-8 text-small leading-tight md:flex-1">{{ __('Ich begleite Sie dabei von der ersten Idee, den Absichten und Auswirkungen, bis hin zum marktreifen Produkt.') }}</p>
                <p class="mt-8 text-small leading-tight md:flex-1">{{ __('Bei Bedarf unterstützt mich mein Team aus Fachleuten in Design und Entwicklung.') }}</p>
            </div>
        </div>
    </div>

    <div class="flex relative w-full z-10 px-8 sm:px-0">
        <div class="flex-1 parallax flex justify-end z-20">
            <img class="device-shadow w-48 self-center -mr-4" src="{{ asset('media/mobile-screen-fundament-15.png') }}" alt="Mobile Screen">
        </div>

        <div class="flex-1 parallax-2 flex justify-start z-10">
            <img class="device-shadow w-48 self-center -ml-2 -mt-8" src="{{ asset('media/mobile-screen-naanu-01.png') }}" alt="Mobile Screen">
        </div>
    </div>
</section>