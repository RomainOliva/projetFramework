<?php

namespace Framework\Routing;

class Router implements RouterInterface
{
    private $routes;

    public function __construct(RouteCollection $routes)
    {
        $this->routes = $routes;
    }

    function match($path)
    {
        if(!$route = $this->routes->match($path)) {
            throw new RouteNotFoundException(sprintf('No route found for path %s.', $path));
        }

        return $route->getParameters();
    }

}