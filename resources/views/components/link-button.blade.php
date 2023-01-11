@php
    $classes = '
        button
        uppercase
        font-button
        text-base
        text-center
        flex
        items-center
        justify-center
        relative
        flex-1
        text-white
        leading-[50px]
    '
@endphp

<div class="{{ $classes }} hover:border-opacity-100 hover:bg-opacity-20 shadow-button button">
    <a {{ $attributes->merge() }}>{{$slot}}</a>
</div>