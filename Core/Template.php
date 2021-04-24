<?php

namespace app\core;

class Template
{
    public $view, $params, $layout;

    public function __construct($view, $data = [], $layout = 'boostrap')
    {
        $this->params = $data;

        $this->view = $this->getContent($view, $this->params);
        $this->layout = $this->getLayout($layout);
        echo !is_null($layout) ? $this->renderView() : $this->renderonlyView();
    }

    protected function getContent($view, $params)
    {
        ob_start();
        Helpers::inlclude_if_exists(Application::$rootPath . "/resources/views/$view.php", $params);
        return ob_get_clean();
    }

    protected function getLayout($layout)
    {
        if (is_null($layout)) {
            return null;
        }

        ob_start();
        Helpers::inlclude_if_exists(Application::$rootPath . "/resources/views/layouts/$layout.php");
        return ob_get_clean();
    }

    protected function renderView()
    {
        if (is_null($this->layout)) {
            echo $this->view;
        }
        return str_replace('{{content}}', $this->view, $this->layout);
    }

    protected function renderonlyView()
    {
        return $this->view;
    }
}
