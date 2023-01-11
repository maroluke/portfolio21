<div x-cloak x-show="$store.modal.showModalCV" class="fixed top-0 left-0 w-full h-full flex flex-col justify-center items-center z-50 bg-black bg-opacity-75 p-3">
    <form method="POST" class="p-5 flex flex-wrap max-w-sm bg-dirty-white rounded-xl" data-context="submitNlEmail">
        <p class="text-black mb-5 text-xl">Erlauben Sie mir Ihnen meinen CV per E-Mail zuzustellen:</p>
        {{ csrf_field() }}
        <div class="flex-1 mr-2">
            <input id="email-nl" class="email-input shadow-inner bg-black bg-opacity-5 hover:border-opacity-100 hover:bg-opacity-20 focus:outline-none focus:border-opacity-100 focus:bg-white" type="email" name="email" placeholder="@lang('Ihre E–Mail Adresse')" required pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}">
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
            <p class="messages pl-1 text-xs pt-2 text-gray-500">@lang('Ihre E–Mail Adresse wird nicht erfasst.')</p>
        </div>

        <div @click="$store.modal.toggleCV().prevent" class="mt-5 w-full">
            <x-link-button class="z-10 px-1 text-black bg-[#fff] rounded-lg bg-opacity-85 tracking-wider cursor-pointer">@lang('Abbrechen')</x-link-button>
        </div>
    </form>
</div>