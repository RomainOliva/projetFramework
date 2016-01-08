<?php

namespace Framework\Routing\Loader;

Interface FileLoaderInterface
{
    /*
     * Loads a routing configuration file
     *
     * @param string $path The configuration file path
     * @return RouteCollection
     */
    public function load($path);
}