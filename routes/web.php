<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\MealPlanController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\Auth\SocialLoginController;
use App\Http\Controllers\Auth\SocialAuthController;
use App\Http\Controllers\UserController; 
// Home route
Route::get('/', function () {
    return view('home'); 
})->name('home');

// About page
Route::get('/about', [PageController::class, 'about'])->name('about');

// Recipe index
Route::get('/recipes', [RecipeController::class, 'index'])->name('recipes');

// Meal plans
Route::get('/meal-plans', [MealPlanController::class, 'index'])->name('meal-plans');

// Contact page
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Authentication routes
Route::prefix('auth')->group(function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
    Route::get('login/google', [LoginController::class, 'redirectToGoogle'])->name('login.google');
    Route::get('login/google/callback', [LoginController::class, 'handleGoogleCallback']);
    Route::get('/register', [RegisterController::class, 'create'])->name('register.create');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
});

Route::middleware(['auth'])->group(function () {
    // Admin routes
    Route::middleware(['role:admin'])->group(function () {
        Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
        
        // Admin User Management
        Route::prefix('admin')->group(function () {
            Route::get('/users', [UserController::class, 'index'])->name('admin.users.index'); // List users
            Route::get('/users/{user}', [UserController::class, 'show'])->name('admin.users.show'); // Show user details
            Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('admin.users.edit'); // Edit user form
            Route::post('/users', [UserController::class, 'store'])->name('admin.users.store'); // Create new user
            Route::put('/users/{user}', [UserController::class, 'update'])->name('admin.users.update'); // Update user
            Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('admin.users.destroy'); // Delete user
            Route::post('/users/{user}/block', [UserController::class, 'block'])->name('admin.users.block'); // Block user
            Route::post('/users/{user}/unblock', [UserController::class, 'unblock'])->name('admin.users.unblock'); // Unblock user
        });
    });

    // Customer routes
    Route::middleware(['role:customer'])->group(function () {
        Route::get('/customer', [CustomerController::class, 'index'])->name('customer.index');
    });

    // Chef routes
    Route::middleware(['role:chef'])->group(function () {
        Route::get('/chef', [ChefController::class, 'index'])->name('chef.index');
    });

    // Social Auth Routes
    Route::get('auth/google', [SocialAuthController::class, 'redirectToGoogle']);
    Route::get('auth/google/callback', [SocialAuthController::class, 'handleGoogleCallback']);
    Route::get('auth/facebook', [SocialAuthController::class, 'redirectToFacebook']);
    Route::get('auth/facebook/callback', [SocialAuthController::class, 'handleFacebookCallback']);
});
