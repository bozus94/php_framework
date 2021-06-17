<?php

namespace app\core;

use PDO;

class Database
{

    public \PDO $pdo;

    public function __construct($config)
    {
        $dns = $config['dns'];
        $username = $config['user'];
        $password = $config['password'];
        $this->pdo = new PDO($dns, $username, $password);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}
