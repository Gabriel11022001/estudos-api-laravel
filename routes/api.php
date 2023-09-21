<?php

use App\Http\Controllers\LivroController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

// no arquivo api.php eu defino os mapeamentos para os meus endpoints
Route::get('/teste', function () {

    return 'Rota de teste!';
});

Route::post('/usuario', [ UsuarioController::class, 'cadastrarUsuario' ]);
Route::get('/usuario', [ UsuarioController::class, 'buscarTodosUsuarios' ]);
Route::post('/livro', [ LivroController::class, 'cadastrarLivro' ]);