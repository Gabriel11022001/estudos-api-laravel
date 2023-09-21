<?php

namespace App\Servico;

use App\Models\Usuario;
use App\Utils\Resposta;
use Exception;
use Illuminate\Http\Request;

class UsuarioServico implements Servico
{
    
    public function cadastrar(Request $requisicao) {

        try {
            $usuario = new Usuario();
            $usuario->nome = $requisicao->nome;
            $usuario->login = $requisicao->login;
            $usuario->senha = md5($requisicao->senha);

            if ($usuario->save()) {

                return Resposta::resposta(
                    'Usuário cadastrado com sucesso!',
                    [
                        'id' => $usuario->id,
                        'nome' => $usuario->nome,
                        'login' => $usuario->login
                    ],
                    201
                );
            }

            return Resposta::resposta('Ocorreu um erro ao tentar-se cadastrar o usuário!', null, 500);
        } catch (Exception $e) {
            
            return Resposta::resposta('Ocorreu um erro ao tentar-se cadastrar o usuário!', null, 500);
        }

    }

    public function editar(Request $requisicao) {
        
    }

    public function buscarTodos() {
        
        try {
            $usuarios = Usuario::all([ 'id', 'nome', 'login', 'ativo' ])->toArray();
            
            if (count($usuarios) > 0) {

                return Resposta::resposta('Existe um total de ' . count($usuarios) . ' usuários cadastrados no banco de dados!', $usuarios, 200);
            }

            return Resposta::resposta('Não existem usuários cadastrados no banco de dados!', [], 200);
        } catch (Exception $e) {
            
            return Resposta::resposta('Ocorreu um erro ao tentar-se buscar todos os usuários!', null, 500);
        }

    }

    public function buscarPeloId($id) {
        
    }
}