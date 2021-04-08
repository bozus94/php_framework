<?php 

class Helpers{

    public static function require_if_exists($path)            
    {
       if (file_exists($path)){
           print_r('1');
           require $path;
       }else{
            echo 'Se ha producido un error al cargar los datos';
       }
    }

}