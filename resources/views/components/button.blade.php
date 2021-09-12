@props(['route'])

@php
    $classes = '
    button
    uppercase
    font-bold
    font-button
    bg-opacity-10
    text-xs
    text-center
    flex
    items-center
    justify-center
    relative
    squircle
    rounded-xl
    '
@endphp

<a href="{{ route($route) }}" {{ $attributes->merge(['class' => $classes ]) }}>{{$slot}}</a>