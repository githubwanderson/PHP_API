<?php

namespace App\Utility;

abstract class ConstantsUtility
{
    /**
     *  Requests
     */
    public const TYPE_REQUEST = ['GET', 'POST', 'DELETE'];

    /**
     *  Errors
     */
    public const ERROR_TYPE_ROUTE = 'Rota não permitida!';
    public const ERROR_TOKEN_RESOURCE_AUTORIZATION = 'Token não localizado na requisição!';
    public const ERROR_TOKEN_DB = 'Token não existe!';


}