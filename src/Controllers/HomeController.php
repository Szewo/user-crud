<?php

namespace App\Controllers;


use App\Repository\UserRepository;
use App\View;

class HomeController
{

    public function index(): string
    {
        $users = (new UserRepository())->getAllUsers();

        return View::renderView('index', ['users' => $users] );
    }
}