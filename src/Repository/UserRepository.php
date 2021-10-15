<?php

namespace App\Repository;

use PDO;

class UserRepository extends AbstractRepository
{
    public function getAllUsers()
    {

        $db = $this->getPdo();
        $statement = $db->query('SELECT * FROM User');
        $result = $statement->fetchAll();

        return $result;
    }

}