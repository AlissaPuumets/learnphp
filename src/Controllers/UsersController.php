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
        $user = User::find($_GET['id']);
        if($user) {
            return view('users/view', compact('user'));
        }
        echo 404;
    }

    public function edit()
    {
        $user = User::find($_GET['id']);
        if($user) {
            return view('users/edit', compact('user'));
        }
        echo 404;
    }

    public function update()
    {
        $user = User::find($_GET['id']);
        if(!$user) {
            echo 404;
            return;
        }

        $editUrl = '/admin/users/edit?id=' . $user->id;

        // email must stay unique
        foreach(User::where('email', $_POST['email']) as $other) {
            if($other->id != $user->id) {
                return redirect($editUrl);
            }
        }

        // name and email are part of the password salt,
        // so changing them needs a new password or login would break
        $saltChanged = $_POST['name'] !== $user->name || $_POST['email'] !== $user->email;
        if($saltChanged && $_POST['password'] === '') {
            return redirect($editUrl);
        }

        $user->name = $_POST['name'];
        $user->email = $_POST['email'];
        if($_POST['password'] !== '') {
            $user->password = password_hash($user->name . $user->email . $_POST['password'] . md5('yolo'), PASSWORD_BCRYPT);
        }
        $user->save();
        redirect('/admin/users');
    }

    public function delete()
    {
        $user = User::find($_GET['id']);
        if($user) {
            $user->delete();
            // deleting yourself also logs you out
            if(($_SESSION['userID'] ?? null) == $user->id) {
                unset($_SESSION['userID']);
            }
            return redirect('/admin/users');
        }
        echo 404;
    }
}
