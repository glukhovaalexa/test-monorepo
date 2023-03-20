<?php

namespace App\Http\Controllers;

use App\Models\User;

class MainController
{

    public function index()
    {
        $users = User::all();

        return view('users', ['users' => $users]);
    }
}
