<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>

    <main>
        <p>Seu nome completo é: <?php echo e($resultado); ?></p>

        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html><?php /**PATH C:\xampp1\htdocs\ExerciciosLaravel\juntanomes\juntanomes\resources\views/resultado.blade.php ENDPATH**/ ?>