<ul
    x-data="{ open: false }"
    class="contact-options flex gap-6 z-50 w-full justify-center items-center"
>
    <li class="w-10 h-10 block p-2 rounded-lg shadow-button bg-[#fff]">
        <button 
            @click="$store.data.triggerContact($store.data.telURI)"
            class="text-neon-blue w-full h-full"
        >
            <x-icon-icon-call class="fill-neon-blue w-full h-full" />
        </button>
    </li>

    <li class="w-10 h-10 block p-2 rounded-lg shadow-button bg-[#fff]">
        <button
            @click="$store.data.triggerContact($store.data.emailURI)"
            class="text-neon-blue"
        >
            <x-icon-icon-email class="fill-neon-blue w-full h-full" />
        </button>
    </li>

    <li 
        :class="!open ? '' : 'arrow !opacity-100'"
        class="relative w-10 h-10 block p-2 rounded-lg shadow-button bg-[#fff]"
    >
        <button 
            :class="!open ? '' : '!opacity-100'"
            @click="open = ! open"
            class="text-neon-blue"
        >
            <x-icon-icon-imessage class="stroke-neon-blue w-full h-full" />
        </button>

        <ul 
            x-show="open"
            @click.outside="open = false"
            class="bg-dirty-white rounded-md flex flex-col absolute mb-3 bottom-full -right-1/2 py-1"
        >
            <li class="flex-1 border-b border-black/10 px-4 py-2">
                <button 
                    @click="$store.data.triggerContact($store.data.smsURI)"
                    class="text-black font-heading text-sm flex items-center gap-5"
                >
                    <x-icon-icon-imessage class="w-6 stroke-neon-blue" />
                    <span>SMS</span>
                </button>
            </li>

            <li class="flex-1 border-b border-black/10 px-4 py-2">
                <button
                    @click="$store.data.triggerContact($store.data.telegramURI)"
                    class="text-black font-heading text-sm flex items-center gap-5"
                >
                    <x-icon-icon-telegram class=" w-6 stroke-neon-blue" />
                    <span>Telegram</span>
                </button>
            </li>

            <li class="flex-1 px-4 py-2">
                <button
                    @click="$store.data.triggerContact($store.data.whatsappURI)"
                    class="text-black font-heading text-sm flex items-center gap-5"
                >
                    <x-icon-icon-whatsapp class="w-6 stroke-neon-blue" />
                    <span>Whatsapp</span>
                </button>
            </li>
        </ul>
    </li>
</ul>