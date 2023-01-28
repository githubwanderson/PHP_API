<?php

namespace App\Resource;

class RequestValidationResource
{   
    private object $TokenValidationResource;
    private array $request; 

    public function __construct($request = [])
    {
        $this->TokenValidationResource = new TokenValidationResource();
        $this->request = $request;
    }




}