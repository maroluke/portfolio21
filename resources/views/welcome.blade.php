<x-layout>
    @section('content')
        <section id="entry" class="px-6 flex fixed top-0 bottom-0 left-0 right-0">
            <div class="flex flex-col text-white pb-6 h-full justify-end">
                <div class="flex justify-end">
                    <h1 class="bg-clip-text neon neon-wide mb-20">
                        <span class="block bg-clip-text text-transparent">Hallo,<br />Mein Name ist Marko.<br /><br />Ich entwickle digitale Produkte.</span>
                    </h1>
                </div>

                <div>
                    <div class="grid grid-cols-2 gap-2">
                        <x-button route="home" class="flex-1 bg-white">Kontaktieren</x-button>

                        <x-button route="home" class="flex-1 bg-white">CV holen</x-button>
                    </div>

                    <div class="mt-5 opacity-30">
                        <p class="font-heading text-center text-sm tracking-widest animate-swipe opacity-0 transform translate-y-full">Swipe</p>
                    </div>
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
                    <h2 class="text-large">Vom Programmierer zum Problemlöser</h2>

                    <p class="mt-10">Marko unterstützt Menschen sowie Unternehmungen bei der Ideenfindung und entwickelt digitale und nutzerzentrierte Lösungen.</p>
                    <p class="mt-10">Mit seiner Expertise als vieljähriger Software–Entwickler versteht er es, die Lücken zwischen Idee und Technologie zu schliessen.</p>
                </div>

                <img class="-my-20 parallax" src="{{ asset('media/hello-world.png') }}" alt="Hello World - Lissabon">

                {{-- <div class="px-6">
                    <p></p>
                </div> --}}
            </div>
        </section>

        <section id="references" class="bg-black  z-20 relative">
            <div class="card-slider">
                {{-- <div class="flex justify-between items-center px-6 py-4">
                    <h2 class="text-large">Ausgewählte Referenzen</h2>
                </div>

                <div class="pagination z-10 grid grid-flow-col justify-start px-6 gap-2 items-center py-3"></div> --}}
                
                <div class="swiper bg-black">
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide px-2">
                            <div class="rounded-2xl overflow-hidden text-white">
                                <div class="image relative">
                                    <img src="{{ asset('media/restaurant.png') }}" alt="Working at naanu restaurant">

                                    <div class="w-full h-full bg-black bg-opacity-40 absolute bottom-0 left-0 flex items-end">
                                        <h3 class="text-medium p-5 text-white align-text-bottom">Naanu Take&Eat Restaurant</h3>
                                    </div>
                                </div>

                                <div class="bg-white text-black p-5">
                                    <p class="py-2">Gemeinsam im Team erarbeitete Marko eine e–Commerce Lösung und setzte diese zusammen mit weiteren Verbesserungen erfolgreich um.</p>
                                    {{-- <p class="py-2 text-base">Die feinen Gerichte vom Naanu Take&Eat Restaurant® sollten neu auch im Internet verfügbar sein. Takeout sowie auch Home Delivery.</p> --}}
                                    <x-button route="home" class="bg-black mt-5">Erfahren Sie mehr</x-button>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide px-2">
                            <div class="rounded-2xl overflow-hidden text-white">
                                <div class="image relative">
                                    <img src="{{ asset('media/webpage-fundament.png') }}" alt="Fundament Web Page">

                                    <div class="w-full h-full bg-black bg-opacity-40 absolute bottom-0 left-0 flex items-end">
                                        <h3 class="text-medium p-5 text-white align-text-bottom">Fundament AG</h3>
                                    </div>
                                </div>

                                <div class="bg-white text-black p-5">
                                    <p class="py-2">Für das neu gegründete Startup wirkte Marko im Branding–Prozess mit und entwickelte die Unternehmens–Website.</p>
                                    {{-- <p class="py-2 text-base">Das Branding des neu gegründeten Startups sollte Nachhaltigkeit sowie Unternehmertum vermitteln. Die Website potenzielle Kunden ansprechen und überzeugen.</p> --}}
                                    <x-button route="home" class="bg-black mt-5">Erfahren Sie mehr</x-button>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide px-2">
                            <div class="rounded-2xl overflow-hidden text-white">
                                <div class="image relative">
                                    <img src="{{ asset('media/restaurant.png') }}" alt="Working at naanu restaurant">

                                    <div class="w-full h-full bg-black bg-opacity-40 absolute bottom-0 left-0 flex items-end">
                                        <h3 class="text-medium p-5 text-white align-text-bottom">Generation Purpose</h3>
                                    </div>
                                </div>

                                <div class="bg-white text-black p-5">
                                    <p class="py-2">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                                    <x-button route="home" class="bg-black mt-5">Erfahren Sie mehr</x-button>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide px-2">
                            <div class="rounded-2xl overflow-hidden text-white">
                                <div class="image relative">
                                    <img src="{{ asset('media/restaurant.png') }}" alt="Working at naanu restaurant">

                                    <div class="w-full h-full bg-black bg-opacity-40 absolute bottom-0 left-0 flex items-end">
                                        <h3 class="text-medium p-5 text-white align-text-bottom">Coffaina</h3>
                                    </div>
                                </div>

                                <div class="bg-white p-5">
                                    <p class="py-2">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                                    <x-button route="home" class="bg-black mt-5">Erfahren Sie mehr</x-button>
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
            <h2 class="text-large">Suchen Sie <span class="bg-clip-text neon neon-flat">Verstärkung</span> Für Ihr Team?</h2>
            <p class="py-8">Holen Sie sich meine Bewerbungsunterlagen. Tragen Sie dazu einfach Ihre E-Mail Adresse ein und ich schicke Ihnen die Dokumente als PDF.</p>
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
            <h2 class="text-large">Oder darf ich Sie bei Ihren <span class="bg-clip-text neon neon-flat">Ambitionen</span> unterstützen?</h2>
            <p class="py-8">Möchten Sie sich digital positionieren, Produkte online anbieten oder Arbeitsprozesse digitalisieren? Egal welchen Ambitionen Sie nachgehen, ich lade Sie herzlich zu einem spontanen Brainstorming ein.</p>
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
                        <a href="https://github.com/maroluke" target="_blank" class="pl-4 py-4"><x-icon-logo-github /></a>
                        <a href="https://www.instagram.com/maroluke/" target="_blank" class="pl-4 py-4"><x-icon-logo-instagram /></a>
                        <a href="https://unsplash.com/@maroluke" target="_blank" class="pl-4 py-4"><x-icon-logo-unsplash /></a>
                        <a href="https://soundcloud.com/maroluke" target="_blank" class="pl-4 py-6"><x-icon-logo-soundcloud /></a>
                </div>
            </div>
        </section>

        <section id="footer" class="z-20 relative">
            <div class="py-10 flex flex-col opacity-50">
                <div class="text-base py-5 leading-6">
                    <div class="flex bg-white bg-opacity-20 text-white align-center py-2 px-6 mb-3">
                        <h4 class="uppercase tracking-wider">Credits</h4>
                    </div>

                    <div class="flex px-6">
                        <p class="flex-1">MacBook #1</p>
                        <p class="flex-1"><a class="hover:text-gray-300 underline" target="_blank" href="https://unsplash.com/photos/RcqjrGPDWl4">Hustler's Fuel</a></p>
                    </div>

                    <div class="flex px-6">
                        <p class="flex-1">Mobile Phone</p>
                        <p class="flex-1"><a class="hover:text-gray-300 underline" target="_blank" href="/">Marko Lukac</a></p>
                    </div>

                    <div class="flex px-6">
                        <p class="flex-1">MacBook #2</p>
                        <p class="flex-1"><a class="hover:text-gray-300 underline" target="_blank" href="https://unsplash.com/photos/5sT07dJl65s">Anthony Garand</a></p>
                    </div>

                    <div class="flex px-6">
                        <p class="flex-1">Portrait</p>
                        <p class="flex-1"><a class="hover:text-gray-300 underline" target="_blank" href="https://www.laurentburst.com/">Laurent Burst</a></p>
                    </div>

                    <div class="flex px-6">
                        <p class="flex-1">Hello World</p>
                        <p class="flex-1"><a class="hover:text-gray-300 underline" target="_blank" href="https://unsplash.com/photos/vDRhC3PAHx0">Marko Lukac</a></p>
                    </div>

                    <div class="flex px-6">
                        <p class="flex-1">Code Editor</p>
                        <p class="flex-1"><a class="hover:text-gray-300 underline" target="_blank" href="https://images.unsplash.com/photo-1547954575-855750c57bd3">Reza Namdari</a></p>
                    </div>
                </div>

                <div class="text-base pt-5 leading-6">
                    <div class="flex bg-white bg-opacity-20 text-white align-center p-1 bg-white bg-opacity-20 text-white align-center py-2 px-6 mb-3">
                        <h4 class="uppercase tracking-wider">Development stack</h4>
                    </div>

                    <div class="grid grid-cols-3 place-items-stretch justify-items-stretch auto-rows-max auto-cols-max px-6">
                        <a href="https://github.com/laravel/framework" target="_blank" class="flex items-center h-16">
                            <x-icon-logo-laravel class="hover:opacity-75"/>
                        </a>

                        <a href="https://github.com/alpinejs/alpine/" target="_blank" class="flex items-center h-16">
                            <x-icon-logo-alpinejs class="hover:opacity-75"/>
                        </a>

                        <a href="https://github.com/tailwindlabs/tailwindcss" target="_blank" class="flex items-center h-16">
                            <x-icon-logo-tailwindcss class="hover:opacity-75"/>
                        </a>
                        
                        <a href="https://github.com/deployphp/deployer" target="_blank" class="flex items-center h-16">
                            <x-icon-logo-deployer class="hover:opacity-75"/>
                        </a>

                        <a href="https://github.com/nolimits4web/swiper" target="_blank" class="flex items-center h-16">
                            <x-icon-logo-swiperjs class="hover:opacity-75"/>
                        </a>
                    </div>
                </div>

                <div class="text-base pt-5 leading-6">
                    <div class="flex bg-white bg-opacity-20 text-white align-center py-2 px-6 mb-3">
                        <h4 class="uppercase tracking-wider">Runs on a Droplet by</h4>
                    </div>

                    <div class="grid grid-cols-3 place-items-stretch justify-items-stretch auto-rows-max auto-cols-max px-6">
                        <a href="https://www.digitalocean.com/products/droplets/" class="flex items-center h-16">
                            <x-icon-logo-digitalocean class="hover:opacity-75"/>
                        </a>
                    </div>
                </div>

                <div class="pt-10 pb-5 leading-6 px-6">
                    <div class="flex">
                        <p class="flex-1">Last update</p>
                        <p class="flex-1">24. Juli 2021</p>
                    </div>

                    <div class="flex">
                        <p class="flex-1">Github Repository</p>
                        <p class="flex-1"><a class="hover:text-gray-300 underline" href="https://github.com/maroluke/portfolio21" target="_blank">maroluke/portfolio21</a></p>
                    </div>
                </div>

                <div class="text-base py-5 leading-6 px-6">
                    <div class="">
                        <p class="">© 2021</p>
                        <p class="">Marko Lukac</p>
                        <p class=""><a href="mailto:hello@lukacmarko.com" target="_blank" class="hover:opacity-75 underline">hello@lukacmarko.com</a></p>
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