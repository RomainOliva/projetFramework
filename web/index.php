<?php

require_once __DIR__.'/../vendor/autoload.php';

use Framework\Http\Request;
use Framework\Http\StreamableInterface;
use Framework\Kernel;
use Framework\Routing\Route;
use Framework\Routing\Router;
use Framework\Routing\RouteCollection;

$route = new RouteCollection();
$routes->add('hello', new Route('/hello', [
    '_controller' => HelloWorldAction::class ]));
$router = new Router($routes);

$kernel = new Kernel();

$response = $kernel->handle(Request::createFromGobals());

if($response instanceof StreamableInterface) {
    $response->send();
}
