<?php 
require 'app/Uri.php';
require 'app/Database.php';
require 'app/Helpers.php';
require 'app/Template.php';


class App{

    private $db, $args, $uri, $model, $method;

    public function __construct()
    {
        self::rootPath = dirname(__DIR__);
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
                $template = null;
                Helpers::require_if_exists("models/{$modelName}.php");

                $this->model = new $modelName($this->db);
                $template = $this->callMethod($this->model);
                $this->render($template);
            }else{
                die ("El modelo {$modelName} no existe");
            }
        }else{
            $content = new Template('views/home.php', ['mensaje' => 'soy un texto interactivo']);
            $this->render($content);
        }   
    }

    public function callMethod($model)
    {
        $method = $this->args[0] ?? null;
        $param = $this->args[1] ?? null; 
            
        $modelMethods = get_class_methods($model);
        if(!isset($method) ){
            $model->index();
        }else{
            if(in_array($method, $modelMethods)){
                $model->$method($param);
            }else{
                echo "El metodo {$this->method} no existe";
            }
        }
    }

    public function render($content)
    {
        $view = new Template('views/app.php', ['title' => 'AppOrdenada', 'content' => $content]);
        echo $view;
    }
}


