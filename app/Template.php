<?php

class Template{
    private $content;

    public function __construct($path)
    {
        ob_start();
        include_once  $path;
        $this->content = ob_get_clean();
    }

    public function getContent(){
        return $this->content;
    }
}

