<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>

    <main>
        <p>A soma de <strong>{{ $n1 }}</strong> e <strong>{{ $n2 }}</strong> é igual a: <strong>{{ $resultado }}</strong></p>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>
