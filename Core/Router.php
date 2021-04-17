<?php

namespace app\core;

class Router
{
    protected $routes = [];
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function post($path, $callback)
    {
        $this->routes['post'][$path] = $callback;
    }

    public function resolve()
    {
        $method = $this->request->method();
        $path = $this->request->getPath();
        $callback = $this->routes[$method][$path] ?? false;

        if ($callback === false) {
            echo 'Not found';
        }

        \call_user_func($callback);
    }
}
