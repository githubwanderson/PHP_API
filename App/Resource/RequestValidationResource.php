<?php

namespace App\Resource;

use App\Utility\ConstantsUtility;

class RequestValidationResource
{   
    private object $TokenValidationResource;
    private array $request; 

    public function __construct($request = [])
    {
        $this->TokenValidationResource = new TokenValidationResource();
        $this->request = $request;
    }

    /**
     * Responsável por validar method de entrada com methods aceitos
     * 
     */
    public function process()
    {
        $return = ConstantsUtility::ERROR_TYPE_REQUEST;
        if(in_array($this->request['module'], ConstantsUtility::TYPE_REQUEST, true) ) {
            
            // $return = $this->validationTokenRequest();
            // if($return !== true){
            //     return $return; 
            // }

            $method = strtolower($this->request['method']);
            return $this->$method();
        }
        return $return;
    }

    /**
     * Responsável por efetuar o tratamento pelo tipo request
     * 
     */
    // public function directRequest()
    // {
    //     if($this->request['method'] === ConstantsUtility::POST) {
    //         return 'Validar dados POST';     
    //     }
    //     $method = strtolower($this->request['method']);
    //     return $this->$method();
    // }

    /**
     * Solicita a validação do Token
     * 
     */
    public function validationTokenRequest()
    {
        return $this->TokenValidationResource->validarToken();
    }

    /**
     * Tratamento tipo get
     * 
     */
    public function get()
    {
        var_dump($this->request);exit;
        $return = ConstantsUtility::ERROR_TYPE_ROUTE;
        if(in_array($this->request['route'], ConstantsUtility::ROUTE_GET, true)) {
            switch ($this->request['route']) {
                case ConstantsUtility::PRODUCT:
                    return 'getProduct';
                    break;
                case ConstantsUtility::ORDER:
                    return 'getOrder';
                    break;
                
                default:
                    // code...
                    break;
            }
        }
    }

    /**
     * Tratamento tipo post
     * 
     */
    public function post()
    {
        return 'Validar dados POST'; 
    }

    /**
     * Tratamento tipo delete
     * 
     */
    public function delete()
    {
        return 'deletar';
    }

}