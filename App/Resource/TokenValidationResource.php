<?php

namespace App\Resource;

use App\Service\TokenService;

use App\Utility\ConstantsUtility;

use Exception;

class TokenValidationResource
{   
    private object $TokenService;

    public function __construct()
    {
        $this->TokenService = new TokenService();
    }

    public function validarToken()
    {  
        if(isset(getallheaders()['Authorization'])){
            $token = str_replace([' ', 'Bearer'], '', getallheaders()['Authorization']);
            return $this->TokenService->findToken($token);
        }
        return ConstantsUtility::ERROR_TOKEN_RESOURCE_AUTORIZATION;              
    }
}