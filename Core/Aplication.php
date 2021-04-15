<?php

namespace app\core;


class Application
{
    public static $rootPath;
    protected Router $router;

    public function __construct(string $path)
    {
        self::$rootPath = $path;
    }
}
