<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
</head>

<body class="text-white antialiased">
    <div id="app">
        <div class="entry-bg top-0 bottom-0 left-0 right-0 bg-contain bg-no-repeat fixed w-full h-full"></div>
        <div class="entry-fade absolute top-0 left-0 right-0 bottom-0 w-full opacity-100 z-50">
            <div class="absolute -top-full left-0 right-0 bottom-0 w-full h-full bg-gradient-to-b from-transparent to-black"></div>
            <div class="absolute top-0 left-0 right-0 bottom-0 w-full h-full bg-black"></div>
        </div>
        {{-- @include('layouts.navigation') --}}
        <main>
            @yield('content')
        </main>
    </div>

</body>
</html>