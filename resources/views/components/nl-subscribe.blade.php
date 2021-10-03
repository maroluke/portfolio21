<section class="px-6 py-10 z-20 relative max-w-lg mx-auto">
    <h2><span class="bg-clip-text neon neon-flat">Neugierig</span> auf weitere spannende Projekte?</h2>
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
        <p class="messages text-sm pt-2 opacity-30">Sichere Datenübertragung</p>
    </div>
</section>