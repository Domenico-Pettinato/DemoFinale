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
    <x-navbar />
    <main class="container mt-5">
        {{$slot}}
    </main>
</body>

<footer class="bg-body-tertiary text-center text-lg-start mt-2">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2024 Copyright:
        <a class="text-body" href="#"> @ Rebels </a>
    </div>
    <!-- Copyright -->
</footer>

</html>