<?php

namespace MyModule\Controller\Factory;

use IVAgafonov\Controller\Factory\ControllerFactoryInterface;

/**
 * Class IndexControllerFactory
 * @package MyModule\Controller\Factory
 */
class ModuleControllerFactory implements ControllerFactoryInterface
{
    /**
     * @param array $config
     * @return \MyModule\Controller\ControllerInterface
     */
    public function create($config)
    {
        return new \MyModule\Controller\ModuleController();
    }
}