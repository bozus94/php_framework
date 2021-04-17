<?php

namespace app\core;

class Application
{
    public static $rootPath;
    public $request;
    public $router;

    public function __construct(string $path)
    {
        self::$rootPath = $path;
        $this->request = new Request();
        $this->router = new Router($this->request);
    }

    public function run()
    {
        $this->router->resolve();
    }
}
