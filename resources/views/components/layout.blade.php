<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>dbase DB data converter</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-background text-foreground">
    <!-- Header in components -->
    <x-nav />

    <main class="max-w-7xl mx-auto px-6 pb-10">
        {{ $slot }}
    </main>

    <!-- Footer in components -->
    <x-footer />

</body>

</html>
