<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de Números</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1>Soma de Números</h1>
    </header>

    <section>
        <form action="/resultado" method="POST">
            @csrf
            <label for="n1">Digite um número</label>
            <input type="number" name="n1" id="n1" required>
            <br><br>
            <label for="n2">Digite outro número</label>
            <input type="number" name="n2" id="n2" required>
            <br><br>
            <button type="submit">Somar</button>
        </form>
    </section>
</body>
</html>
