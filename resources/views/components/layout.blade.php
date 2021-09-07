<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
</head>

<body class="text-white antialiased">
    <div id="app">
        <div class="entry-bg top-0 bottom-0 left-0 right-0"></div>
        {{-- @include('layouts.navigation') --}}
        <main>
            @yield('content')
        </main>
    </div>

</body>
</html>