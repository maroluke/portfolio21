<x-layout>
    @section('content')
        <section id="entry" class="px-6 flex fixed top-0 bottom-0 left-0 right-0">
            <div class="flex flex-col text-white pb-6 justify-end h-full">
                <h1 class="bg-clip-text neon neon-wide mb-20">
                    <span class="block bg-clip-text text-transparent">Hallo, Mein Name ist Marko.<br /><br />Ich entwickle digitale Produkte.</span>
                </h1>

                <div class="grid grid-cols-2 gap-2">
                    <x-button route="home" class="flex-1 bg-white">Kontaktieren</x-button>

                    <x-button route="home" class="flex-1 bg-white">CV holen</x-button>
                </div>

                <div class="mt-5 opacity-30">
                    <p class="font-heading text-center text-sm tracking-widest animate-swipe opacity-0 transform translate-y-full">Swipe</p>
                </div>
            </div>
        </section>

        <section id="intro" class="z-20 relative">
            <div class="bg-gradient-to-t from-black h-56 w-full"></div>

            <div class="bg-black pb-20">
                <div class="flex justify-end">
                    <div class="w-2/3">
                        <img class="parallax" src="{{ asset('media/mobile-screen-fundament-2.png') }}" alt="Mobile Screen">
                    </div>
                </div>

                <div class="px-6 relative z-10">
                    <h2 class="text-large">Vom Web–Entwickler zum Problemlöser</h2>

                    <p class="mt-10">Nach über einem Jahrzehnt als professioneller Web–Entwickler mit Schwerpunkt Frontend, widmete sich Marko zunehmend der digitalen Produktentwicklung.</p>
                    <p class="mt-10">Durch seine Expertise versteht er es die Lücken zwischen Idee und Technologie zu schliessen.</p>
                    <p class="mt-10">Seine Herausforderungen geht er aufgeschlossen, selbstständig, strukturiert und pragmatisch an.</p>
                </div>

                <img class="-my-20 parallax" src="{{ asset('media/hello-world.png') }}" alt="Hello World - Lissabon">

                {{-- <div class="px-6">
                    <p></p>
                </div> --}}
            </div>
        </section>

        <section id="references" class="bg-black  z-20 relative">
            <div class="card-slider">
                <div class="flex justify-between items-center px-6 py-4">
                    <h2 class="text-large">Ausgewählte Referenzen</h2>
                </div>

                <div class="pagination z-10 grid grid-flow-col justify-start px-6 gap-2 items-center py-3"></div>
                
                <div class="swiper bg-black">
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide px-3 last:pr-3">
                            <div class="rounded-2xl overflow-hidden text-black">
                                <div class="image">
                                    <img src="{{ asset('media/restaurant.png') }}" alt="Working at naanu restaurant">
                                </div>

                                <div class="bg-white p-5">
                                    <h3 class="text-medium mb-5">naanu take & eat restaurant</h3>
                                    <p class="py-2 text-base">Für die naanu GmbH implementierte Marko ein Online Bestellsystem. Unterstützung holte er sich bei der Software–Agentur <a class="underline" href="https://enterwell.net/" target="_blank">Enterwell d.o.o</a>.</p>
                                    <p class="py-2 text-base">Die Bequemlichkeit naanus feine Gerichte auch online bezahlen zu können, sowie nach Hause liefern zu lassen, wird von den Kunden extrem geschätzt.</p>
                                    <p class="py-2 text-base">Das Restaurant konnte dadurch auch während des Lockdowns Ihre Produkte weiterhin anbieten.</p>
                                    <x-button route="home" class="bg-black mt-5">Erfahren Sie mehr</x-button>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide px-3 last:pr-3">
                            <div class="rounded-2xl overflow-hidden text-black">
                                <div class="image">
                                    <img src="{{ asset('media/webpage-fundament.png') }}" alt="Fundament Web Page">
                                </div>

                                <div class="bg-white p-5">
                                    <h3 class="text-medium mb-5">Fundament AG</h3>
                                    <p class="py-2 text-base">Die Qualitätsansprüche und Expertisen des neu gegründeten Startups Fundament AG, sollten vor allem durch die Wahrnehmung ausgedrückt werden.</p>
                                    <p class="py-2 text-base">Yves Böniger und sein Team brauchten ein Nagelneues Branding sowie Webauftritt.</p>
                                    <p class="py-2 text-base">Marko durfte den Auftrag mit Unterstützung von <a class="underline" href="https://henrygillis.com/" target="_blank">Henry Gillis</a> ausführen.</p>
                                    <x-button route="home" class="bg-black mt-5">Erfahren Sie mehr</x-button>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide px-3 last:pr-3">
                            <div class="rounded-2xl overflow-hidden text-black">
                                <div class="image">
                                    <img src="{{ asset('media/restaurant.png') }}" alt="Working at naanu restaurant">
                                </div>

                                <div class="bg-white p-5">
                                    <h3 class="text-medium">Generation Purpose</h3>
                                    <p class="py-5">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                                    <x-button route="home" class="bg-black">Erfahren Sie mehr</x-button>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide px-3 last:pr-3">
                            <div class="rounded-2xl overflow-hidden text-black">
                                <div class="image">
                                    <img src="{{ asset('media/restaurant.png') }}" alt="Working at naanu restaurant">
                                </div>

                                <div class="bg-white p-5">
                                    <h3 class="text-medium">Desire in Balance</h3>
                                    <p class="py-5">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                                    <x-button route="home" class="bg-black">Erfahren Sie mehr</x-button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="full-image bg-black  z-20 relative">
            <img class="floating" src="{{ asset('media/macbook-2.png') }}" alt="MacBook">
        </section>

        <section id="cta-employers" class="bg-black px-6 py-10 z-20 relative">
            <h2 class="text-large">Suchen Sie <span class="neon neon-flat">Verstärkung</span> Für Ihr Team?</h2>
            <p class="py-8">Holen Sie sich meine Bewerbungsunterlagen. Tragen Sie dazu einfach Ihre E-Mail Adresse ein und ich schicke Ihnen die Dokumente als PDF. Ihre E-Mail Adresse wird nicht gespeichert.</p>
            <form action="{{ url('/') }}" method="post" class="flex">
                {{ csrf_field() }}
                <div class="flex-grow mr-2">
                    <input type="email" name="email" placeholder="Ihre E-Mail Adresse">
                </div>

                <div class="flex-shrink">
                    <button type="submit" class="bg-white bg-opacity-10 rounded-xl p-3 flex justify-center items-center">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22 2L11 13" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M22 2L15 22L11 13L2 9L22 2Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>                        
                    </button>
                </div>
            </form>
        </section>

        <section id="cta-support" class="bg-black px-6 py-10 z-20 relative">
            <h2 class="text-large">Oder darf ich Sie bei Ihren <span class="neon neon-flat">Ambitionen</span> unterstützen?</h2>
            <p class="py-8">Möchten Sie sich digital positionieren und Ihre Produkte online anbieten? Oder Ihre Arbeitsprozesse digitalisieren? Egal welche Ambitionen Sie angehen, ich lade Sie herzlich zu einem spontanen Brainstorming ein.</p>
            <div class="grid grid-cols-4 gap-2 mt-8">
                <x-link-button class="z-10" href="tel:+41763887018">Anruf</x-link-button>
                <x-link-button class="z-10" href="mailto:hello@lukacmarko.com">E-Mail</x-link-button>
                <x-link-button class="z-10" href="sms:+41763887018">SMS</x-link-button>
                <x-link-button class="z-10" href="https://t.me/maroluke">Telegram</x-link-button>
            </form>
        </section>

        <section id="portrait" class="bg-black px-6 py-10 z-20 relative">
            <div class="grid grid-cols-12 gap-2">
                <div class="col-span-10">
                    <img 
                        src="{{ asset('media/marko-portrait.png') }}" 
                        alt="Portrait Marko Lukac" 
                        class="rounded-xl object-cover">
                </div>

                <div class="col-span-2 flex flex-col">
                        <a href="https://github.com/maroluke" class="pl-4 py-4"><x-icon-logo-github /></a>
                        <a href="https://www.instagram.com/maroluke/" class="pl-4 py-4"><x-icon-logo-instagram /></a>
                        <a href="https://unsplash.com/@maroluke" class="pl-4 py-4"><x-icon-logo-unsplash /></a>
                        <a href="https://soundcloud.com/maroluke" class="pl-4 py-6"><x-icon-logo-soundcloud /></a>
                </div>
            </div>
        </section>

        <section id="footer" class="z-20 relative">
            <div class="px-6 py-10 flex flex-col opacity-50">
                <div class="text-sm py-5 border-t leading-6">
                    <div class="flex">
                        <h4 class="uppercase mb-3 tracking-wider">Credits</h4>
                    </div>

                    <div class="flex">
                        <p class="flex-1 font-bold">MacBook #1</p>
                        <p class="flex-1 font-bold"><a class="hover:text-gray-300" href="https://unsplash.com/photos/RcqjrGPDWl4">Hustler's Fuel</a></p>
                    </div>

                    <div class="flex">
                        <p class="flex-1 font-bold">Mobile Phone</p>
                        <p class="flex-1 font-bold"><a class="hover:text-gray-300" href="/">Marko Lukac</a></p>
                    </div>

                    <div class="flex">
                        <p class="flex-1 font-bold">MacBook #2</p>
                        <p class="flex-1 font-bold"><a class="hover:text-gray-300" href="https://unsplash.com/photos/5sT07dJl65s">Anthony Garand</a></p>
                    </div>

                    <div class="flex">
                        <p class="flex-1 font-bold">Portrait</p>
                        <p class="flex-1 font-bold"><a class="hover:text-gray-300" href="https://www.laurentburst.com/">Laurent Burst</a></p>
                    </div>

                    <div class="flex">
                        <p class="flex-1 font-bold">Hello World</p>
                        <p class="flex-1 font-bold"><a class="hover:text-gray-300" href="https://unsplash.com/photos/vDRhC3PAHx0">Marko Lukac</a></p>
                    </div>

                    <div class="flex">
                        <p class="flex-1 font-bold">Code Editor</p>
                        <p class="flex-1 font-bold"><a class="hover:text-gray-300" href="https://images.unsplash.com/photo-1547954575-855750c57bd3">Reza Namdari</a></p>
                    </div>
                </div>

                <div class="text-sm py-5 leading-6">
                    <div class="flex">
                        <h4 class="uppercase mb-3 tracking-wider">Development stack</h4>
                    </div>

                    <div class="grid grid-cols-3 place-items-stretch justify-items-stretch auto-rows-max auto-cols-max">
                        <a href="https://github.com/laravel/framework" class="flex items-center h-10">
                            <x-icon-logo-laravel class="hover:opacity-75"/>
                        </a>

                        <a href="https://github.com/alpinejs/alpine/" class="flex items-center h-10">
                            <x-icon-logo-alpinejs class="hover:opacity-75"/>
                        </a>

                        <a href="https://github.com/tailwindlabs/tailwindcss" class="flex items-center h-10">
                            <x-icon-logo-tailwindcss class="hover:opacity-75"/>
                        </a>
                        
                        <a href="https://github.com/deployphp/deployer" class="flex items-center h-10">
                            <x-icon-logo-deployer class="hover:opacity-75"/>
                        </a>

                        <a href="https://github.com/nolimits4web/swiper" class="flex items-center h-10">
                            <x-icon-logo-swiperjs class="hover:opacity-75"/>
                        </a>
                    </div>
                </div>

                <div class="text-sm py-5 leading-6">
                    <div class="flex">
                        <p class="flex-1 font-bold">Version</p>
                        <p class="flex-1 font-bold">1.0</p>
                    </div>

                    <div class="flex">
                        <p class="flex-1 font-bold">Last update</p>
                        <p class="flex-1 font-bold">24. Juli 2021</p>
                    </div>

                    <div class="flex">
                        <p class="flex-1 font-bold">Optimized for</p>
                        <p class="flex-1 font-bold">Mobile & Desktop Browsers</p>
                    </div>

                    <div class="flex">
                        <p class="flex-1 font-bold">Github Repository</p>
                        <p class="flex-1 font-bold"><a class="hover:text-gray-300" href="https://github.com/maroluke/portfolio21">maroluke/portfolio21</a></p>
                    </div>
                </div>

                <div class="text-sm py-5 leading-6">
                    <div class="">
                        <p class="font-bold">© 2021</p>
                        <p class="font-bold">Marko Lukac</p>
                        <p class="font-bold"><a href="mailto:hello@lukacmarko.com" class="hover:opacity-75">hello@lukacmarko.com</a></p>
                    </div>
                </div>
            </div>
        </section>

        {{-- <div x-data="{ open: false }">
            <button @click="open = true">Open Dropdown</button>

            <ul
                x-show="open"
                @click.away="open = false"
            >
                Dropdown Body
            </ul>
        </div> --}}
    @stop
</x-layout>