<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{asset('../../resources/css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>{{$title}}</title>
</head>
<body>
<header class="header">
    <nav class="nav">
        <a href="/" class="header-link">Home</a>
        <a href="/about" class="header-link">Sobre mim</a>
        <a href="/curriculum" class="header-link">Curriculo</a>
    </nav>
</header>
<main class="container">
    {{$slot}}
</main>
<footer>
    <p class="footer">Hildon Neto 2024</p>
</footer>
</body>
</html>
