<div x-cloak x-show="$store.modal.showModalContact" class="fixed top-0 left-0 w-full h-full flex flex-col justify-center items-center z-50 bg-black bg-opacity-75 p-3">
    <div class="p-5 flex flex-wrap max-w-sm bg-dirty-white rounded-xl">
        <p class="text-black mb-5 text-xl">Wie möchten Sie mich kontaktieren?</p>
        <x-contact />
        <div @click="$store.modal.toggleContact().prevent" class="mt-5 w-full">
            <x-link-button class="z-10 px-1 text-black bg-[#fff] rounded-lg bg-opacity-85 tracking-wider cursor-pointer">@lang('Abbrechen')</x-link-button>
        </div>
    </div>
</div>