<?php

spl_autoload_register('autoloader');

function autoloader($classname)
{
    $path = 'app/';
    $extension = '.php';
    $fullPath = $path . $classname . $extension;

    if (file_exists($fullPath)) {
        return false;
    }

    require $fullPath;
}
