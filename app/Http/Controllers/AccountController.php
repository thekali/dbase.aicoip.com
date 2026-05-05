<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AccountController extends Controller
{
    public function index(Request $request)
    {
        if (!Auth::user()) {
           
            return view('login');
      }

        $user = Auth::user();
       
        return view('accounts.index', [
            'name' => $user->name,
            'email' => $user->email,
            'accounts' => User::all(),
        ]);
    }
}
