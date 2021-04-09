<?php

class Database{

    private $db;

    public function __construct()
    {
        $this->db = new mysqli('localhost','root', '', 'appordenada');
        if ($this->db->connect_errno) {

            echo "Lo sentimos, este sitio web está experimentando problemas.";
        
            echo "Error: Fallo al conectarse a MySQL debido a: <br>";
            echo "Errno: " . $this->db->connect_errno . "<br>";
            echo "Error: " . $this->db->connect_error . "<br>";
            
            // Podría ser conveniente mostrar algo interesante, aunque nosotros simplemente saldremos
            exit;
        }
    } 
    
    public function queryAll($sql)
    {
        $arr = [];

        $result = $this->db->query($sql);
<<<<<<< HEAD
        if($result){
            while($row = $result->fetch_object()){
                $arr[] = $row;
            }
        }else{
            die ('No se hay registro en la ultima peticion');
        }
        return $arr;
=======

        $arr = [];
        while($row = $result->fetch_object()){
            $arr[] = $row;
        }
        return $arr;

>>>>>>> 83b521ae43a3f3b1be426ea8ce81ba866e7b47ba
    }

    public function queryOne($sql){
        $result = $this->db->query($sql);
        return $result->fetch_object();
    }
}