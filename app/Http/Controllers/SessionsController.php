<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    public function create()
    {

        return view('users.login');

    }

    public function createFirstAdmin()
    {

        return view('users.register');

    }
}
