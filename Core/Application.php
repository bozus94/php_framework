<?php

namespace app\core;

class Application
{
    public static $rootPath;
    public static Application $app;
    public Router $router;
    public Request $request;
    public Response $response;
    public Database $database;

    public function __construct(string $path, $config)
    {
        self::$rootPath = $path;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
        $this->database = new Database($config['db']);
    }

    public function run()
    {
        $this->router->resolve();
    }
}
