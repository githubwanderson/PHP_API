<?php

namespace App\Utility;

class RoutesUtility
{
    /**
     * 
     * @return array
     */
    public static function getRoute()
    {
        $url = self::getUrl();

        $request = [];
        $request['route'] = strtoupper($url[0]);
        $request['resource'] = $url[1] ?? null;
        $request['id'] = $url[2] ?? null;
        $request['method'] = $_SERVER['REQUEST_METHOD'];

        return $request;
    }

    /**
     * Tratamento URL sem o Diretorio do projeto para Array
     * @return array<string>|bool
     */
    private function getUrl()
    {
        $uri = str_replace('/' . DIR_PROJETO, '', $_SERVER['REQUEST_URI']);
        return explode('/',trim($uri,'/'));
    } 

}