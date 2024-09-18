<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Ocean games</title>
</head>
    <body>
        <x-navbar/>
        <main class="container mt-5">
            {{$slot}}
        </main>
    </body>
</html>