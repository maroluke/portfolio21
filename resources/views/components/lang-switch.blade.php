<ul class="language flex gap-8">
    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        @if(!App::isLocale($localeCode))
            <li class="py-6">
                <a class="py-6 opacity-75 text-white font-heading text-sm tracking-widest" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                    {{ ucfirst($properties['native']) }}
                </a>
            </li>
        @endif
    @endforeach
</ul>