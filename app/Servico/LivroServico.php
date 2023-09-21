<?php

namespace App\Servico;

use App\Models\Livro;
use App\Utils\Resposta;
use Exception;
use Illuminate\Http\Request;

class LivroServico implements Servico
{

    public function cadastrar(Request $requisicao) {
        
        try {
            $livroComNomeInformado = Livro::where('nome', $requisicao->nome)
                ->get()
                ->toArray();
            
            if (count($livroComNomeInformado) > 0) {

                return Resposta::resposta(
                    'Já existe um outro livro cadastrado com esse nome no banco de dados!',
                    null,
                    500
                );
            }

            $livro = new Livro();
            $livro->nome = $requisicao->nome;
            $livro->abreviacao = $requisicao->abreviacao;

            if ($livro->save()) {

                return Resposta::resposta(
                    'Livro cadastrado com sucesso!',
                    [
                        'id' => $livro->id,
                        'nome' => $livro->nome,
                        'abreviacao' => $livro->abreviacao
                    ],
                    201
                );
            }

        } catch (Exception $e) {

            return Resposta::resposta(
                'Ocorreu um erro ao tentar-se cadastrar o livro!',
                null,
                500
            );
        }

    }

    public function editar(Request $requisicao) {
        
    }

    public function buscarPeloId($id) {
        
    }

    public function buscarTodos() {
        
    }
}