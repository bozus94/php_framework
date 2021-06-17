<?php

namespace app\core;

class Helpers
{

    public static function inlclude_if_exists($path, $params = [], $once = null, $flags = "EXTRACT_PARAMS_VARIABLE")
    {
        if ($params !== null && is_array($params) && $flags == "EXTRACT_PARAMS_VARIABLE") {
            extract($params);
        }

        if (file_exists($path)) {
            if (isset($once)) {
                include_once $path;
            } else {
                include $path;
            }
        } else {
            echo 'Not found: ' . $path;
        }
    }

    public static function require_if_exists($path, $params = [], $once = null, $flags = "EXTRACT_PARAMS_VARIABLE")
    {
        if ($params !== null && is_array($params) && $flags == "EXTRACT_PARAMS_VARIABLE") {
            extract($params);
        }

        if (file_exists($path)) {
            if (isset($once)) {
                require_once $path;
            } else {
                require $path;
            }
        } else {
            echo 'Se ha producido un error al cargar el archivo: ' . $path;
        }
    }

    public static function pre_dump($param)
    {
        echo "<pre>";
        var_dump($param);
        echo "</pre>";
        exit;
    }

    public static function ob_get_clean($path)
    {
        ob_start();
        self::inlclude_if_exists($path);
        return ob_get_clean();
    }
}
