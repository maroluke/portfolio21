<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
    {{-- <link rel="stylesheet" href="https://use.typekit.net/slr3uaj.css"> --}}
</head>

<body x-data x-bind:class="$store.modal.modalOpen ? 'overflow-hidden' : ''" class="text-white antialiased lang-{{ App::currentLocale() }}">
    <div id="app">
        <div id="flying-shapes" class="fixed top-0 left-0"></div>
        {{-- @include('layouts.navigation') --}}
        <main x-data="{ open: false }">
            @yield('content')

            <x-modal-cv />
            <x-modal-contact />
        </main>
    </div>
</body>
</html>