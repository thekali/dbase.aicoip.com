<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Create User --> load Register Page
    public function create()
    {

        return view('users.register');

    }
}
