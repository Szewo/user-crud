<?php

namespace App;

use PDO;
use PDOException;

class Database
{
    private PDO $connection;

    public function __construct(Config $config)
    {
        try {
            $this->connection = new PDO($config->getDbConfig(), $config->getDbUser(), $config->getDbPassword(),
                                        $this->getPdoOptions());
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    private function getPdoOptions(): array
    {
        return [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];
    }

    public function getDbConnection(): PDO
    {
        return $this->connection;
    }
}
