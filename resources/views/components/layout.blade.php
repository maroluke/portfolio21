<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
    <link rel="stylesheet" href="https://use.typekit.net/slr3uaj.css">
    @livewireStyles
</head>

<body class="text-white antialiased lang-{{ App::currentLocale() }}">
    <div id="app">
        {{-- @include('layouts.navigation') --}}
        <main x-data="{ open: false }">
            @yield('content')
        </main>
    </div>

    @livewireScripts
</body>
</html>