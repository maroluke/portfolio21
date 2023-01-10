@php
    $classes = '
        uppercase
        text-sm
        tracking-widest
    ';
@endphp

<p {{ $attributes->merge(['class' => $classes ]) }} ><span class="font-heading">Marko Lukac</span></p>
{{-- <hr class="border-gray-400 opacity-30 my-1"> --}}
<p {{ $attributes->merge(['class' => $classes ]) }} >Frontend Engineer</p>
<p {{ $attributes->merge(['class' => $classes ]) }} >Project Manager</p>