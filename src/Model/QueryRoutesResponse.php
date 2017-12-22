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
    public function getRoutes(): array
    {
        return $this->routes;
    }

    /**
     * QueryRoutesResponse constructor.
     * @param Route[] $routes
     */
    public function __construct(array $routes)
    {
        $this->routes = $routes;
    }

    public static function fromResponse(array $body):self
    {
        return new self(
            array_map(function($i) {return Route::fromResponse($i);}, $body['routes'])
        );
    }
}