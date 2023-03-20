<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;

class UserController
{

    public function index()
    {
        $number = rand(1, 100);

        User::insert([
            'name' => "Sasha-$number",
            'email' => "sasha$number@test.com",
            'password' => Str::uuid()->toString(),
        ]);

        $number = User::all()->count();

        echo " New user number $number was added!";
    }
}
