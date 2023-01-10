<ul
    x-data="{ open: false }"
    class="contact-options flex gap-6 z-50"
>
    <li>
        <button 
            @click="$store.data.triggerContact($store.data.telURI)"
            class="w-5 block text-black font-heading text-micro tracking-widest opacity-75"
        >
            <x-icon-icon-call class="fill-black w-full" />
        </button>
    </li>

    <li>
        <button
            @click="$store.data.triggerContact($store.data.emailURI)"
            class="w-5 block text-black font-heading text-micro tracking-widest opacity-75"
        >
            <x-icon-icon-email class="fill-black w-full" />
        </button>
    </li>

    <li 
        :class="!open ? '' : 'arrow !opacity-100'"
        class="relative"
    >
        <button 
            :class="!open ? '' : '!opacity-100'"
            @click="open = ! open"
            class="w-5 block text-black font-heading text-micro tracking-widest opacity-75"
        >
            <x-icon-icon-imessage class="stroke-black w-full" />
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
                    <x-icon-icon-imessage class="stroke-black w-6" />
                    <span>SMS</span>
                </button>
            </li>

            <li class="flex-1 border-b border-black/10 px-4 py-2">
                <button
                    @click="$store.data.triggerContact($store.data.telegramURI)"
                    class="text-black font-heading text-sm flex items-center gap-5"
                >
                    <x-icon-icon-telegram class="fill-black w-6" />
                    <span>Telegram</span>
                </button>
            </li>

            <li class="flex-1 px-4 py-2">
                <button
                    @click="$store.data.triggerContact($store.data.whatsappURI)"
                    class="text-black font-heading text-sm flex items-center gap-5"
                >
                    <x-icon-icon-whatsapp class="stroke-black w-6" />
                    <span>Whatsapp</span>
                </button>
            </li>
        </ul>
    </li>

    <li>
        <button
            @click="$store.data.triggerContact('instagram://user?username=maroluke')"
            class="w-5 block text-black font-heading text-micro tracking-widest opacity-75"
        >
            <x-icon-icon-instagram class="stroke-black w-full" />
        </button>
    </li>
</ul>