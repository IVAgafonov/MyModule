<?php

namespace MyModule\Bootstrap;

class Init
{
    public function init($config)
    {
        $controllerFactory = new \MyModule\Controller\Factory\ModuleControllerFactory();
        $controller = $controllerFactory->create($config);
        $controller->index();
    }
}