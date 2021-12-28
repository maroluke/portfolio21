<section id="cta-employers" class="px-6 py-10 z-20 relative max-w-lg mx-auto">
    <h2>@lang('Suchen Sie ')<span class="bg-clip-text neon neon-flat">@lang('Verstärkung')</span>@lang(' für Ihr Team?')</h2>
    <p class="pt-8 text-small">@lang('Früher als Web– Entwickler tägig, ist mein Potenzial mittlerweile viel grösser in operativen und konzeptionellen Rollen digitaler Produktentwicklung.')</p>
    <p class="pt-8 text-small">@lang('Falls ich Ihr Interesse geweckt habe, dürfen Sie gerne meinen CV als PDF anfordern.')</p>
    <p class="py-8 text-small">@lang('Ich freue mich auf Ihre Kontaktaufnahme.')</p>

    <form method="POST" class="flex" data-context="submitCvEmail">
        {{ csrf_field() }}
        <div class="flex-grow mr-2">
            <input id="email-cv" class="email-input border-2 border-neon-blue border-opacity-75 shadow-button bg-neon-blue bg-opacity-10 hover:border-opacity-100 focus:outline-none focus:border-opacity-100 focus:bg-white focus:bg-opacity-75" type="email" name="email" placeholder="@lang('Ihre E–Mail Adresse')" required pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}">
        </div>

        <div class="flex-shrink">
            <button type="submit" class="relative btn-submit bg-neon-blue bg-opacity-10 rounded-xl flex justify-center items-center border-2 border-neon-blue border-opacity-75 hover:border-opacity-100 shadow-button">
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
        <p class="messages text-sm pt-2 opacity-50">@lang('E-Mail wird nicht gespeichert')</p>
    </div>
</section>