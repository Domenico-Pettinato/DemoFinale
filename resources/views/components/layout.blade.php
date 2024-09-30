<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Ocean games</title>
</head>
<body style="background-color: var(--primaryColor2);"> <!-- Richiamo il colore che ho impostato tramite il root nel mio style.css -->
    <x-navbar />
    <main class="container mt-5">
        {{$slot}}
    </main>
</body>
    <footer class="text-center text-lg-start mt-2" style="background-color: var(--primaryColor1);" >
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2024 Copyright:
            <a class="text-body" href="#">@ Rebels </a>
        </div>
    </footer>
</html>
