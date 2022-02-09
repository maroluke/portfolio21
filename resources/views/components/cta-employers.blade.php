<section id="cta-employers" class="px-6 py-20 z-20 relative">
    <div class="mx-auto sm:container md:flex lg:justify-end md:gap-8 xl:max-w-screen-lg">
        <div class="md:w-2/6">
            <h2>@lang('Suchen Sie ')<span class="bg-clip-text neon neon-flat">@lang('Verstärkung')</span>@lang(' für Ihr Team?')</h2>
        </div>

        <div class="md:w-4/6 lg:w-3/6">
            <p class="pt-8 text-small sm:pt-0">@lang('Zur Zeit bin ich offen für neue spannende Aufgaben.')</p>
            <p class="pt-8 text-small">@lang('Gerne stelle ich ihnen meine Fachkompetenzen in den folgenden Bereichen zur Verfügung.')</p>            
            
            <ul class="pt-8 flex gap-2">
                <li class="flex-1 border-2 border-neon-blue/50 border-dashed p-3 rounded-2xl flex items-center"><p class="text-center font-bold font-button text-small-screen uppercase">Fullstack Web Developer</p></li><!-- (Laravel, TailwindCSS, AlpineJS, WordPress) -->
                <li class="flex-1 border-2 border-neon-blue/50 border-dashed p-3 rounded-2xl flex items-center"><p class="text-center font-bold font-button text-small-screen uppercase">Project Manager Web</p></li>
                <li class="flex-1 border-2 border-neon-blue/50 border-dashed p-3 rounded-2xl flex items-center"><p class="text-center font-bold font-button text-small-screen uppercase">Product Owner Web</p></li>
            </ul>

            <p class="py-8 text-small">@lang('Falls ich Ihr Interesse geweckt habe, dürfen Sie gerne mein Kurzprofil als PDF anfordern:')</p>

            <form action="POST" class="flex" data-context="submitCvEmail">
                {{ csrf_field() }}
                <div class="flex-grow mr-2">
                    <input id="email-cv" class="email-input border-2 border-neon-blue border-opacity-75 shadow-button bg-neon-blue bg-opacity-10 hover:border-opacity-100 hover:bg-opacity-20 focus:outline-none focus:border-opacity-100 focus:bg-black focus:bg-opacity-75" type="email" name="email" placeholder="@lang('Ihre E–Mail Adresse')" required pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}">
                </div>

                <div class="flex-shrink">
                    <button type="submit" class="group relative btn-submit bg-neon-blue bg-opacity-10 rounded-xl flex justify-center items-center border-2 border-neon-blue border-opacity-75 hover:border-opacity-100 hover:bg-opacity-20 shadow-button">
                        <span class="icon-send top-0 left-0 absolute w-full h-full p-2">
                            <x-icon-icon-send class="w-full h-full stroke-neon-blue group-hover:stroke-neon-blue-dark" />
                        </span>

                        <span class="icon-loading animate-spin hidden top-0 left-0 absolute w-full h-full p-2">
                            <x-icon-icon-loading class="w-full h-full stroke-neon-blue group-hover:stroke-neon-blue-dark" />
                        </span>

                        <span class="icon-submitted hidden top-0 left-0 absolute w-full h-full p-2">
                            <x-icon-icon-submitted class="w-full h-full stroke-neon-blue group-hover:stroke-neon-blue-dark" />
                        </span>

                        <span class="icon-error hidden top-0 left-0 absolute w-full h-full p-2">
                            <x-icon-icon-error class="w-full h-full stroke-neon-blue group-hover:stroke-neon-blue-dark" />
                        </span>
                    </button>
                </div>
            </form>

            <div class="relative h-6 error">
                <p class="messages text-sm pt-2 opacity-50">@lang('Die E–Mail Adresse wird nicht erfasst.')</p>
            </div>

            <p class="pt-8 text-small">@lang('Ich freue mich auf Ihre Kontaktaufnahme.')</p>

            <div class="grid grid-cols-4 gap-2 mt-8">
                <x-link-button class="z-10 px-1" @click="open = true">@lang('Anruf')</x-link-button>
                <x-link-button class="z-10 px-1" href="mailto:hello@markolukac.ch">@lang('E-Mail')</x-link-button>
                <x-link-button class="z-10 px-1" href="sms:+41763887018">SMS</x-link-button>
                <x-link-button class="z-10 px-1" href="https://t.me/maroluke">Tlgrm</x-link-button>
            </div>
        </div>
    </div>
</section>