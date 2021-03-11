<?php
class Product{

    private $db;

    public function __construct($db)
    {
        $this->db = $db;
        echo 'Clase '. get_class(). ' cargada correctamente' ;
    } 
}