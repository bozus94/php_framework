<?php
class Product{

    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    } 

    public function index()
    {
        $products = $this->db->queryAll("SELECT * FROM products");
        return new Template('../views/products/index.php', ['products' => $products]);
    }

    public function create($id)
    {
        echo 'ejecutando el modelo create <br>';

        echo " El id proporcionado es: {$id} <br>";
    }

}