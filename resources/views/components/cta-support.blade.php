<section id="cta-support" class="px-6 pb-10 z-20 relative">
    <div class="mx-auto max-w-screen-sm flex flex-col">
        <div>   
            @if (App::isLocale('zh'))
                <h2>您有一个令人兴奋的<span class="bg-clip-text neon neon-flat bg-gradient-to-tr from-indigo-500 via-purple-500 to-pink-500">想法</span>？</h2>
            @else
                <h2>@lang('Sie haben eine spannende ')<span class="bg-clip-text neon neon-flat bg-gradient-to-tr from-indigo-500 via-purple-500 to-pink-500">@lang('Idee?')</span></h2>
            @endif
        </div>

        <div>
            <p class="pt-4 text-small md:pt-0">@lang('Egal vor welchen Herausforderungen Sie stehen, lassen Sie uns in einem gemeinsamen Brainstorming herausfinden was Ihre Bedürfnisse sind und wie wir sie gemeinsam umsetzen können.')</p>
            <div class="grid grid-cols-4 gap-2 mt-8">
                <x-link-button class="z-10 px-1 bg-dirty-white text-black rounded-lg bg-opacity-85 tracking-wider" href="tel:+41763887018">@lang('Anruf')</x-link-button>
                <x-link-button class="z-10 px-1 bg-dirty-white text-black rounded-lg bg-opacity-85 tracking-wider" href="mailto:hello@markolukac.ch">@lang('E-Mail')</x-link-button>
                <x-link-button class="z-10 px-1 bg-dirty-white text-black rounded-lg bg-opacity-85 tracking-wider" href="sms:+41763887018">@lang('SMS')</x-link-button>
                <x-link-button class="z-10 px-1 bg-dirty-white text-black rounded-lg bg-opacity-85 tracking-wider" href="https://t.me/maroluke">@lang('Tlgrm')</x-link-button>
            </div>
        </div>
    </div>
</section>