<section id="portrait" class="px-6 py-10 z-20 relative mx-auto bg-gray-100 text-black">
    <div class="max-w-sm mx-auto md:max-w-screen-md md:hidden">
        <x-logo class="text-black" />
        
        <div class="mt-3">
            <x-contact-actions-footer />
        </div>
    </div>
    <div class="max-w-sm mx-auto mt-5 justify-between md:gap-10 md:max-w-screen-md md:flex lg:justify-around">
        <div class="flex-1 gap-5 justify-between flex-nowrap xxs:flex sm:order-2 md:flex-1">
            <div class="relative flex-grow w-full max-w-screen-xxs">
                <img 
                    loading="lazy"
                    src="{{ asset('media/marko-portrait.jpg') }}" 
                    alt="Portrait Marko Lukac" 
                    class="rounded-xl object-cover w-full"
                >
            </div>

            <div class="grid grid-cols-3 gap-2 justify-items-center mt-2 xxs:flex xxs:flex-col xxs:justify-between xxs:mt-0 xxs:gap-0 xxs:grid-cols-1">
                    <a href="https://github.com/maroluke" target="_blank" class="group icon-button bg-[#fff] rounded-xl p-3 shadow-button hover:bg-opacity-20"><x-icon-logo-github class="fill-neon-blue group-hover:fill-neon-blue-dark" /></a>
                    <a href="https://stackoverflow.com/users/8085311/maroluke" target="_blank" class="group icon-button bg-[#fff] rounded-xl p-3 shadow-button hover:bg-opacity-20"><x-icon-logo-stackoverflow class="fill-neon-blue group-hover:fill-neon-blue-dark" /></a>
                    <a href="https://www.linkedin.com/in/maroluke/" target="_blank" class="group icon-button bg-[#fff] rounded-xl p-3 shadow-button hover:bg-opacity-20"><x-icon-logo-linkedin class="fill-neon-blue group-hover:fill-neon-blue-dark" /></a>
                    <a href="https://www.instagram.com/maroluke/" target="_blank" class="group icon-button bg-[#fff] rounded-xl p-3 shadow-button hover:bg-opacity-20"><x-icon-logo-instagram class="fill-neon-blue group-hover:fill-neon-blue-dark" /></a>
                    <a href="https://unsplash.com/@maroluke" target="_blank" class="group icon-button bg-[#fff] rounded-xl p-3 shadow-button hover:bg-opacity-20"><x-icon-logo-unsplash class="fill-neon-blue group-hover:fill-neon-blue-dark" /></a>
                    <a href="https://soundcloud.com/maroluke" target="_blank" class="group icon-button bg-[#fff] rounded-xl p-3 shadow-button hover:bg-opacity-20"><x-icon-logo-soundcloud class="fill-neon-blue group-hover:fill-neon-blue-dark" /></a>
            </div>
        </div>

        <div class="pt-10 sm:order-1 md:flex-1 md:flex md:flex-col md:justify-between md:pt-0">
            <div class="hidden md:block">
                <x-logo class="text-black" />
                
                <div class="mt-3">
                    <x-contact-actions-footer />
                </div>
            </div>

            <div>
                <h2><span class="bg-clip-text neon neon-flat bg-gradient-to-tr from-cyan-500 via-indigo-500 to-pink-500 inline-block">@lang('Neugierig')?</span></h2>

                <p class="py-4 text-small">@lang('Es würde mich freuen, Sie mit Neuigkeiten über meine Arbeit auf dem Laufenden zu halten.')</p>

                <form method="POST" class="flex flex-wrap max-w-sm" data-context="submitNlEmail">
                    {{ csrf_field() }}
                    <div class="flex-1 mr-2">
                        <input id="email-nl" class="email-input shadow-inner bg-black bg-opacity-5 hover:border-opacity-100 hover:bg-opacity-20 focus:outline-none focus:border-opacity-100 focus:bg-dirty-white focus:bg-opacity-75" type="email" name="email" placeholder="@lang('Ihre E–Mail Adresse')" required pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}">
                    </div>

                    <div class="flex-shrink">
                        <button type="submit" class="relative btn-submit bg-[#fff] rounded-xl flex justify-center items-center shadow-button hover:bg-opacity-30">
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

                    <div class="relative h-6 flex-none w-full">
                        <p class="messages pl-1 text-xs pt-2 text-gray-500">@lang('Die E–Mail Adresse wird nicht erfasst.')</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>