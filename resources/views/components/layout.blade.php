<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
    <link rel="stylesheet" href="https://use.typekit.net/slr3uaj.css">
</head>

@php
    var_dump('client locale: ' . $clientLocale);
    var_dump('app locale: ' . $locale);
@endphp

<body class="text-white antialiased lang-{{ App::currentLocale() }}">
    <div id="app">
        <div id="flying-shapes" class="fixed h-full w-full"></div>
        {{-- @include('layouts.navigation') --}}
        <main x-data="{ open: false }">
            @yield('content')
        </main>
    </div>
</body>
</html>