<?php

declare(strict_types=1);

use App\Http\Controllers\UserController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


/* Landing Page & Errors */
Route::get('/', fn () => view('landing'));
Route::any('{catchall}', [PageController::class, 'notfound'])->where('catchall', '.*');


/** Users **/
Route::get('/register', [UserController::class, 'create'])->middleware('guest');
Route::post('/register', [UserController::class, 'store'])->middleware('guest');

// Route::get('login', [SessionsController::class, 'create'])->name('login')->middleware('guest');
// Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

// Route::post('/logout', [SessionsController::class, 'destroy'])->middleware('auth');
