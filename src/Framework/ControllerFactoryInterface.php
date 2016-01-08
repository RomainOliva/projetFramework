<?php

namespace Framework;


interface ControllerFactoryInterface
{
    /*
     * Creates an invokable controller
     *
     * @param array $params
     * @return
     */
    public function createController(array $params);
}