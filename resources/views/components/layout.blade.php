<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
    <link rel="stylesheet" href="https://use.typekit.net/slr3uaj.css">
    <script defer data-domain="markolukac.ch" src="https://plausible.io/js/plausible.js"></script>
</head>

<body class="text-white antialiased">
    <div id="app">
        {{-- @include('layouts.navigation') --}}
        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>