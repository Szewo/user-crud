<?php

namespace App\Controllers;


use App\Models\User;
use App\Repository\UserRepository;
use App\View;

class HomeController
{

    public function index(): string
    {
        $users = (new UserRepository())->getAllUsers();

        return View::renderView('index', ['users' => $users]);
    }

    public function addUser(): string
    {
        return View::renderView('add_user');
    }

    public function handleFormData()
    {
        $user = new User(
            $_REQUEST['user_name'],
            $_REQUEST['user_surname'],
            $_REQUEST['user_telephone_number'],
            $_REQUEST['user_address']
        );

        (new UserRepository())->persistUser($user);

        header('Location: /');
    }

    public function deleteUser()
    {
        (new UserRepository())->deleteUser((int)$_REQUEST['id']);

        header('Location: /');
    }

    public function updateUser(): string
    {
        $userRepository = new UserRepository();
        $userArray = $userRepository->getUserById((int)$_REQUEST['id']);

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

        (new UserRepository())->updateUser($user, (int) $_REQUEST['id']);

        header('Location: /');
    }
}