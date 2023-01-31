<?php

namespace App\Utility;
use Exception;

class JsonUtility
{
    public function processReturnJson($return)
    {
        // SUCESS 200
        if (is_array(json_decode($return,true))) {
            $this->retornarJson(json_decode($return),200);
        // ERRO CLIENTE 400
        } else if (strlen($return) > 10) {   
            $resposta = ["erro" => $return];
            $this->retornarJson(json_encode($resposta),400);
        // ERRO SERVIDOR 500
        } else {
            $resposta = ["erro" => "Desconhecido"];
            $this->retornarJson(json_encode($resposta),500);
        }  
    }

    private function retornarJson($json,$httpResponse)
    {
        http_response_code($httpResponse);
        header('Content-Type: application/json');
        header('Cache-Control: no-cache, no-store, must-revalidate');
        header('Access-Control-Allow-Methods: GET,POST');
        echo json_encode($json, JSON_THROW_ON_ERROR, 1024);
        exit;
    }  
}