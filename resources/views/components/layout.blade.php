<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Sistema' }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">    
</head>
<body>

<header>
    <h1>{{ $header ?? 'Sistema' }}</h1>
</header>

<main>
    {{ $slot }}
</main>

<footer>
    <p>Rodapé</p>
</footer>

</body>
</html>