<section id="intro" class="z-20 relative text-black mx-auto bg-dirty-white md:pb-16 rounded-t-3xl">
    <div class="relative z-20 mx-auto xs:flex xs:items-center">
        <div class="px-6 pt-12 z-10 text-black sm:container sm:flex sm:gap-8 sm:mx-auto sm:justify-end xl:max-w-screen-lg">
            {{-- <p class="mt-10 text-small xs:text-tiny">Als erfahrener Softwareentwickler verstehe ich es, Ideen mit den fortschrittlichsten Technologien umzusetzen, um daraus effektive, digitale Erlebnisse zu <!-- entwickeln --> schaffen.</p> --}}
            {{-- <p class="mt-10 text-small xs:text-tiny">{{ __('Als erfahrener Softwareentwickler realisiere ich individuelle, nutzerzentrierte Applikationen für Web und Mobile.') }}</p> --}}
            <div class="flex gap-10 relative flex-col sm:w-2/6 xxs:flex-row">
                {{-- <h2>{{ __('Hallo,') }} {{ __('mein Name ') }} {{ __('ist ') }}<span class='bg-clip-text neon neon-flat'>Marko</span></h2> --}}
                <h2 class="md:text-2xl">{{ __('Ich realisiere') }} <span class='bg-clip-text neon neon-flat'>progres&shy;sive</span> {!! __('Web&shy;anwendungen für') !!} <span class='bg-clip-text neon neon-flat'>geschäfts&shy;orientierte</span> {!! __('Problem&shy;lösungen') !!}</h2>
            </div>
            
            <div class="sm:w-4/6 md:w-3/6 pb-10">
                <p class="mt-8 text-small leading-tight md:flex-1 sm:mt-0">{{ __('Dabei werden Sie von der Idee, über Ihre Absichten sowie den potenziellen Auswirkungen, bis hin zu einem ersten marktreifen Produkt von mir begleitet.') }}</p>
                <p class="mt-8 text-small leading-tight md:flex-1">{{ __('Zudem profitieren Sie von meinem Experten– Portfolio in Bereichen wie Branding, UX/UI oder Entwicklung, die das Projekt bei Bedarf kompetent unterstützen können.') }}</p>
                <p class="mt-8 text-small leading-tight md:flex-1">{!! __('Hallo, mein Name ist Marko.<br />Was kann ich für Sie tun?') !!}</p>
            </div>
        </div>
    </div>

    <div class="flex relative w-full z-10 px-8 sm:px-0 md:w-1/2 md:absolute md:container md:-bottom-32 md:left-10 xl:w-2/3">
        <div class="flex-1 flex justify-end z-20">
            <img class="device-shadow parallax w-32 self-center -mr-4" src="{{ asset('media/mobile-screen-fundament-15.png') }}" alt="Mobile Screen">
        </div>

        <div class="flex-1 flex justify-start z-10">
            <img class="device-shadow parallax-2 w-32 self-center -ml-2 -mt-8" src="{{ asset('media/mobile-screen-naanu-01.png') }}" alt="Mobile Screen">
        </div>
    </div>

    {{-- <video autoplay loop muted playsinline class="w-full h-full object-cover absolute -z-0 top-0">
        <source src="{{ asset('media/digital-loop.mp4') }}" type="video/mp4">
    </video> --}}
</section>