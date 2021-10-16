<?php

namespace App\Controllers;


use App\Repository\UserRepository;
use App\View;

class HomeController
{
    private UserRepository $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index(): string
    {
        $users = $this->userRepository->getAllUsers();

        return View::renderView('index', ['users' => $users]);
    }

    public function addUser(): string
    {
        return View::renderView('add_user');
    }

}