<section id="cta-support" class="px-6 pb-10 z-20 relative">
    <div class="mx-auto sm:container md:flex lg:justify-end md:gap-8 xl:max-w-screen-lg">
        <div class="md:w-2/6">
            @if (App::isLocale('zh'))
                <h2>您有一个令人兴奋的<span class="bg-clip-text neon neon-flat">想法</span>？</h2>
            @else
                <h2>@lang('Sie haben eine spannende ')<span class="bg-clip-text neon neon-flat">@lang('Idee?')</span></h2>
            @endif
        </div>

        <div class="md:w-4/6 lg:w-3/6">
            <p class="pt-8 text-small md:pt-0">@lang('Egal vor welchen Herausforderungen Sie stehen, lassen Sie uns in einem gemeinsamen Brainstorming herausfinden was Ihre Bedürfnisse sind und wie wir sie gemeinsam umsetzen können.')</p>
            <div class="grid grid-cols-4 gap-2 mt-8">
                <x-link-button class="z-10 px-1" @click="open = true">@lang('Anruf')</x-link-button>
                <x-link-button class="z-10 px-1" href="mailto:hello@markolukac.ch">@lang('E-Mail')</x-link-button>
                <x-link-button class="z-10 px-1" href="sms:+41763887018">SMS</x-link-button>
                <x-link-button class="z-10 px-1" href="https://t.me/maroluke">Tlgrm</x-link-button>
            </div>
        </div>
    </div>
</section>