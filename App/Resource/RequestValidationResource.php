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

    public function process()
    {
        $return = ConstantsUtility::ERROR_TYPE_ROUTE;
        if(in_array($this->request['method'], ConstantsUtility::TYPE_REQUEST, true) ) {
            $return = $this->directRequest();
        }
        return $return;
    }

    public function directRequest()
    {
        // var_dump(getallheaders());
        // exit;
        $this->TokenValidationResource->validarToken('tk01');
    }


}