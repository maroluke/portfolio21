@php
    $classes = '
        button
        uppercase
        font-bold
        text-xs
        text-center
        flex
        items-center
        justify-center
        relative
        squircle
        bg-white
        bg-opacity-10
        rounded-xl
    '
@endphp

<div class="{{ $classes }}">
    <a {{ $attributes->merge() }}>{{$slot}}</a>
</div>