<?php

namespace App;

class Config
{
    public function getDbConfig()
    {
        return "mysql:host=" . $_ENV['DB_HOST'] . ';port=' . $_ENV['DB_PORT'] . ';dbname=' . $_ENV['DB_NAME'];
    }

    public function getDbUser()
    {
        return $_ENV['DB_USER'];
    }

    public function getDbPassword()
    {
        return $_ENV['DB_PASS'];
    }
}