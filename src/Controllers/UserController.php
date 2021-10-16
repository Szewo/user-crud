<?php

namespace App\Controllers;

use App\Models\User;
use App\Repository\UserRepository;
use App\View;

class UserController
{
    private UserRepository $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function persistUser()
    {
        $user = new User(
            $_REQUEST['user_name'],
            $_REQUEST['user_surname'],
            $_REQUEST['user_telephone_number'],
            $_REQUEST['user_address']
        );

        $this->userRepository->persistUser($user);

        header('Location: /');
    }

    public function deleteUser()
    {
        $this->userRepository->deleteUser((int)$_REQUEST['id']);

        header('Location: /');
    }

    public function updateUser(): string
    {
        $userArray = $this->userRepository->getUserById((int)$_REQUEST['id']);

        return View::renderView('update_user', ['user' => $userArray]);
    }

    public function persistUpdatedUser()
    {
        $user = new User(
            $_REQUEST['user_name'],
            $_REQUEST['user_surname'],
            $_REQUEST['user_telephone_number'],
            $_REQUEST['user_address']
        );

        $this->userRepository->updateUser($user, (int) $_REQUEST['id']);

        header('Location: /');
    }

}