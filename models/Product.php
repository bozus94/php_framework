<?php
class Product{

    private $db;

    public function __construct($db)
    {
        $this->db = $db;
        echo 'Clase '. get_class() . ' cargada correctamente <br>' ;
    } 

    public function index()
    {
        echo 'ejecutando el modelo index';
    }
    public function create()
    {
        echo 'ejecutando el modelo create';
    }
}