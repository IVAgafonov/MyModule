<?php

namespace MyModule\Controller;

use IVAgafonov\Controller\AbstractController;
use IVAgafonov\Controller\ControllerInterface;


class ModuleController extends AbstractController implements ControllerInterface
{
    public function index()
    {
        echo json_encode(['status' => 'ok', 'module' => 'MyModule']);
    }
}