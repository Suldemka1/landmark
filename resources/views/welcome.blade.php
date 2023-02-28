<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>
    @vite(['resources/styles/globals.css', 'resources/js/index.js'])

</head>

<body class="antialiased">
    <div id="map" style="width: 100vw; height: 100vh"></div>
    <div>asd</div>
</body>

</html>
