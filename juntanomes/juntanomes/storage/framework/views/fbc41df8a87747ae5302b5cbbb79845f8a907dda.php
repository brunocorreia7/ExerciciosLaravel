<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de Números</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>
    <header>
        <h1>Junta nomes</h1>
    </header>

    <section>
        <form action="/resultado" method="POST">
            <?php echo csrf_field(); ?>
            <label for="n">Digite seu nome</label>
            <input type="text" name="nome" id="nome" required>
            <br><br>
            <label for="sb">Digite seu sobrenome</label>
            <input type="text" name="sobrenome" id="sobrenome" required>
            <br><br>
            <button type="submit">Juntar</button>
        </form>
    </section>
</body>
</html><?php /**PATH C:\xampp1\htdocs\ExerciciosLaravel\juntanomes\juntanomes\resources\views/juntanomes.blade.php ENDPATH**/ ?>