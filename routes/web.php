<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/**
 * @path /users
 * @method GET
 */
Route::get('/users', [\App\Http\Controllers\UserController::class, 'index']);

/**
 * @path /posts
 * @method GET
 */
Route::get('/posts', [\App\Http\Controllers\PostController::class, 'index']);
use App\Http\Controllers\UserManyController;

// Route untuk menampilkan form dan daftar user
Route::get('/usermany', [UserManyController::class, 'index'])->name('usermany.index');

// Route untuk menyimpan data user
Route::post('/usermany', [UserManyController::class, 'store'])->name('usermany.store');
