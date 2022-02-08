<section id="references" class="z-30 relative">
    <div class="flex relative w-full z-10">
        <div class="flex-1 parallax flex justify-end z-20">
            <img class="device-shadow w-48 self-center -mr-4" src="{{ asset('media/mobile-screen-fundament-14.png') }}" alt="Mobile Screen">
        </div>

        <div class="flex-1 parallax-2 flex justify-start z-10">
            <img class="device-shadow w-40 self-center ml-2 -mt-8" src="{{ asset('media/mobile-screen-coffaina-02.png') }}" alt="Mobile Screen">
        </div>
    </div>
            
    <div class="card-slider -mt-24 bg-gray-100 z-20 relative py-12 sm:pb-44">
        <div class="pb-8 relative z-50 flex flex-col justify-end overflow-hidden">
            <h2 class="px-6 flex-grow sm:text-center text-black">@lang('Expertise')</h2>
            <p class="animate-swipe-x opacity-30 flex-shrink sm:hidden text-black mt-6"></p>
        </div>
        
        <div class="swiper">
            <div class="swiper-wrapper items-stretch sm:flex-col sm:mx-auto sm:max-w-screen-lg sm:gap-4">
                <!-- Slides -->
                <div class="swiper-slide px-2 relative sm:px-0 sm:mx-auto xl:flex-1">
                    <div class="text-black bg-white rounded-2xl border-2 border-gray-200 flex flex-col h-full transition-opacity duration-300 ease-in-out sm:flex-row sm:p-6">
                        <div class="image relative flex items-center sm:w-1/3 sm:h-full">
                            <img class="self-start rounded-t-lg sm:rounded" src="{{ asset('media/desktop.png') }}" alt="Desktop">
                        </div>

                        <div class="reference-text backdrop-blur-xl rounded-b-2xl p-5 flex flex-col flex-grow justify-start relative sm:flex-1 sm:pt-0 sm:pr-0 sm:pb-0">
                            <h3 class="align-text-bottom text-small font-bolder">Generation Purpose</h3>
                            <p class="text-tiny py-6">@lang('Generation Purpose hilft Organi­sationen und Einzel­personen, ihren Purpose zu finden und diesen im Alltag zu imple­men­tieren.')</p>
                            <p class="text-tiny pb-2">@lang('In Zusam­men­arbeit mit den Gründern durfte ich einerseits die ')<a class="bg-yellow-200 px-1 hover:bg-yellow-400 text-black sm:hover:text-black rounded rounded" href="https://generation-purpose.org" target="_blank">@lang('Online–Präsenz')</a>@lang(' entwickeln sowie eine digitale Plattform aufbauen, auf welcher die Facilitators (Mitarbeiter) und Kunden täglich arbeiten können.')</p>
                            {{-- <a href="https://generation-purpose.org" target="_blank" class="pt-10 pb-5 uppercase font-bold text-base">
                                <x-icon-icon-link class="hover:opacity-75 w-7 inline bg-black p-1 mr-2 rounded"/>
                                <span class="">Zum Produkt</span>
                            </a> --}}
                        </div>
                    </div>
                </div>
                
                <div class="swiper-slide px-2 relative sm:px-0 sm:mx-auto xl:flex-1">
                    <div class="text-black bg-white rounded-2xl border-2 border-gray-200 flex flex-col h-full transition-opacity duration-300 ease-in-out sm:flex-row sm:p-6">
                        <div class="image relative flex items-center sm:w-1/3 sm:h-full">
                            <img class="self-start rounded-t-lg sm:rounded" src="{{ asset('media/webpage-fundament.png') }}" alt="Fundament Web Page">
                        </div>

                        <div class="reference-text backdrop-blur-xl rounded-b-2xl p-5 flex flex-col flex-grow justify-start relative sm:flex-1 sm:pt-0 sm:pr-0 sm:pb-0">
                            <h3 class="align-text-bottom text-small font-bolder">Fundament</h3>
                            <p class="text-tiny py-6">@lang('Das schweizer Investment–Startup Fundament AG, investiert in nachhaltige Geschäftsmodelle und Unternehmen.')</p>
                            <p class="text-tiny pb-2">@lang('Mit einem von mir selektierten Team sowie einem starken Fokus auf ')<a class="bg-yellow-200 px-1 hover:bg-yellow-400 text-black sm:hover:text-black rounded" href="https://fundament.swiss" target="_blank">@lang('Online–Präsenz')</a>@lang(' und digitale Zusammenarbeit, wurde die Corporate Identity von Fundament und die dazugehörigen digitalen Plattformen entwickelt.')</p>
                            {{-- <a href="https://fundament.swiss" target="_blank" class="pt-10 pb-5 uppercase font-bold text-base">
                                <x-icon-icon-link class="hover:opacity-75 w-7 inline bg-black p-1 mr-2 rounded"/>
                                <span class="">Zum Produkt</span>
                            </a> --}}
                        </div>
                    </div>
                </div>

                <div class="swiper-slide px-2 relative sm:px-0 sm:mx-auto xl:flex-1">
                    <div class="text-black bg-white rounded-2xl border-2 border-gray-200 flex flex-col h-full transition-opacity duration-300 ease-in-out sm:flex-row sm:p-6">
                        <div class="image relative flex items-center sm:w-1/3 sm:h-full">
                            <img class="self-start rounded-t-lg sm:rounded" src="{{ asset('media/coffaina-bottle-02.png') }}" alt="Coffaina Bottle">
                        </div>

                        <div class="reference-text backdrop-blur-xl rounded-b-2xl p-5 flex flex-col flex-grow justify-start relative sm:flex-1 sm:pt-0 sm:pr-0 sm:pb-0">
                            <h3 class="align-text-bottom text-small font-bolder">coffaina</h3>
                            <p class="text-tiny py-6">@lang('Die wohl stärkste Cola der Welt. coffaina ist eine Berliner Indie-Cola, die bei ewigen Partynächten, Abi–Stress oder einem 24–Stunden–Drag–Race zuverlässig wach hält.')</p>
                            <p class="text-tiny pb-2">@lang('In einem desing-sprint-workshop in Berlin konnte ich mit dem Kunden den ')<a class="bg-yellow-200 px-1 hover:bg-yellow-400 text-black sm:hover:text-black rounded" href="http://coffaina.com" target="_blank">@lang('digitalen Auftritt')</a> @lang(' entwickeln und diesen in einem zweiten Schritt umsetzen.')</p>
                            {{-- <a href="http://coffaina.com" target="_blank" class="pt-10 pb-5 uppercase font-bold text-base">
                                <x-icon-icon-link class="hover:opacity-75 w-7 inline bg-black p-1 mr-2 rounded"/>
                                <span class="">Zum Produkt</span>
                            </a> --}}
                        </div>
                    </div>
                </div>

                <div class="swiper-slide px-2 relative sm:px-0 sm:mx-auto xl:flex-1">
                    <div class="text-black bg-white rounded-2xl border-2 border-gray-200 flex flex-col h-full transition-opacity duration-300 ease-in-out sm:flex-row sm:p-6">
                        <div class="image relative flex items-center sm:w-1/3 sm:h-full">
                            <img class="self-start rounded-t-lg sm:rounded" src="{{ asset('media/restaurant.png') }}" alt="Working at naanu restaurant">
                        </div>

                        <div class="reference-text backdrop-blur-xl rounded-b-2xl p-5 flex flex-col flex-grow justify-start relative sm:flex-1 sm:pt-0 sm:pr-0 sm:pb-0">
                            <h3 class="align-text-bottom text-small font-bolder">naanu</h3>

                            @if (App::isLocale('zh'))
                                <p class="text-tiny py-6">naanu 是苏黎世的一家餐厅，提供外卖和送餐服务，它向我提出了建立新<a class="bg-yellow-200 px-1 hover:bg-yellow-400 text-black sm:hover:text-black rounded" href="https://naanu.ch" target="_blank">数字业务</a>的需求。</p>
                                <p class="text-tiny pb-2">最终结果是一个与企业内部预订、收银机和会计系统以及公共交付服务提供商连接的整体解决方案。</p>
                            @else
                                <p class="text-tiny py-6">@lang('naanu ist ein Restaurant, Take-Away und Delivery Service in Zürich welches mit dem Bedürfnis ihre Arbeitsprozesse zu digitalisieren an mich herangetreten ist.')</p>
                                <p class="text-tiny pb-2">@lang('Entstanden ist eine ')<a class="bg-yellow-200 px-1 hover:bg-yellow-400 text-black sm:hover:text-black rounded" href="https://naanu.ch" target="_blank">@lang('integrale Lösung')</a>@lang(' bestehend aus Online– Shop, Produktverwaltung, Belegdruck und Anbindung ans betriebsinterne Reservations-, Kassen-, und Buchaltungssystem sowie an die gängigen Auslieferungsdienstleister.')</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>