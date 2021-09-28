<section id="cta-employers" class="px-6 py-10 z-20 relative">
    <h2>Suchen Sie <span class="bg-clip-text neon neon-flat">Verstärkung</span> Für Ihr Team?</h2>
    <p class="pt-8 text-small">Falls ich Ihr Interesse geweckt habe, dürfen Sie gerne meinen CV als PDF anfordern.</p>
    <p class="py-8 text-small">Ich freue mich auf Ihre Kontaktaufnahme.</p>

    <form method="POST" class="flex">
        {{ csrf_field() }}
        <div class="flex-grow mr-2">
            <input id="email" type="email" name="email" placeholder="Ihre E-Mail Adresse" required pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}">
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

    <div class="relative">
        <p class="messages hidden absolute top-0 left-0 text-sm px-2 pt-2"></p>
    </div>
</section>