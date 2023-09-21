<?php

namespace App\Http\Controllers;

use App\Services\LivroService;
use App\Servico\LivroServico;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    private LivroServico $livroServico;

    public function __construct(LivroServico $livroServico) {
        $this->livroServico = $livroServico;
    }

    public function cadastrarLivro(Request $requisicao) {

        return $this->livroServico->cadastrar($requisicao);
    }
}
