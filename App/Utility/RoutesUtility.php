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
        $request['module'] = strtoupper($url[0]);
        $request['route'] = strtoupper($url[1]);
        $request['resource'] = $url[2] ?? null;
        $request['id'] = $url[3] ?? null;
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