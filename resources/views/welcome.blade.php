<x-layout>
    @section('content')
        <div class="entry-fade absolute top-0 left-0 right-0 bottom-0 w-full opacity-100 z-50">
            <div class="absolute -top-full left-0 right-0 bottom-0 w-full h-full bg-gradient-to-b from-transparent to-black"></div>
            <div class="absolute top-0 left-0 right-0 bottom-0 w-full h-full bg-black"></div>
        </div>

        <x-entry />

        <div id="intro-gradient" class="bg-gradient-to-t from-black h-64 w-full relative z-10"></div>

        <div class="bg-black relative">
            <x-intro />

            <x-references />

            <section class="full-image z-10 relative -my-20 sm:-my-64">
                <img class="parallax" src="{{ asset('media/hello-world.png') }}" alt="Hello World - Lisboa">
            </section>

            <x-cta-support />

            <section class="full-image z-10 relative">
                <img class="floating" src="{{ asset('media/macbook-2.png') }}" alt="MacBook">
            </section>

            <x-cta-employers />

            <x-portrait />

            <section class="px-6 py-10 z-20 relative">
                <h2>Neugierig auf weitere spannende Projekte?</h2>
                <p class="py-8 text-small">Es würde mich freuen, Sie mit Neuigkeiten auf dem Laufenden zu halten.</p>

                <form method="POST" class="flex" data-context="submitNlEmail">
                    {{ csrf_field() }}
                    <div class="flex-grow mr-2">
                        <input id="email-nl" class="email-input" type="email" name="email" placeholder="Ihre E-Mail Adresse" required pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}">
                    </div>

                    <div class="flex-shrink">
                        <button type="submit" class="relative btn-submit bg-white bg-opacity-10 rounded-xl flex justify-center items-center">
                            <span class="icon-send top-0 left-0 absolute w-full h-full p-2">
                                <x-icon-icon-send class="w-full h-full" />
                            </span>

                            <span class="icon-loading animate-spin hidden top-0 left-0 absolute w-full h-full p-2">
                                <x-icon-icon-loading class="w-full h-full" />
                            </span>

                            <span class="icon-submitted hidden top-0 left-0 absolute w-full h-full p-2">
                                <x-icon-icon-submitted class="w-full h-full" />
                            </span>

                            <span class="icon-error hidden top-0 left-0 absolute w-full h-full p-2">
                                <x-icon-icon-error class="w-full h-full" />
                            </span>
                        </button>
                    </div>
                </form>

                <div class="relative h-6">
                    <p class="messages text-sm pt-2">Sichere Übertragung</p>
                </div>
            </section>

            <x-footer />
        </div>

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