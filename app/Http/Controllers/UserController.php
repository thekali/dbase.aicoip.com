<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    // Create User --> load Register Page
    public function create()
    {

        return view('users.register');

    }

    public function store(Request $request)
    {
        // validate register user request
        $request->validate([
            'name' => ['required', 'string', 'min:4', 'max:30'],
            'email' => ['required', 'email', 'max:100', Rule::unique('users', 'email')],
            'password' => ['required', 'string', 'min:8', 'max:100'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        Auth::login($user);

        dd();

        return to_route('/')->with('success', 'Registrazione completata!');

    }
}
