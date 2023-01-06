<section id="intro" class="continue-content z-20 relative text-black mx-auto bg-dirty-white rounded-t-3xl max-w-4xl">
    <div class="relative z-20 mx-auto xs:flex xs:items-center">
        <div class="p-6 z-10 text-black sm:container sm:flex sm:gap-8 sm:mx-auto sm:justify-end xl:max-w-screen-lg">
            {{-- <p class="mt-10 text-small xs:text-tiny">Als erfahrener Softwareentwickler verstehe ich es, Ideen mit den fortschrittlichsten Technologien umzusetzen, um daraus effektive, digitale Erlebnisse zu <!-- entwickeln --> schaffen.</p> --}}
            {{-- <p class="mt-10 text-small xs:text-tiny">{{ __('Als erfahrener Softwareentwickler realisiere ich individuelle, nutzerzentrierte Applikationen für Web und Mobile.') }}</p> --}}
            <div class="flex gap-10 relative flex-col sm:w-2/6 md:gap-20">
                {{-- <h2>{{ __('Hallo,') }} {{ __('mein Name ') }} {{ __('ist ') }}<span class='bg-clip-text neon neon-flat'>Marko</span></h2> --}}
                <h2 class="md:text-2xl">
                    {{ __('Ich bin Experte in der Entwicklung von ') }}
                    <span class='bg-clip-text neon neon-flat bg-gradient-to-tr from-indigo-500 via-purple-500 to-pink-500'>
                        individuellen Web-Anwendungen
                    </span>
                    {!! __(', die Agenturen und Unternehmen dabei unterstützen, ihr Angebot durch ') !!}
                    <span class='bg-clip-text neon neon-flat bg-gradient-to-tr from-cyan-500 via-blue-500 to-indigo-500'>
                        innovative digitale Lösungen
                    </span>
                    {!! __(' zu erweitern.') !!}
                </h2>
                <div class="flex relative w-full z-10 px-8 sm:px-0 md:container">
                    <div class="flex-1 flex justify-end z-20">
                        <img loading="lazy" class="lazy device-shadow parallax w-32 self-center -mr-4" src="{{ asset('media/mobile-screen-fundament-15.png') }}" alt="Mobile Screen">
                    </div>
            
                    <div class="flex-1 flex justify-start z-10">
                        <img loading="lazy" class="lazy device-shadow parallax-2 w-32 self-center -ml-2 -mt-8" src="{{ asset('media/mobile-screen-naanu-01.png') }}" alt="Mobile Screen">
                    </div>
                </div>
            </div>
            
            <div class="sm:w-4/6 md:w-3/6 pb-10">
                {{-- <p class="mt-8 text-small leading-tight md:flex-1 sm:mt-0">{{ __('Ich bin spezialisiert auf die Entwicklung von massgeschneiderten Web-Anwendungen, die dazu beitragen, das Angebot von Agenturen sowie Unternehmen um innovative digitale Lösungen zu erweitern.') }}</p> --}}
                <p class="mt-8 text-small leading-tight md:flex-1">{{ __('Von der Idee bis zum marktreifen Produkt unterstütze ich Sie bei der Verwirklichung Ihres Projekts und berücksichtige dabei auch die potenziellen Auswirkungen. Meine Fähigkeiten gewährleisten die Entwicklung sicherer, zuverlässiger und skalierbarer Applikationen.') }}</p>
                <p class="mt-8 text-small leading-tight md:flex-1">{!! __('Mein Ziel ist es, nützliche und benutzerfreundliche Produkte zu liefern, die einen echten Mehrwert für das Unternehmen und die Nutzer bieten.') !!}</p>
                <p class="mt-8 text-small leading-tight md:flex-1">{!! __('Ich bin Marko und stehe Ihnen gerne zur Verfügung. Wie kann ich Ihnen helfen?') !!}</p>
            </div>
        </div>
    </div>

    {{-- <video autoplay loop muted playsinline class="w-full h-full object-cover absolute -z-0 top-0">
        <source src="{{ asset('media/digital-loop.mp4') }}" type="video/mp4">
    </video> --}}
</section>