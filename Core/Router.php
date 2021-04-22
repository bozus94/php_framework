<?php

namespace app\core;

class Router
{
    protected $routes = [];
    protected $params = [];
    public Request $request;
    public Response $response;

    public function __construct(Request $request,  Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    public function get($path, $callback, $params = [])
    {
        $this->routes['get'][$path] = $callback;
        $this->loadParams($params);
    }

    public function post($path, $callback, $params = [])
    {
        $this->routes['post'][$path] = $callback;
        $this->loadParams($params);
    }

    public function view($path, $view, $params = [])
    {
        $this->routes['view'][$path] = $view;
        $this->loadParams($params);
    }

    public function resolve()
    {
        $method = $this->request->method();
        $path = $this->request->getPath();
        $callback = $this->routes[$method][strtolower($path)] ?? false;

        if (is_string($callback)) {
            return new Template($callback, $this->params);
        }

        if (is_array($callback)) {
            $callback[0] = new $callback[0];
        }

        if ($callback === false) {
            $this->response->setResponseCode(404);
            return new Template('errors/_404');
        }

        call_user_func($callback, $this->request);
    }

    public function loadParams(array $params = [])
    {
        if (is_array($params) && $params !== []) {
            $this->params = $params;
        }
    }
}
