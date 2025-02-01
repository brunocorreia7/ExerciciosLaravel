<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResultadoController; // Adicione esta linha para importar o controlador

/*
|---------------------------------------------------------------------------
| Web Routes
|---------------------------------------------------------------------------
|
| Aqui você pode registrar rotas web para sua aplicação. Essas rotas 
| são carregadas pelo RouteServiceProvider dentro de um grupo que 
| contém o middleware "web". Agora crie algo incrível!
|
*/

Route::get('/soma', function () {
    return view('somanumeros');
});

Route::post('/resultado', [ResultadoController::class, 'somar']);
