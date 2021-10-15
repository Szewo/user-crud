<?php

namespace App\Repository;

use App\Models\User;
use PDO;

class UserRepository extends AbstractRepository
{
    public function getAllUsers()
    {
        $sql = 'SELECT * FROM User';

        $db = $this->getPdo();
        $result = $db->query($sql)->fetchAll();

        return $result;
    }

    public function persistUser(User $user)
    {
        $sql = 'INSERT INTO User (user_name, user_surname, user_telephone_number, user_address)
                VALUES(:user_name, :user_surname, :user_telephone_number, :user_address)';

        $db = $this->getPdo()->prepare($sql);
        $db->bindValue(':user_name', $user->getName());
        $db->bindValue(':user_surname', $user->getSurname());
        $db->bindValue(':user_telephone_number', $user->getTelephoneNumber());
        $db->bindValue(':user_address', $user->getAddress());
        $db->execute();
    }

}