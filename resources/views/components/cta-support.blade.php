<section id="cta-support" class="px-6 pb-10 z-20 relative sm:max-w-lg sm:mx-auto">
    @if (App::isLocale('zh'))
        <h2>您有一个令人兴奋的<span class="bg-clip-text neon neon-flat">想法</span>？</h2>
    @else
        <h2>@lang('Sie haben eine spannende ')<span class="bg-clip-text neon neon-flat">@lang('Idee?')</span></h2>
    @endif
    <p class="pt-8 text-small">@lang('Möchten Sie sich digital neu positionieren, Ihren Kunden ein digitales shopping-Erlebnis bieten können, oder potenzielle Arbeitsprozesse digitalisieren?')</p>
    <p class="pt-8 text-small">@lang('Egal vor welchen Herausforderungen Sie stehen, lassen Sie uns in einem gemeinsamen Brainstorming herausfinden was Ihre Bedürfnisse sind und wie wir sie gemeinsam umsetzen können.')</p>
    <div class="grid grid-cols-4 gap-2 mt-8">
        <x-link-button class="z-10 px-1" @click="open = true">@lang('Anruf')</x-link-button>
        <x-link-button class="z-10 px-1" href="mailto:hello@markolukac.ch">@lang('E-Mail')</x-link-button>
        <x-link-button class="z-10 px-1" href="sms:+41763887018">SMS</x-link-button>
        <x-link-button class="z-10 px-1" href="https://t.me/maroluke">Tlgrm</x-link-button>
    </div>
</section>