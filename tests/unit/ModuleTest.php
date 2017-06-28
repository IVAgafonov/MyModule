<?php
namespace Tests\unit;


class ModuleTest extends \Codeception\Test\Unit
{
    /**
     * @var \Tests\
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testInitModule()
    {
        $this->expectOutputString('{"status":"ok","module":"MyModule"}');
        $init = new \MyModule\Bootstrap\Init();
        $init->init([]);
    }
}