<?php

namespace Route;

class Routes
{
    private $route;
    private $resource;
    private $id;
    private $method;

    public function __construct()
    {
        $this->config();
    }

    /**
     * 
     * @return array
     */
    private function config()
    {
        $url = self::getUrl();

        $this->setRoute($url[0] ?? null);
        $this->setResource($url[1] ?? null);
        $this->setId($url[2] ?? null);
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
    private function setRoute($route)
    {
        $this->route = strtoupper($route);     
    }

    private function setResource($resource)
    {
        $this->resource = strtoupper($resource);
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