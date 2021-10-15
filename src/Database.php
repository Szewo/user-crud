<?php

namespace App;

use PDO;
use PDOException;

class Database
{
    private PDO $connection;

    public function __construct()
    {
        try {
            $this->connection = new PDO("mysql:host=db;port=3306;dbname=db", 'user', 'pass',
            [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getDbConnection(): PDO
    {
        return $this->connection;
    }
}
