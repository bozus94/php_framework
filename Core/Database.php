<?php

namespace app\core;

use PDO;

class Database
{

    public PDO $pdo;

    public function __construct($config)
    {
        $dsn = $config['dsn'];
        $username = $config['user'];
        $password = $config['password'];
        $this->pdo = new PDO($dsn, $username, $password, [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function applyMigrations()
    {
        $this->createMigrationsTable();
        $appliedMigrations = $this->getAppliedMigrations();
        $newMigratios = [];
        $files = \scandir(Application::$rootPath . '/migrations/');
        $toApply = \array_diff($files, $appliedMigrations);
        foreach ($toApply as $migration) {
            if ($migration === '.' || $migration === '..') {
                continue;
            }
            Helpers::require_if_exists(Application::$rootPath . '/migrations/' . $migration);
            $className = \pathinfo($migration, \PATHINFO_FILENAME);
            $instance = new $className();
            Helpers::log("Applygin migration $className");
            $instance->up();
            Helpers::log("Migration $className applied");
            $newMigratios[] = $migration;
        }

        if (!empty($newMigratios)) {
            $this->saveMigrations($newMigratios);
        } else {
            Helpers::log('All migrations applied');
        }
    }

    public function createMigrationsTable()
    {
        $stmt = $this->pdo->prepare(
            "CREATE TABLE IF NOT EXISTS migrations(
            id INT AUTO_INCREMENT PRIMARY KEY,
            migration VARCHAR(255),
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            ) ENGINE = INNODB"
        );
        $stmt->execute();
    }

    public function getAppliedMigrations()
    {
        $stmt = $this->pdo->prepare("SELECT migration FROM migrations");
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_COLUMN);
    }

    public function saveMigrations(array  $migrations)
    {
        $str = \implode(",", \array_map(fn ($m) => "('$m')", $migrations));
        $stmt = $this->pdo->prepare("INSERT INTO migrations (migration) VALUES $str ");
        $stmt->execute();

        return $stmt;
    }
}
