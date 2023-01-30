<?php

namespace App\Utility;

abstract class ConstantsUtility
{
    /**
     *  Requests utilizados
     */
    public const TYPE_REQUEST = ['GET', 'POST', 'DELETE'];

    /**
     *  Routes utilizados
     */
    public const ROUTE_GET = ['ORDER', 'PRODUCT'];
    public const ROUTE_POST = ['ORDER'];
    public const ROUTE_DELETE = ['ORDER'];

    /**
     *  Routes
     */
    public const ORDER = 'ORDER';
    public const PRODUCT = 'PRODUCT';

    /**
     *  Requests
     */
    public const GET = 'GET';
    public const POST = 'POST';
    public const DELETE = 'DELETE';

    /**
     *  Errors
     */    
    public const ERROR_TYPE_REQUEST = 'Método não permitido!';
    public const ERROR_TYPE_ROUTE = 'Rota não permitida!';
    public const ERROR_TOKEN_RESOURCE_AUTORIZATION = 'Token não localizado na requisição!';
    public const ERROR_TOKEN_DB = 'Token não existe!';


}