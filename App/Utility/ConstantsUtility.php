<?php

namespace App\Utility;

abstract class ConstantsUtility
{
    /**
     *  Requests utilizados
     */
    public const TYPE_REQUEST = ['GET', 'POST'];

    /**
     *  Routes utilizados
     */
    public const METHOD_GET = ['ORDER', 'PRODUCT'];
    public const METHOD_POST = ['ORDER'];

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

    /**
     *  Errors
     */    
    public const ERROR_TYPE_REQUEST = 'Método não permitido!';
    public const ERROR_TYPE_ROUTE = 'Rota api não permitida!';
    public const ERROR_TOKEN_RESOURCE_AUTORIZATION = 'Token não localizado na requisição!';
    public const ERROR_TOKEN_DB = 'Token não existe!';
    public const ERROR_POST_DATA = 'Post vazio ou inválido!';

    
}