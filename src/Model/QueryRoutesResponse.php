<?php

namespace LightningSale\LndRest\Model;

class QueryRoutesResponse
{
    /**
     * @var Route[]
     */
    protected $routes;
    /**
     * @return Route[]
     */
    public function getRoutes()
    {
        return $this->routes;
    }
    /**
     * @param Route[] $routes
     *
     * @return self
     */
    public function setRoutes(array $routes = null)
    {
        $this->routes = $routes;
        return $this;
    }
}