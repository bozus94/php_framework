<?php

class Template{
    
    private $content;

    public function __construct($path, $data = [])
    {
        extract($data);
        ob_start();
        include_once  $path;
        $this->content = ob_get_clean();
    }

    public function __toString()
    {
        return $this->content;
    }

    public function render(){
        echo $this->content;
    }
}
