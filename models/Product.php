<?php
class Product
{

    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function index()
    {
        $products = $this->db->queryAll("SELECT * FROM products");
        return new Template('products/index', ['products' => $products]);
    }

    public function create($id)
    {
        echo 'ejecutando el modelo create <br>';

        if ($id !== null) {
            echo " El id proporcionado es: {$id} <br>";
        }
    }
}
