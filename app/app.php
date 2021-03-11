<?php 
require 'app/Uri.php';
require 'app/database.php';


class App{

    private $db, $args, $uri, $model, $method;

    public function __construct()
    {
        $this->dbConnect();
        $this->loadUriData();
        $this->loadModel();
    }

    public function dbConnect()
    {
        $this->db = new Database();
    }

    public function extractUri($uri)
    {
        $uriParts = explode('/', $uri);
        array_shift($uriParts); 
        return $uriParts;
    }
    
    public function loadUriData()
    {
        $this->uri = $_SERVER['REQUEST_URI'];
        $this->loadArgsUri($this->uri);
    }

    public function loadArgsUri($uri)
    {
        $uriParts = $this->extractUri($uri); 

        if(count($uriParts) > 0){
            $arr = [];
            for ($i=1; $i < count($uriParts); $i++) { 
                $arr[] = $uriParts[$i];
            }
        }
        $this->args = $arr;
    }
    
    public function loadModel()
    {
        $uriParts = $this->extractUri($this->uri);

        if($uriParts[0]){
            $model = $uriParts[0];
            $modelName = ucfirst(strtolower($model));
            if(file_exists("models/{$model}.php")){
                require "models/{$modelName}.php";
                echo "Cargando el modelo {$modelName} <br>";
                $this->model = new $modelName($this->db);
                $this->callMethod($this->model);
            }else{
                die ("El modelo {$modelName} no existe");
            }
        }else{
            $this->render(new Template('views/home.php', ['mensaje' => 'soy un texto interactivo']));
        }
    }

    public function callMethod($model)
    {
        $this->method = $this->args[0] ?? null;
        $modelMethods = get_class_methods($model);
        if(!isset($this->method) ){
            $model->index();
        }else{
            if(in_array($this->method, $modelMethods)){
                echo "Ejectuando el metodo {$this->method} ";
            }else{
                echo "El metodo {$this->method} no existe";
            }
        }
    }

    public function render($template)
    {
        $view = new Template('views/app.php', ['title' => 'AppOrdenada', 'content' => $template]);
        $view->render();
    }
}


