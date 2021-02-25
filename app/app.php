<?php 
require 'app/Uri.php';

class App{
    
    public function __construct()
    {
        $this->uri = $uri = $_SERVER['REQUEST_URI'];
        $uriParts = explode('/', $uri);
        array_shift($uriParts);  
    }
    
}