<?php

class Database{

    private $db;

    public function __construct()
    {
        $this->db = new mysqli('localhost','root', '', '');
    }
}