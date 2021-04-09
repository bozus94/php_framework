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

    protected function getContent($path){
        ob_start();
        Helpers::require_if_exists($path);
        $this->content = ob_get_clean();
    }
    protected function getLayout(){
        ob_start();
        Helpers::require_if_exists(App::rootPath);
        $this->content = ob_get_clean();
    }

    public function render(){
        echo $this->content;
    }
}
