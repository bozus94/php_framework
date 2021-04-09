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
<<<<<<< HEAD
        return new Template('views/products/index.php', ['products' => $products]);
=======
        return new Template('../views/products/index.php', ['products' => $products]);
>>>>>>> 83b521ae43a3f3b1be426ea8ce81ba866e7b47ba
    }

    public function create($id)
    {
        echo 'ejecutando el modelo create <br>';

<<<<<<< HEAD
        if($id !== null){
            echo " El id proporcionado es: {$id} <br>";
        }
=======
        echo " El id proporcionado es: {$id} <br>";
>>>>>>> 83b521ae43a3f3b1be426ea8ce81ba866e7b47ba
    }

}