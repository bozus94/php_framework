<?php

class Template{

    private $content;

    public function __construct($path, $data = [])
    {
        extract($data);
        ob_start();
        Helpers::require_if_exists($path);
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
