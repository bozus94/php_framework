<?php

class Database{

    private $db;

    public function __construct()
    {
        $this->db = new mysqli('localhost','root', '', 'php_shopping');
        if ($this->db->connect_errno) {

            echo "Lo sentimos, este sitio web está experimentando problemas.";
        
            echo "Error: Fallo al conectarse a MySQL debido a: <br>";
            echo "Errno: " . $this->db->connect_errno . "<br>";
            echo "Error: " . $this->db->connect_error . "<br>";
            
            // Podría ser conveniente mostrar algo interesante, aunque nosotros simplemente saldremos
            exit;
        }
    } 
    
    public function queryAll($sql, $response = ' array')
    {
        $arr = [];
        switch ($response) {
            case 'array':
                $result = $this->db->query($sql);
        
                while($row = $result->fetch_assoc()){
                    $arr[] = $row;

                    return $arr;
                }   
                break;
                
            case 'object':
                $result = $this->db->query($sql);

                $arr = [];
                while($row = $result->fetch_object()){
                    $arr[] = $row;
                }
                return (object) $arr;

                break;
            
            default:
                # code...
                break;
        }
    }
}