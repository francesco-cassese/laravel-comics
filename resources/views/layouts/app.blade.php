<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Comics Shop')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    {{-- Intestazione, uguale per tutte le pagine --}}
    @include('partials.header')

    <main>
        {{-- Contenuto che cambia in base alla pagina --}}
        @yield('contenuto')
    </main>

    {{-- Footer, uguale per tutte le pagine --}}
    @include('partials.footer')
</body>

</html>