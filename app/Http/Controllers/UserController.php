<?php

declare(strict_types=1);

namespace App\Http\Controllers;

class UserController extends Controller
{
    // Create User --> load Register Page
    public function create()
    {

        return view('users.register');

    }
}
