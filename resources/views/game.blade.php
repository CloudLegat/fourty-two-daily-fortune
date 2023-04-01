<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full w-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>42 Daily Fortune - Spin to Win!</title>

    <link href="/dist/output.css" rel="stylesheet">

    @viteReactRefresh
    @vite(['resources/css/app.css', 'resources/js/app.jsx'])

</head>

<body class="h-full w-full bg-green">
    <div class="container h-full w-full flex items-center justify-center">
        <div id="root"></div>
    </div>
</body>

</html>