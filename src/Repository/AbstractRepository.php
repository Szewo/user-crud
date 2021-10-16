<?php

namespace App\Repository;

use App\Database;

abstract class AbstractRepository
{
    protected Database $database;

    public function __construct(Database $database)
    {
        $this->database = $database;
    }

    protected function getPdo(): \PDO
    {
        return $this->database->getDbConnection();
    }
}