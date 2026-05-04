<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Database\Seeders\AdminSeeder;

class SessionsController extends Controller
{
    public function create()
    {

        if (!user::exists()) {

            $seeder = new AdminSeeder();

            $seeder->run();

        }

        return view('users.login');

    }

    public function store(Request $request)
    {
        /* Validate inputs for credentials*/
        $attributes = $request->validate([
            'email' => ['required', 'email', 'max:100'],
            'password' => ['required', 'string', 'min:5', 'max:100'],
        ]);

        /* Check DB for credentials */
        if (! Auth::attempt($attributes)) {
            return back()
                ->withErrors(['password' => 'Impossibile eseguire il login con le credenziali inserite'])
                ->withInput();
        }


        /* Check for account verification */
        if (Auth::user()->verified === 0) {

            Auth::logout(); // safe logout
            
            return redirect()->route('landing') -> with('message','Il tuo account non è verificato');
        }

        $request->session()->regenerate(); // renew the token to prevent Hijack

        return redirect()->intended(route('landing'))->with('message', 'Ti sei loggato correttamente');

    }

    public function destroy()
    {

        Auth::logout();

        return redirect('/');

    }
}
