<?php

namespace App\Repository;

use App\Database;

abstract class AbstractRepository
{
    protected Database $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    protected function getPdo(): \PDO
    {
        return $this->database->getDbConnection();
    }
}