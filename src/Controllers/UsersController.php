<?php

namespace App\Controllers;

use App\Models\User;

class UsersController
{
    public function index()
    {
        $title = 'Users';
        $users = User::all();
        view('users/index', compact('title', 'users'));
    }

    public function view()
    {

    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}
