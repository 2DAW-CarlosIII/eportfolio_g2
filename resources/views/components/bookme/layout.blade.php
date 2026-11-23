@props(['titulo' => null])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contenido de prueba del issue</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('[plantilla]/images/favico.png') }}">
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="antialiased">

    <x-bookme.header />

    <x-bookme.main :titulo="$titulo">
        {{ $slot }}
    </x-bookme.main>

    <x-bookme.footer />

</body>
</html>