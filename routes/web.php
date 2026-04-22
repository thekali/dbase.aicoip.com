<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', fn () => view('landing'));

/** Users **/
Route::get('/register', [UserController::class, 'create'])->middleware('guest');
Route::post('/register', [UserController::class, 'store'])->middleware('guest');

//Route::get('login', [SessionsController::class, 'create'])->name('login')->middleware('guest');
//Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

//Route::post('/logout', [SessionsController::class, 'destroy'])->middleware('auth');