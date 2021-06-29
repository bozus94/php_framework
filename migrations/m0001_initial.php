<?php

use app\core\Application;
use app\core\Migration;

class m0001_initial extends Migration
{
    public function up()
    {
        $this->createTable(Application::$app->database, 'users', [
            "id INT AUTO_INCREMENT PRIMARY KEY",
            "name VARCHAR(50) NOT NULL",
            "created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP"
        ]);
    }

    public function down()
    {
        echo 'destroying migration: ' . \get_class($this);
    }
}
