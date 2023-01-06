<section id="references" class="z-40 relative md:-mt-0">
    <div class="card-slider relative pb-12 sm:pb-24">
        <div class="pt-16 pb-8 relative z-50 flex flex-col justify-end overflow-hidden bg-black box-shadow">
            <h2 class="text-4xl bg-clip-text neon neon-flat bg-gradient-to-tr from-cyan-500 via-indigo-500 to-pink-500 px-6 flex-grow sm:text-center">@lang('Expertise')</h2>
            <p class="animate-swipe-x opacity-75 flex-shrink text-micro sm:hidden text-white mt-6"></p>
        </div>
        
        
        <div class="flex flex-col sm:mx-auto gap-4 max-w-screen-md">
            <!-- Slides -->
            <div class="swiper swiper5 px-2 sm:mx-auto xl:flex-1 overflow-x-scroll">
                <div class="relative swiper-wrapper items-center border-gray-200 flex transition-opacity duration-300 ease-in-out sm:border-none drop-shadow sm:grid sm:grid-cols-3 sm:p-0">
                    <div class="h-full self-stretch reference-text pl-5 swiper-slide relative sm:p-5 sm:col-span-2">
                        <div class="h-full p-5 text-black bg-dirty-white rounded-lg">
                            <h3 class="align-text-bottom text-small font-bolder text-2xl">Swisscom</h3>
                            <p class="text-tiny py-6">@lang('Im Rahmen der ')<a class="bg-yellow-200 px-1 hover:bg-yellow-400 text-black sm:hover:text-black rounded" href="https://generation-purpose.org" target="_blank">@lang('blue Kampagne')</a>@lang(' installierte unser Kunde an verschiedenen Open-Air-Standorten in der Schweiz Würfel mit Bildschirmen an ihren Seiten. Diese Würfel ermöglichten es den Benutzern, auf einfache Weise Selfies mit ausgewählten Hintergründen zu machen.')</p>
                            <p class="text-tiny pb-2">@lang('In einem Zweierteam entwickelten wir ein Webinterface, das es den Nutzern ermöglicht, den Foto- oder Videoprozess über einen QR-Code zu starten und die entstandenen Bilder auf ihren Handys anzusehen und zu teilen. Dafür entwickelten wir eine Web-App mit einer REST-API und kümmerten uns um die Datenverarbeitung. Für dieses Projekt kamen Laravel und Vue/Nuxt zum Einsatz.')</p>
                        </div>
                    </div>

                    <img class="swiper-slide rounded-lg object-cover max-h-96" src="{{ asset('media/swisscom-05.png') }}" alt="">
                    <img class="swiper-slide rounded-lg object-cover max-h-96" src="{{ asset('media/swisscom-01.png') }}" alt="">
                    <img class="swiper-slide rounded-lg object-cover max-h-96" src="{{ asset('media/swisscom-03.png') }}" alt="">
                    <img class="swiper-slide rounded-lg object-cover max-h-96" src="{{ asset('media/swisscom-04.png') }}" alt="">
                    <img class="swiper-slide rounded-lg object-cover max-h-96" src="{{ asset('media/swisscom-02.png') }}" alt="">
                    
                    {{-- <div class="slide-img lazy w-44 bg-cover bg-center image sm:col-span-1"></div>
                    <div class="slide-img lazy w-44 bg-cover bg-center image sm:col-span-1"></div>
                    <div class="slide-img lazy w-44 bg-cover bg-center image sm:col-span-1"></div> --}}
                </div>
            </div>

            <div class="swiper swiper1 px-2 sm:mx-auto xl:flex-1 overflow-x-scroll">
                <div class="relative swiper-wrapper items-center border-gray-200 flex transition-opacity duration-300 ease-in-out sm:border-none drop-shadow sm:grid sm:grid-cols-3 sm:p-0">
                    <div class="h-full self-stretch reference-text pl-5 swiper-slide relative sm:p-5 sm:col-span-2">
                        <div class="h-full p-5 text-black bg-dirty-white rounded-lg">
                            <h3 class="align-text-bottom text-small font-bolder text-2xl">naanu</h3>

                            @if (App::isLocale('zh'))
                                <p class="text-tiny py-6">naanu 是苏黎世的一家餐厅，提供外卖和送餐服务，它向我提出了建立新<a class="bg-yellow-200 px-1 hover:bg-yellow-400 text-black sm:hover:text-black rounded" href="https://naanu.ch" target="_blank">数字业务</a>的需求。</p>
                                <p class="text-tiny pb-2">最终结果是一个与企业内部预订、收银机和会计系统以及公共交付服务提供商连接的整体解决方案。</p>
                            @else
                                <p class="text-tiny py-6">@lang('naanu ist ein Restaurant, Take-Away und Delivery Service in Zürich welches mit dem Bedürfnis ihre Arbeits­prozesse zu digita­li­sieren an mich heran­getreten ist.')</p>
                                <p class="text-tiny pb-2">@lang('Entstanden ist eine integrale Lösung bestehend aus ')<a class="bg-yellow-200 px-1 hover:bg-yellow-400 text-black sm:hover:text-black rounded" href="https://naanu.ch" target="_blank">@lang('Online– Shop')</a>@lang(' Produkt­verwaltung, Beleg­druck und Anbindung ans betriebs­interne Reservations- und Kassen­system sowie an die gängigen Auslieferungs­dienst­leister.')</p>
                            @endif
                        </div>
                    </div>

                    <img class="swiper-slide rounded-lg object-cover max-h-96" src="{{ asset('media/desktop-screen-naanu-02.png') }}" alt="">
                    <img class="swiper-slide rounded-lg object-cover max-h-96" src="{{ asset('media/mobile-screen-naanu-01.png') }}" alt="">
                    <img class="swiper-slide rounded-lg object-cover max-h-96" src="{{ asset('media/restaurant.png') }}" alt="">
                    
                    {{-- <div class="slide-img lazy w-44 bg-cover bg-center image sm:col-span-1"></div>
                    <div class="slide-img lazy w-44 bg-cover bg-center image sm:col-span-1"></div>
                    <div class="slide-img lazy w-44 bg-cover bg-center image sm:col-span-1"></div> --}}
                </div>
            </div>
            
            <div class="swiper swiper2 px-2 sm:mx-auto xl:flex-1 overflow-x-scroll">
                <div class="relative swiper-wrapper items-center border-gray-200 flex transition-opacity duration-300 ease-in-out sm:border-none drop-shadow sm:grid sm:grid-cols-3 sm:p-0">
                    <div class="h-full self-stretch reference-text pl-5 swiper-slide w-full flex flex-col flex-grow justify-start relative sm:p-5 sm:col-span-2">
                        <div class="h-full p-5 text-black bg-dirty-white rounded-lg">
                            <h3 class="align-text-bottom text-small font-bolder text-2xl">Generation Purpose</h3>
                            <p class="text-tiny py-6">@lang('Generation Purpose hilft Organi­sationen und Einzel­personen, ihren Purpose zu finden und diesen im Alltag zu imple­men­tieren.')</p>
                            <p class="text-tiny pb-2">@lang('In Zusam­men­arbeit mit den Gründern durfte ich einer­seits die ')<a class="bg-yellow-200 px-1 hover:bg-yellow-400 text-black sm:hover:text-black rounded" href="https://generation-purpose.org" target="_blank">@lang('Online–Präsenz')</a>@lang(' entwickeln sowie eine digitale Plat­tform aufbauen, auf welcher die Facili­tators (Mit­arbeiter) und Kunden täglich arbeiten können.')</p>
                        </div>
                    </div>
                    
                    <img class="swiper-slide rounded-lg object-cover max-h-96" src="{{ asset('media/mobile-screen-generation-purpose-01.png') }}" alt="">
                    <img class="swiper-slide rounded-lg object-cover max-h-96" src="{{ asset('media/generation-purpose-meeting.png') }}" alt="">
                    <img class="swiper-slide rounded-lg object-cover max-h-96" src="{{ asset('media/generation-purpose-meeting-02.png') }}" alt="">
                    <img class="swiper-slide rounded-lg object-cover max-h-96" src="{{ asset('media/big-o.png') }}" alt="">
                </div>
            </div>
            
            <div class="swiper swiper3 px-2 sm:mx-auto xl:flex-1 overflow-x-scroll">
                <div class="relative swiper-wrapper items-center border-gray-200 flex transition-opacity duration-300 ease-in-out sm:border-none drop-shadow sm:grid sm:grid-cols-3 sm:p-0">
                    <div class="h-full self-stretch reference-text pl-5 swiper-slide w-full flex flex-col flex-grow justify-start relative sm:p-5 sm:col-span-2">
                        <div class="h-full p-5 text-black bg-dirty-white rounded-lg">
                            <h3 class="align-text-bottom text-small font-bolder text-2xl">Fundament</h3>
                            <p class="text-tiny py-6">@lang('Das schweizer Investment–Startup Fundament AG, investiert in nach­haltige Ge­schäfts­modelle und Unter­nehmen.')</p>
                            <p class="text-tiny pb-2">@lang('Mit einem von mir selektierten Team sowie einem starken Fokus auf ')<a class="bg-yellow-200 px-1 hover:bg-yellow-400 text-black sm:hover:text-black rounded" href="https://fundament.swiss" target="_blank">@lang('Online–Präsenz')</a>@lang(' und digitale Zusam­menarbeit, wurde die Corporate Identity von Fundament und die dazu­gehörigen digitalen Plat­tformen entwickelt.')</p>
                        </div>
                    </div>
                    
                    <img class="swiper-slide rounded-lg object-cover max-h-96" src="{{ asset('media/desktop-screen-fundament-02.png') }}" alt="">
                    <img class="swiper-slide rounded-lg object-cover max-h-96" src="{{ asset('media/mobile-screen-fundament-14.png') }}" alt="">
                    <img class="swiper-slide rounded-lg object-cover max-h-96" src="{{ asset('media/mobile-screen-fundament-16.png') }}" alt="">
                    <img class="swiper-slide rounded-lg object-cover max-h-96" src="{{ asset('media/fundament-logo.png') }}" alt="">
                </div>
            </div>

            <div class="swiper swiper4 px-2 sm:mx-auto xl:flex-1 overflow-x-scroll">
                <div class="relative swiper-wrapper items-center border-gray-200 flex transition-opacity duration-300 ease-in-out sm:border-none drop-shadow sm:grid sm:grid-cols-3 sm:p-0">
                    <div class="h-full self-stretch reference-text pl-5 swiper-slide w-full flex flex-col flex-grow justify-start relative sm:p-5 sm:col-span-2">
                        <div class="h-full p-5 text-black bg-dirty-white rounded-lg">
                            <h3 class="align-text-bottom text-small font-bolder text-2xl">coffaina</h3>
                            <p class="text-tiny py-6">@lang('Die wohl stärkste Cola der Welt. coffaina ist eine Berliner Indie-Cola, die bei ewigen Party­nächten, Abi–Stress oder einem 24–Stunden–Drag–Race zuver­lässig wach hält.')</p>
                            <p class="text-tiny pb-2">@lang('In einem desing-sprint-workshop in Berlin konnte ich mit dem Kunden den ')<a class="bg-yellow-200 px-1 hover:bg-yellow-400 text-black sm:hover:text-black rounded" href="http://coffaina.com" target="_blank">@lang('digitalen Auftritt')</a> @lang(' entwickeln und diesen in einem zweiten Schritt umsetzen.')</p>
                            {{-- <a href="http://coffaina.com" target="_blank" class="pt-10 pb-5 uppercase font-bold text-base">
                                <x-icon-icon-link class="hover:opacity-75 w-7 inline bg-black p-1 mr-2 rounded"/>
                                <span class="">Zum Produkt</span>
                            </a> --}}
                        </div>
                    </div>
                    
                    <img class="swiper-slide rounded-lg object-cover max-h-96" src="{{ asset('media/mobile-screen-coffaina-04.png') }}" alt="">
                    <img class="swiper-slide rounded-lg object-cover max-h-96" src="{{ asset('media/mobile-screen-coffaina-01.png') }}" alt="">
                    <img class="swiper-slide rounded-lg object-cover max-h-96" src="{{ asset('media/coffaina-bottle-02.png') }}" alt="">
                    <img class="swiper-slide rounded-lg object-cover max-h-96" src="{{ asset('media/coffaina-01.png') }}" alt="">
                    <img class="swiper-slide rounded-lg object-cover max-h-96" src="{{ asset('media/berlin.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>