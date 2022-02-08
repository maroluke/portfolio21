@php
    $classes = '
        button
        uppercase
        font-bold
        font-button
        text-xs
        text-center
        flex
        items-center
        justify-center
        relative
        bg-neon-blue
        bg-opacity-10
        rounded-xl
    '
@endphp

<div class="{{ $classes }} border-2 border-neon-blue border-opacity-75 hover:border-opacity-100 hover:bg-opacity-20 shadow-button">
    <a {{ $attributes->merge() }}>{{$slot}}</a>
</div>