<?php

declare(strict_types=1);

use App\Http\Controllers\UserController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;


/* Landing Page & Errors */
Route::get('/', fn () => view('landing'));
Route::get('/landing', fn () => view('landing'))->name('landing');

/** Users Register, Login, Edit, Logout **/
Route::get('/register', [UserController::class, 'create'])->middleware('guest');
Route::post('/register', [UserController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->name('login')->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

Route::post('/logout', [SessionsController::class, 'destroy'])->middleware('auth');
 
//Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

// Route::post('/logout', [SessionsController::class, 'destroy'])->middleware('auth');
