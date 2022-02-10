<section id="portrait" class="px-6 py-20 z-20 relative mx-auto bg-gray-100 text-black">
    <div class="sm:mx-auto sm:container md:flex md:gap-24 lg:justify-around xl:max-w-screen-lg">
        <div class="flex gap-2 justify-between sm:order-2 md:w-2/6">
            <div class="relative flex-grow">
                <img 
                    src="{{ asset('media/marko-portrait.png') }}" 
                    alt="Portrait Marko Lukac" 
                    class="rounded-xl object-cover w-full">
            </div>

            <div class="flex flex-col flex-shrink justify-between sm:justify-start sm:gap-2">
                    <a href="https://github.com/maroluke" target="_blank" class="group icon-button bg-neon-blue bg-opacity-10 rounded-xl p-3 border-2 border-neon-blue border-opacity-75 hover:border-opacity-100 shadow-button hover:bg-opacity-20"><x-icon-logo-github class="fill-neon-blue group-hover:fill-neon-blue-dark" /></a>
                    <a href="https://stackoverflow.com/users/8085311/maroluke" target="_blank" class="group icon-button bg-neon-blue bg-opacity-10 rounded-xl p-3 border-2 border-neon-blue border-opacity-75 hover:border-opacity-100 shadow-button hover:bg-opacity-20"><x-icon-logo-stackoverflow class="fill-neon-blue group-hover:fill-neon-blue-dark" /></a>
                    <a href="https://www.linkedin.com/in/maroluke/" target="_blank" class="group icon-button bg-neon-blue bg-opacity-10 rounded-xl p-3 border-2 border-neon-blue border-opacity-75 hover:border-opacity-100 shadow-button hover:bg-opacity-20"><x-icon-logo-linkedin class="fill-neon-blue group-hover:fill-neon-blue-dark" /></a>
                    <a href="https://www.instagram.com/maroluke/" target="_blank" class="group icon-button bg-neon-blue bg-opacity-10 rounded-xl p-3 border-2 border-neon-blue border-opacity-75 hover:border-opacity-100 shadow-button hover:bg-opacity-20"><x-icon-logo-instagram class="fill-neon-blue group-hover:fill-neon-blue-dark" /></a>
                    <a href="https://unsplash.com/@maroluke" target="_blank" class="group icon-button bg-neon-blue bg-opacity-10 rounded-xl p-3 border-2 border-neon-blue border-opacity-75 hover:border-opacity-100 shadow-button hover:bg-opacity-20"><x-icon-logo-unsplash class="fill-neon-blue group-hover:fill-neon-blue-dark" /></a>
                    <a href="https://soundcloud.com/maroluke" target="_blank" class="group icon-button bg-neon-blue bg-opacity-10 rounded-xl p-3 border-2 border-neon-blue border-opacity-75 hover:border-opacity-100 shadow-button hover:bg-opacity-20"><x-icon-logo-soundcloud class="fill-neon-blue group-hover:fill-neon-blue-dark" /></a>
            </div>
        </div>

        <div class="pt-10 sm:order-1 md:w-4/6 lg:w-2/6">
            @if (App::isLocale('zh'))
                <h2>您对其他令人兴奋的项目感到<br /><span class="bg-clip-text neon neon-flat">好奇吗</span>？</h2>
            @else
                <h2><span class="bg-clip-text neon neon-flat">@lang('Neugierig')</span>?</h2>
            @endif

            <p class="py-8 text-small">@lang('Es würde mich freuen, Sie mit Neuigkeiten über meine Arbeit auf dem Laufenden zu halten.')</p>

            <form method="POST" class="flex flex-wrap" data-context="submitNlEmail">
                {{ csrf_field() }}
                <div class="flex-grow mr-2">
                    <input id="email-nl" class="email-input border-2 border-neon-blue border-opacity-75 shadow-button bg-neon-blue bg-opacity-10 hover:border-opacity-100 hover:bg-opacity-20 focus:outline-none focus:border-opacity-100 focus:bg-white focus:bg-opacity-75" type="email" name="email" placeholder="@lang('Ihre E–Mail Adresse')" required pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}">
                </div>

                <div class="flex-shrink">
                    <button type="submit" class="relative btn-submit bg-neon-blue bg-opacity-10 rounded-xl flex justify-center items-center border-2 border-neon-blue border-opacity-75 hover:border-opacity-100 shadow-button hover:bg-opacity-20">
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

                <div class="relative h-6 flex-none">
                    <p class="messages text-sm pt-2 opacity-50">@lang('Die E–Mail Adresse wird nicht erfasst.')</p>
                </div>
            </form>
        </div>
    </div>
</section>