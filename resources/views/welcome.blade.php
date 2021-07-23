<x-layout>
    @section('content')
        <section id="entry" class="px-6 pt-32">
            <div class="flex flex-col justify-center text-white">
                <h1 class="bg-clip-text neon neon-wide">
                    <span class="block bg-clip-text text-transparent">Hallo, Mein Name ist Marko.
                        Ich entwickle digitale Produkte.</span>
                </h1>

                <div class="grid grid-cols-2 gap-2 my-10">
                    <x-button route="home" class="flex-1">Kontaktieren</x-button>

                    <x-button route="home" class="flex-1">CV holen</x-button>
                </div>
            </div>
        </section>

        <section id="intro" class="bg-black pb-20">
            <div class="flex justify-end">
                <div class="w-2/3">
                    <img src="{{ asset('media/mobile-screen-fundament.png') }}" alt="Mobile Screen">
                </div>
            </div>

            <div class="px-6 relative">
                <h2 class="text-large mb-10">Das Internet ist ein Ort voller möglichkeiten.</h2>

                <p>Im Augenblick ist man drin. Jederzeit. Es ist längst ein Teil von uns geworden und wir verweben uns immer mehr darin. Die Erreichbarkeit war nie einfacher und nur einen Wisch entfernt. Wir können aber auch Prozesse optimieren und benutzerdefinierte Anwendungen bauen, um völlig neue Wege zu gehen.</p>
            </div>

            <img class="-mb-32 -mt-48" src="{{ asset('media/hello-world.png') }}" alt="Hello World - Lissabon">

            <div class="px-6">
                <p>Ich unterstütze Menschen und Unternehmen, sich in dieser Welt erfolgreich zu positionieren und strebe stets nach dem maximalen Potenzial.

                    Sie profitieren von meiner Expertise als langjähriger und passionierter Web Entwickler mit den Schwerpunkten Frontend und Wordpress. Danach realisierte ich spannende Projekte im Team sowie in leiteneden Funktionen. Es ist aber auch die Freude am Entwerfen von ästhetischen und praktischen Anwendungen sowie Auftritten.</p>
            </div>
        </section>

        <section id="references" class="bg-black">
            <div class="card-slider">
                <div class="swiper-container">
                    <div class="flex justify-between items-center px-6 py-4">
                        <h2 class="text-small tracking-wider">Referenzen</h2>
                        <div class="pagination z-10 grid grid-flow-col justify-end gap-2 items-center"></div>
                    </div>

                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide px-3 last:pr-3">
                            <div class="rounded-xl overflow-hidden text-black">
                                <div class="image">
                                    <img src="{{ asset('media/restaurant.png') }}" alt="Working at naanu restaurant">
                                </div>

                                <div class="bg-white p-5">
                                    <h3 class="text-medium">naanu take&eat restaurant</h3>
                                    <p class="py-5">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                                    <div class="flex items-center">
                                        <div class="flex-grow pr-5">
                                            <span class="link-line bg-neon-pink"></span>
                                            <span class="link-line bg-neon-laguna"></span>
                                        </div>
                                        <a class="flex-shrink text-small font-heading tracking-wider py-4" href="">Mehr erfahren</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide px-3 last:pr-3">
                            <div class="rounded-xl overflow-hidden text-black">
                                <div class="image">
                                    <img src="{{ asset('media/restaurant.png') }}" alt="Working at naanu restaurant">
                                </div>

                                <div class="bg-white p-5">
                                    <h3 class="text-medium">naanu take&eat restaurant</h3>
                                    <p class="py-5">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                                    <div class="flex items-center">
                                        <div class="flex-grow pr-5">
                                            <span class="link-line bg-neon-pink"></span>
                                            <span class="link-line bg-neon-laguna"></span>
                                        </div>
                                        <a class="flex-shrink text-small font-heading tracking-wider py-4" href="">Mehr erfahren</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide px-3 last:pr-3">
                            <div class="rounded-xl overflow-hidden text-black">
                                <div class="image">
                                    <img src="{{ asset('media/restaurant.png') }}" alt="Working at naanu restaurant">
                                </div>

                                <div class="bg-white p-5">
                                    <h3 class="text-medium">naanu take&eat restaurant</h3>
                                    <p class="py-5">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                                    <div class="flex items-center">
                                        <div class="flex-grow pr-5">
                                            <span class="link-line bg-neon-pink"></span>
                                            <span class="link-line bg-neon-laguna"></span>
                                        </div>
                                        <a class="flex-shrink text-small font-heading tracking-wider py-4" href="">Mehr erfahren</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide px-3 last:pr-3">
                            <div class="rounded-xl overflow-hidden text-black">
                                <div class="image">
                                    <img src="{{ asset('media/restaurant.png') }}" alt="Working at naanu restaurant">
                                </div>

                                <div class="bg-white p-5">
                                    <h3 class="text-medium">naanu take&eat restaurant</h3>
                                    <p class="py-5">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                                    <div class="flex items-center">
                                        <div class="flex-grow pr-5">
                                            <span class="link-line bg-neon-pink"></span>
                                            <span class="link-line bg-neon-laguna"></span>
                                        </div>
                                        <a class="flex-shrink text-small font-heading tracking-wider py-4" href="">Mehr erfahren</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="full-image bg-black">
            <img class="floating" src="{{ asset('media/macbook-2.png') }}" alt="MacBook">
        </section>

        <section id="cta-employers" class="bg-black px-6 py-10">
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

        <section id="cta-support" class="bg-black px-6 py-10">
            <h2 class="text-large">Oder darf ich Sie bei Ihren <span class="neon neon-flat">Ambitionen</span> unterstützen?</h2>
            <div class="grid grid-cols-4 gap-2 mt-8">
                <x-link-button class="z-10" href="tel:+41763887018">Anruf</x-link-button>
                <x-link-button class="z-10" href="mailto:hello@lukacmarko.com">E-Mail</x-link-button>
                <x-link-button class="z-10" href="sms:+41763887018">SMS</x-link-button>
                <x-link-button class="z-10" href="https://t.me/maroluke">Telegram</x-link-button>
            </form>
        </section>

        <section id="portrait" class="bg-black px-6 py-10">
            <div class="grid grid-cols-10 gap-2">
                <div class="col-span-7">
                    <img 
                        src="{{ asset('media/marko-portrait.png') }}" 
                        alt="Portrait Marko Lukac" 
                        class="rounded-xl object-cover">
                </div>

                <div class="col-span-3 grid grid-cols-1 gap-2 justify-items-stretch">
                    <x-link-button href="tel:+41763887018">
                        <x-icon-logo-github/>
                        Github                          
                    </x-link-button>

                    <x-link-button href="mailto:hello@lukacmarko.com">
                        <x-icon-logo-instagram/>
                        Instagram    
                    </x-link-button>

                    <x-link-button href="sms:+41763887018">
                        <x-icon-logo-unsplash/>
                        Unsplash
                    </x-link-button>

                    <x-link-button href="https://t.me/maroluke">
                        <x-icon-logo-soundcloud/>
                        Soundcloud
                    </x-link-button>
                </div>
            </div>
        </section>

        <section id="footer" class="">
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
                        <h4 class="uppercase mb-3 tracking-wider">Framework stack</h4>
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