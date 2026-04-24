<?php

declare(strict_types=1);

use App\Models\User;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;


/* Landing Page & Errors */
Route::get('/', fn () => view('landing'));

/** Users **/
Route::get('/register', [UserController::class, 'create'])->middleware('guest');
Route::post('/register', [UserController::class, 'store'])->middleware('guest');

/* Condition to create first Admin */
if (!User::exists()) 
    {
        Route::get('login', [SessionsController::class, 'createFirstAdmin'])->name('createFirstAdmin')->middleware('guest');

    } else {
        
        Route::get('login', [SessionsController::class, 'create'])->name('create')->middleware('guest');
    }
//Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

// Route::post('/logout', [SessionsController::class, 'destroy'])->middleware('auth');
