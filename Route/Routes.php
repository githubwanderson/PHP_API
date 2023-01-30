<?php

namespace Route;

class Routes
{
    public $module;
    public $route;
    public $resource;
    public $id;
    public $method;

    /**
     * 
     * @return array
     */
    public static function configRoute()
    {
        $url = self::getUrl();

        $this->setModule(strtoupper($url[0] ?? null));
        $this->setRoute(strtoupper($url[1] ?? null));
        $this->setResource($url[2] ?? null);
        $this->setId($url[3] ?? null);
        $this->setMethod($_SERVER['REQUEST_METHOD']);
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

    /**
     * Setters
     * 
     */
    private function setModule($module)
    {
        $this->module = $module;
    }

    private function setRoute($route)
    {
        $this->route = $route;     
    }

    private function setResource($resource)
    {
        $this->resource = $resource;
    }

    private function setId($id)
    {
        $this->id = $id;
    }

    private function setMethod($method)
    {
        $this->method = $method;
    }

    /**
     * Getters
     * 
     */
    public function getModule()
    {
        return $this->module;
    }

    public function getRoute()
    {
        return $this->route;     
    }

    public function getResource()
    {
        return $this->resource;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getMethod()
    {
        return $this->method;
    }
}