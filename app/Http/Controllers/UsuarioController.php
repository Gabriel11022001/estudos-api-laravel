<?php

namespace App\Http\Controllers;

use App\Servico\UsuarioServico;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    private UsuarioServico $usuarioServico;

    public function __construct(UsuarioServico $usuarioServico) {
        $this->usuarioServico = $usuarioServico;
    }

    public function cadastrarUsuario(Request $requisicao) {

        return $this->usuarioServico->cadastrar($requisicao);
    }

    public function buscarTodosUsuarios() {

        return $this->usuarioServico->buscarTodos();
    }
}
