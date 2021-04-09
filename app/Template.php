<?php

class Template
{

    private $content, $layout, $data, $view;

    public function __construct($view, $data = [], $layout = 'app')
    {
        $this->content = $view;
        $this->data = $data;
        $this->layout = $layout;

        $this->extractData();
        echo $this->renderView();
    }

    protected function getContent()
    {
        ob_start();
        Helpers::require_if_exists(App::$rootPath . "/views/$this->content.php");
        return ob_get_clean();
    }

    protected function getLayout()
    {
        ob_start();
        Helpers::require_if_exists(App::$rootPath . "/views/layouts/$this->layout.php");
        return ob_get_clean();
    }

    public function renderView()
    {
        $content = $this->getContent();
        $layout = $this->getLayout();
        return str_replace('{{content}}', $content, $layout);
    }

    public function extractData()
    {
        return extract($this->data);
    }
}
