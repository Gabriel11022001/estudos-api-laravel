<?php

namespace App\Servico;

use Illuminate\Http\Request;

interface Servico
{

    function cadastrar(Request $requisicao);

    function editar(Request $requisicao);

    function buscarTodos();

    function buscarPeloId($id);
}