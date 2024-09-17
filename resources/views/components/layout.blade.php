<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Ocean games</title>
</head>
<body>
    <div class="container">
    <h1>ciao</h1>
    </div>
    <main class="container">
        {{$slot}}
    </main>
    <footer>

    </footer>
</body>
</html>