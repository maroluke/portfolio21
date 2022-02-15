<section id="cta-employers" class="px-6 py-20 z-20 relative">
    <div class="mx-auto sm:container md:flex lg:justify-end md:gap-8 xl:max-w-screen-lg">
        <div class="md:w-2/6">
            <h2>@lang('Suchen Sie ')<span class="bg-clip-text neon neon-flat">@lang('Verstärkung')</span>@lang(' für Ihr Team?')</h2>
        </div>

        <div class="md:w-4/6 lg:w-3/6">
            <p class="pt-8 text-small md:pt-0">@lang('Ich bin jederzeit offen für neue und spannende Aufgaben, wo ich meine Kompetenzen sinnvoll einbringen und erweitern darf.')</p>
            <p class="pt-8 text-small">@lang('Meine Fachkenntnisse stelle ich Ihnen in den folgenden Bereichen zur Verfügung:')</p>
            
            <ul class="pt-8 flex flex-col gap-4">
                <li class="flex-1 flex"><p class="w-full text-small font-bolder"><span class="text-blue-400">&#8680;</span> @lang('Fullstack Web Developer')</p></li><!-- (Laravel, TailwindCSS, AlpineJS, WordPress) -->
                <li class="flex-1 flex"><p class="w-full text-small font-bolder"><span class="text-blue-400">&#8680;</span> @lang('Project Manager Web')</p></li>
                <li class="flex-1 flex"><p class="w-full text-small font-bolder"><span class="text-blue-400">&#8680;</span> @lang('Product Owner')</p></li>
            </ul>

            <p class="py-8 text-small">@lang('Falls Sie interessiert sind, dürfen Sie gerne mein Kurzprofil als PDF anfordern:')</p>

            <form action="POST" class="flex flex-wrap max-w-sm" data-context="submitCvEmail">
                {{ csrf_field() }}
                <div class="flex-1 mr-2">
                    <input id="email-cv" class="email-input border-2 border-neon-blue border-opacity-75 shadow-button bg-neon-blue bg-opacity-10 hover:border-opacity-100 hover:bg-opacity-20 focus:outline-none focus:border-opacity-100 focus:bg-black focus:bg-opacity-75" type="email" name="email" placeholder="@lang('Ihre E–Mail Adresse')" required pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}">
                </div>

                <div class="flex-shrink">
                    <button type="submit" class="group relative btn-submit bg-neon-blue bg-opacity-10 rounded-xl flex justify-center items-center shadow-button border-2 border-neon-blue border-opacity-75 hover:border-opacity-100 hover:bg-opacity-30">
                        <span class="icon-send top-0 left-0 absolute w-full h-full p-2">
                            <x-icon-icon-send class="w-full h-full stroke-neon-blue group-hover:stroke-neon-blue-dark" />
                        </span>

                        <span class="icon-loading animate-spin hidden top-0 left-0 absolute w-full h-full p-2">
                            <x-icon-icon-loading class="w-full h-full stroke-neon-blue group-hover:stroke-neon-blue-dark" />
                        </span>

                        <span class="icon-submitted hidden top-0 left-0 absolute w-full h-full p-2">
                            <x-icon-icon-submitted class="w-full h-full stroke-neon-green" />
                        </span>

                        <span class="icon-error hidden top-0 left-0 absolute w-full h-full p-2">
                            <x-icon-icon-error class="w-full h-full stroke-neon-blue group-hover:stroke-neon-blue-dark" />
                        </span>
                    </button>
                </div>

                <div class="relative h-6 error flex-none w-full">
                    <p class="messages text-sm pt-2 text-gray-500">@lang('Die E–Mail Adresse wird nicht erfasst.')</p>
                </div>
            </form>

            <div class="grid grid-cols-4 gap-2 mt-8">
                <x-link-button class="z-10 px-1" href="tel:+41763887018">@lang('Anruf')</x-link-button>
                <x-link-button class="z-10 px-1" href="mailto:hello@markolukac.ch">@lang('E-Mail')</x-link-button>
                <x-link-button class="z-10 px-1" href="sms:+41763887018">@lang('SMS')</x-link-button>
                <x-link-button class="z-10 px-1" href="https://t.me/maroluke">Tlgrm</x-link-button>
            </div>
        </div>
    </div>
</section>