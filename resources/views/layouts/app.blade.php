<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello</title>
</head>

<body>
    @include('partials.header')

    <main>
        @yield('contenuto')
    </main>

    @include('partials.footer')
</body>

</html>