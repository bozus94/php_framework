<?php

namespace app\core;

class Application
{
    public static $rootPath;
    public static Application $app;
    public Router $router;
    public Request $request;
    public Response $response;

    public function __construct(string $path)
    {
        self::$rootPath = $path;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
    }

    public function run()
    {
        $this->router->resolve();
    }
}
