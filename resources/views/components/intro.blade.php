<section id="intro" class="relative continue-content z-20 bg-gradient-to-t from-black">
    <div class="text-black mx-auto bg-dirty-white rounded-3xl max-w-screen-md">
        <div class="z-20 mx-auto xs:flex xs:items-center max-w-screen-sm">
            <div x-data class="p-6 sm:py-10 z-10 text-black sm:container sm:flex sm:flex-wrap sm:mx-auto xl:max-w-screen-lg">
                {{-- <p class="mt-10 text-small xs:text-tiny">Als erfahrener Softwareentwickler verstehe ich es, Ideen mit den fortschrittlichsten Technologien umzusetzen, um daraus effektive, digitale Erlebnisse zu <!-- entwickeln --> schaffen.</p> --}}
                {{-- <p class="mt-10 text-small xs:text-tiny">{{ __('Als erfahrener Softwareentwickler realisiere ich individuelle, nutzerzentrierte Applikationen für Web und Mobile.') }}</p> --}}
                
                {{-- <h2>{{ __('Hallo,') }} {{ __('mein Name ') }} {{ __('ist ') }}<span class='bg-clip-text neon neon-flat'>Marko</span></h2> --}}
                <p class="text-xl font-medium">
                    {{-- {{ __('Wollen Sie Ihr Angebot durch ') }}
                    <span class='-mr-1 bg-clip-text neon neon-flat bg-gradient-to-tr from-indigo-500 via-purple-500 to-pink-500'>
                        innovative digitale Lösungen
                    </span>erweitern?
                    <br />
                    <br />
                    {!! __('Ich entwickle ') !!}
                    <span class='bg-clip-text neon neon-flat bg-gradient-to-tr from-cyan-500 via-blue-500 to-indigo-500'>
                        individuelle Web-Anwendungen
                    </span>
                    {!! __(' für Agenturen und Unternehmen.') !!} --}}
                    {{-- Lassen Sie uns das Problem identifizieren und gemeinsam eine Lösung finden. --}}
                    {{ __('Als Frontend Developer bringe ich jahrelange Erfahrung in der Entwicklung von individuellen ') }}
                    <span class='bg-clip-text neon neon-flat bg-gradient-to-tr from-indigo-500 via-purple-500 to-pink-500'>
                        Websites
                    </span>
                    {{ __('  und ') }}
                    <span class='bg-clip-text neon neon-flat bg-gradient-to-tr from-indigo-500 via-purple-500 to-pink-500'>
                        Single Page Applications
                    </span>mit.
                    <br />
                    <br />
                    {!! __('Zudem sammelte ich fundierte Kenntnisse im ') !!}
                    <span class='-mr-1 bg-clip-text neon neon-flat bg-gradient-to-tr from-cyan-500 via-blue-500 to-indigo-500'>
                        Projektmanagement
                    </span>, der
                    <span class=' bg-clip-text neon neon-flat bg-gradient-to-tr from-cyan-500 via-blue-500 to-indigo-500'>
                        Konzeption
                    </span>sowie
                    <span class='bg-clip-text neon neon-flat bg-gradient-to-tr from-cyan-500 via-blue-500 to-indigo-500'>
                        Kollaboration
                    </span>
                    während meiner Tätigkeit bei renomierten Agenturen sowie meiner Selbstständigkeit.
                    <br />
                    <br />
                    {{ __('Ich bin jederzeit offen für ') }}
                    <span class='-mr-1 bg-clip-text neon neon-flat bg-gradient-to-tr from-indigo-500 via-purple-500 to-pink-500'>
                        spannende Angebote
                    </span>.
                    {{-- {!! __(' für Agenturen und Unternehmen.') !!} --}}
                </p>
    
                <div class="flex flex-col sm:flex-row gap-2 mt-8 w-full">
                    <x-link-button @click="$store.modal.toggleContact()" class="cursor-pointer z-10 px-1 text-black bg-[#fff] rounded-lg bg-opacity-85 tracking-wider">@lang('Termin vereinbaren')</x-link-button>
                    <x-link-button @click="$store.modal.toggleCV()" class="cursor-pointer z-10 px-1 text-black bg-[#fff] rounded-lg bg-opacity-85 tracking-wider">@lang('CV anfordern')</x-link-button>
                </div>
            </div>
        </div>
    </div>

    {{-- <video autoplay loop muted playsinline class="w-full h-full object-cover absolute -z-0 top-0">
        <source src="{{ asset('media/digital-loop.mp4') }}" type="video/mp4">
    </video> --}}
</section>