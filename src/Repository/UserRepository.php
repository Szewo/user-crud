<?php

namespace App\Repository;

use App\Models\User;

class UserRepository extends AbstractRepository
{
    public function getAllUsers()
    {
        $sql = 'SELECT * FROM User';

        $db = $this->getPdo();

        return $db->query($sql)->fetchAll();
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

    public function deleteUser(int $userId)
    {
        $sql = 'DELETE FROM User WHERE user_id = :user_id';

        $db = $this->getPdo()->prepare($sql);
        $db->bindValue(':user_id', $userId);
        $db->execute();
    }

}