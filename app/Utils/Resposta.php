<?php

namespace App\Utils;

class Resposta
{

    public static function resposta($mensagem, $dados, $codigoHttp) {

        return response()
            ->json(
                [
                    'msg' => $mensagem,
                    'retorno' => $dados
                ],
                $codigoHttp
            );
    }
}