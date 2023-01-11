<section id="references" class="relative md:-mt-0 z-20">
    <div class="card-slider relative pb-12 sm:pb-24">
        <div class="relative z-50 px-6 py-8 flex flex-col overflow-hidden box-shadow md:items-center">
            <h2 class="text-4xl bg-clip-text neon neon-flat bg-gradient-to-tr from-cyan-500 via-indigo-500 to-pink-500 flex-grow md:text-center">@lang('Expertise')</h2>
            <p class="text-xl font-medium pt-6 max-w-lg md:text-center">Unter anderem durfte ich massgeblich an der Realisierung folgender Projekte beitragen:</p>
            <p class="animate-swipe-x font-medium opacity-75 flex-shrink text-micro text-white mt-6 md:text-center"></p>
        </div>
        
        
        <div class="flex flex-col gap-4 z-20">
            <!-- Slides -->
            <div class="swiper swiper5">
                <div class="swiper-wrapper relative flex items-center border-gray-200 transition-opacity duration-300 ease-in-out sm:border-none drop-shadow">
                    <div class="reference-text self-stretch swiper-slide relative pl-5 max-w-xs md:pl-0">
                        <div class="p-5 text-black bg-dirty-white rounded-3xl text-left flex flex-col justify-between md:py-10">
                            <h3 class="align-text-bottom text-small font-body text-2xl">Swisscom</h3>
                            <p class="text-tiny py-6">
                                @lang('Im Rahmen einer ')
                                <a  class="bg-yellow-200 px-1 hover:bg-yellow-400 text-black sm:hover:text-black rounded" 
                                    href="https://www.facebook.com/Swisscom/photos/pcb.10160310741822630/10160310740082630"
                                    target="_blank">@lang('Kampagne')
                                </a>
                                @lang(' installierte unsere Kundin an mehreren Events riesige Würfel mit Bildschirmen an ihren Seiten. Es erlaubte den Besuchern Fotos mit auswählbaren Themenwelten zu machen.')
                            </p>
                            <p class="text-tiny pb-2">@lang('In einem Zweierteam entwickelten wir das Webinterface sowie eine REST API. Der Nutzer konnte den Foto- bzw. Videoprozess von seinem Smartphone aus über einen QR-Code starten und die entstandenen Bilder ansehen und teilen.')</p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <img class="swiper-lazy rounded-3xl max-h-[400px] opacity-0 transition-opacity duration-1000" data-src="{{ asset('media/swisscom-05.png') }}" alt="">
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    </div>
                    <div class="swiper-slide">
                        <img class="swiper-lazy rounded-3xl max-h-[400px] opacity-0 transition-opacity duration-1000" data-src="{{ asset('media/swisscom-01.png') }}" alt="">
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    </div>
                    <div class="swiper-slide">
                        <img class="swiper-lazy rounded-3xl max-h-[400px] opacity-0 transition-opacity duration-1000" data-src="{{ asset('media/mobile-testing.jpg') }}" alt="">
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    </div>
                    <div class="swiper-slide">
                        <img class="swiper-lazy rounded-3xl max-h-[400px] opacity-0 transition-opacity duration-1000" data-src="{{ asset('media/swisscom-03.png') }}" alt="">
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    </div>
                    <div class="swiper-slide">
                        <img class="swiper-lazy rounded-3xl max-h-[400px] opacity-0 transition-opacity duration-1000" data-src="{{ asset('media/swisscom-04.png') }}" alt="">
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    </div>
                    <div class="swiper-slide">
                        <img class="swiper-lazy rounded-3xl max-h-[400px] opacity-0 transition-opacity duration-1000" data-src="{{ asset('media/swisscom-02.png') }}" alt="">
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    </div>
                </div>
            </div>

            <div class="swiper swiper1">
                <div class="swiper-wrapper relative flex items-stretch border-gray-200 transition-opacity duration-300 ease-in-out sm:border-none drop-shadow">
                    <div class="reference-text self-stretch swiper-slide relative pl-5 max-w-xs md:pl-0 h-auto">
                        <div class="p-5 text-black bg-dirty-white rounded-3xl text-left flex flex-col md:py-10">
                            <h3 class="align-text-bottom text-small font-body text-2xl">naanu</h3>

                            @if (App::isLocale('zh'))
                                <p class="text-tiny py-6">naanu 是苏黎世的一家餐厅，提供外卖和送餐服务，它向我提出了建立新<a class="bg-yellow-200 px-1 hover:bg-yellow-400 text-black sm:hover:text-black rounded" href="https://naanu.ch" target="_blank">数字业务</a>的需求。</p>
                                <p class="text-tiny pb-2">最终结果是一个与企业内部预订、收银机和会计系统以及公共交付服务提供商连接的整体解决方案。</p>
                            @else
                                <p class="text-tiny py-6">@lang('naanu ist ein Restaurant, Take-Away und Delivery Service in Zürich welches mit dem Bedürfnis ihre Arbeits­prozesse zu digita­li­sieren an mich heran­getreten ist.')</p>
                                <p class="text-tiny pb-2">@lang('Entstanden ist eine integrale Lösung bestehend aus ')<a class="bg-yellow-200 px-1 hover:bg-yellow-400 text-black sm:hover:text-black rounded" href="https://naanu.ch" target="_blank">@lang('Online– Shop')</a>@lang(' Produkt­verwaltung, Beleg­druck und Anbindung ans betriebs­interne Reservations- und Kassen­system sowie an die gängigen Auslieferungs­dienst­leister.')</p>
                            @endif
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <img class="swiper-lazy rounded-3xl max-h-[400px] opacity-0 transition-opacity duration-1000" data-src="{{ asset('media/mobile-screen-naanu-01.png') }}" alt="">
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    </div>

                    <div class="swiper-slide">
                        <img class="swiper-lazy rounded-3xl max-h-[400px] opacity-0 transition-opacity duration-1000" data-src="{{ asset('media/desktop-screen-naanu-02.jpg') }}" alt="">
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    </div>

                    <div class="swiper-slide">
                        <img class="swiper-lazy rounded-3xl max-h-[400px] opacity-0 transition-opacity duration-1000" data-src="{{ asset('media/restaurant.png') }}" alt="">
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    </div>

                    <div class="swiper-slide">
                        <img class="swiper-lazy rounded-3xl max-h-[400px] opacity-0 transition-opacity duration-1000" data-src="{{ asset('media/naanu-testing.jpg') }}" alt="">
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    </div>
                </div>
            </div>
            
            <div class="swiper swiper2">
                <div class="swiper-wrapper relative flex items-stretch border-gray-200 transition-opacity duration-300 ease-in-out sm:border-none drop-shadow">
                    <div class="reference-text self-stretch swiper-slide relative pl-5 max-w-xs md:pl-0 h-auto">
                        <div class="p-5 text-black bg-dirty-white rounded-3xl text-left flex flex-col md:py-10">
                            <h3 class="align-text-bottom text-small font-body text-2xl">Generation Purpose</h3>
                            <p class="text-tiny py-6">@lang('Generation Purpose hilft Organi­sationen und Einzel­personen, ihren Purpose zu finden und diesen im Alltag zu imple­men­tieren.')</p>
                            <p class="text-tiny pb-2">@lang('In Zusam­men­arbeit mit den Gründern durfte ich einer­seits die ')<a class="bg-yellow-200 px-1 hover:bg-yellow-400 text-black sm:hover:text-black rounded" href="https://generation-purpose.org" target="_blank">@lang('Online–Präsenz')</a>@lang(' entwickeln sowie eine digitale Plat­tform aufbauen, auf welcher die Facili­tators (Mit­arbeiter) und Kunden täglich arbeiten können.')</p>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <img class="swiper-lazy rounded-3xl max-h-[400px] opacity-0 transition-opacity duration-1000" data-src="{{ asset('media/mobile-screen-generation-purpose-01.png') }}" alt="">
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    </div>

                    <div class="swiper-slide">
                        <img class="swiper-lazy rounded-3xl max-h-[400px] opacity-0 transition-opacity duration-1000" data-src="{{ asset('media/generation-purpose-meeting.jpg') }}" alt="">
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    </div>

                    <div class="swiper-slide">
                        <img class="swiper-lazy rounded-3xl max-h-[400px] opacity-0 transition-opacity duration-1000" data-src="{{ asset('media/generation-purpose-meeting-02.jpg') }}" alt="">
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    </div>

                    <div class="swiper-slide">
                        <img class="swiper-lazy rounded-3xl max-h-[400px] opacity-0 transition-opacity duration-1000" data-src="{{ asset('media/big-o.png') }}" alt="">
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    </div>
                </div>
            </div>
            
            <div class="swiper swiper3">
                <div class="swiper-wrapper relative flex items-stretch border-gray-200 transition-opacity duration-300 ease-in-out sm:border-none drop-shadow">
                    <div class="reference-text self-stretch swiper-slide relative pl-5 max-w-xs md:pl-0 h-auto">
                        <div class="p-5 text-black bg-dirty-white rounded-3xl text-left flex flex-col md:py-10">
                            <h3 class="align-text-bottom text-small font-body text-2xl">Fundament</h3>
                            <p class="text-tiny py-6">@lang('Das schweizer Investment–Startup Fundament AG, investiert in nach­haltige Ge­schäfts­modelle und Unter­nehmen.')</p>
                            <p class="text-tiny pb-2">@lang('Mit einem von mir selektierten Team sowie einem starken Fokus auf ')<a class="bg-yellow-200 px-1 hover:bg-yellow-400 text-black sm:hover:text-black rounded" href="https://fundament.swiss" target="_blank">@lang('Online–Präsenz')</a>@lang(' und digitale Zusam­menarbeit, wurde die Corporate Identity von Fundament und die dazu­gehörigen digitalen Plat­tformen entwickelt.')</p>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <img class="swiper-lazy rounded-3xl max-h-[400px] opacity-0 transition-opacity duration-1000" data-src="{{ asset('media/desktop-screen-fundament-02.jpg') }}" alt="">
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    </div>

                    <div class="swiper-slide">
                        <img class="swiper-lazy rounded-3xl max-h-[400px] opacity-0 transition-opacity duration-1000" data-src="{{ asset('media/mobile-screen-fundament-14.png') }}" alt="">
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    </div>

                    <div class="swiper-slide">
                        <img class="swiper-lazy rounded-3xl max-h-[400px] opacity-0 transition-opacity duration-1000" data-src="{{ asset('media/mobile-screen-fundament-16.png') }}" alt="">
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    </div>

                    <div class="swiper-slide">
                        <img class="swiper-lazy rounded-3xl max-h-[400px] opacity-0 transition-opacity duration-1000" data-src="{{ asset('media/fundament-logo.png') }}" alt="">
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    </div>
                </div>
            </div>

            <div class="swiper swiper4">
                <div class="swiper-wrapper relative flex items-stretch border-gray-200 transition-opacity duration-300 ease-in-out sm:border-none drop-shadow">
                    <div class="reference-text self-stretch swiper-slide relative pl-5 max-w-xs md:pl-0 h-auto">
                        <div class="p-5 text-black bg-dirty-white rounded-3xl text-left flex flex-col md:py-10">
                            <h3 class="align-text-bottom text-small font-body text-2xl">coffaina</h3>
                            <p class="text-tiny py-6">@lang('Die wohl stärkste Cola der Welt. coffaina ist eine Berliner Indie-Cola, die bei ewigen Party­nächten, Abi–Stress oder einem 24–Stunden–Drag–Race zuver­lässig wach hält.')</p>
                            <p class="text-tiny pb-2">@lang('In einem desing-sprint-workshop in Berlin konnte ich mit dem Kunden den ')<a class="bg-yellow-200 px-1 hover:bg-yellow-400 text-black sm:hover:text-black rounded" href="http://coffaina.com" target="_blank">@lang('digitalen Auftritt')</a> @lang(' entwickeln und diesen in einem zweiten Schritt umsetzen.')</p>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <img class="swiper-lazy rounded-3xl max-h-[400px] opacity-0 transition-opacity duration-1000" data-src="{{ asset('media/mobile-screen-coffaina-04.png') }}" alt="">
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    </div>

                    <div class="swiper-slide">
                        <img class="swiper-lazy rounded-3xl max-h-[400px] opacity-0 transition-opacity duration-1000" data-src="{{ asset('media/mobile-screen-coffaina-01.png') }}" alt="">
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    </div>

                    <div class="swiper-slide">
                        <img class="swiper-lazy rounded-3xl max-h-[400px] opacity-0 transition-opacity duration-1000" data-src="{{ asset('media/coffaina-bottle-02.png') }}" alt="">
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    </div>

                    <div class="swiper-slide">
                        <img class="swiper-lazy rounded-3xl max-h-[400px] opacity-0 transition-opacity duration-1000" data-src="{{ asset('media/coffaina-01.png') }}" alt="">
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    </div>

                    <div class="swiper-slide">
                        <img class="swiper-lazy rounded-3xl max-h-[400px] opacity-0 transition-opacity duration-1000" data-src="{{ asset('media/berlin.png') }}" alt="">
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>