<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\UserController;

// Authentication Routes
Route::get('/login', [LoginController::class, 'create'])->name('login'); // Show the login form
Route::post('/login', [LoginController::class, 'login']); // Handle the login request
Route::post('/logout', [LoginController::class, 'logout'])->name('logout'); // Handle logout

// Registration Routes
Route::get('/register', [RegisterController::class, 'create'])->name('register'); // Show the registration form
Route::post('/register', [RegisterController::class, 'store']); // Handle the registration request

// Admin Routes
Route::middleware('auth') // Ensure only authenticated users can access these routes
    ->prefix('admin') 
    ->group(function () {
        Route::get('/users', [UserController::class, 'index'])->name('admin.users.index'); // List users
        Route::get('/users/{user}', [UserController::class, 'show'])->name('admin.users.show'); // Show user details
        Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('admin.users.edit'); // Edit user form
        Route::post('/users', [UserController::class, 'store'])->name('admin.users.store'); // Create new user
        Route::put('/users/{user}', [UserController::class, 'update'])->name('admin.users.update'); // Update user
        Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('admin.users.destroy'); // Delete user
        Route::post('/users/{user}/block', [UserController::class, 'block'])->name('admin.users.block'); // Block user
        Route::post('/users/{user}/unblock', [UserController::class, 'unblock'])->name('admin.users.unblock'); // Unblock user
    });

// Home Route
Route::get('/home', function () {
    return view('home'); // Your home view
})->middleware('auth'); // Only accessible to authenticated users
