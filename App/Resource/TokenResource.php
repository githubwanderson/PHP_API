<?php

namespace App\Resource;

use App\Service\TokenService;
use App\Utility\ConstantsUtility;

class TokenResource
{   
    private object $TokenService;

    public function __construct()
    {
        $this->TokenService = new TokenService();
    }

    /**
     * Verifica se existe Token
     * @return Boolean
     * @return String 
     */
    public function validation()
    {  
        if(isset(getallheaders()['Authorization'])){
            $token = str_replace([' ', 'Bearer'], '', getallheaders()['Authorization']);
            return $this->TokenService->findToken($token);
        }
        return ConstantsUtility::ERROR_TOKEN_RESOURCE_AUTORIZATION;              
    }
}