<?php

namespace app\core;

abstract class Migration
{

    public function createTable(Database $database, string $tableName,  ?array $attributes = [])
    {
        $str = \implode(",", array_map(fn ($a) => "$a", $attributes));
        $stmt = $database->pdo->prepare(
            "CREATE TABLE IF NOT EXISTS $tableName($str) ENGINE = INNODB"
        );
        $stmt->execute();
    }

    public function alterTable(string $tableName,  array $attributes)
    {
    }
}
