<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
</head>

<body class="text-white antialiased">
    <div id="app">
        <div class="entry-bg"></div>
        {{-- @include('layouts.navigation') --}}
        <main>
            @yield('content')
        </main>
    </div>

</body>
</html>