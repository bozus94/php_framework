<?php

namespace app\core;

class Template
{
    public function __construct($view, $data = [], $layout = 'boostrap')
    {
        echo $this->renderView($view, $data, $layout);
    }

    protected function getContent($view, $params)
    {

        ob_start();
        Helpers::inlclude_if_exists(Application::$rootPath . "/resources/views/$view.php", $params);
        return ob_get_clean();
    }

    protected function getLayout($layout)
    {
        ob_start();
        Helpers::inlclude_if_exists(Application::$rootPath . "/resources/views/layouts/$layout.php");
        return ob_get_clean();
    }

    public function renderView($view, $params, $layout)
    {
        $baselayout = $this->getLayout($layout);
        $content = $this->getContent($view, $params);
        return str_replace('{{content}}', $content, $baselayout);
    }
}
