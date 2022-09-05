<ul class="language flex gap-8 z-10">
    @foreach($available_locales as $locale_name => $available_locale)
        @if($available_locale !== $current_locale)
            <li class="py-6">
                <a class="py-6 opacity-75 text-white font-heading text-micro tracking-widest" rel="alternate" hreflang="{{ $available_locale }}" href="{{ $available_locale }}">
                    {{ ucfirst( $locale_name ) }}
                </a>
            </li>
        @endif
    @endforeach
</ul>