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
use App\Http\Controllers\Auth\SocialAuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OTPController;

// Home route
Route::get('/', function () {
    return view('home');
})->name('home');

// OTP Verification routes
// OTP Verification routes
Route::get('/otp/verify/{user_id}', [OTPController::class, 'showForm'])->name('otp.form');
Route::post('/otp/verify', [OTPController::class, 'verify'])->name('otp.verify');


// Pages
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/recipes', [RecipeController::class, 'index'])->name('recipes');
Route::get('/meal-plans', [MealPlanController::class, 'index'])->name('meal-plans');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Authentication routes
Route::prefix('auth')->group(function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/register', [RegisterController::class, 'create'])->name('register.create');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

    // Social Auth
    Route::get('/google', [SocialAuthController::class, 'redirectToGoogle'])->name('login.google');
    Route::get('/google/callback', [SocialAuthController::class, 'handleGoogleCallback']);
    Route::get('/facebook', [SocialAuthController::class, 'redirectToFacebook']);
    Route::get('/facebook/callback', [SocialAuthController::class, 'handleFacebookCallback']);
});

// Authenticated routes
Route::middleware(['auth'])->group(function () {
    // Admin routes
    Route::middleware(['role:admin'])->prefix('admin')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin.index');

        Route::prefix('users')->group(function () {
            Route::get('/', [UserController::class, 'index'])->name('admin.users.index');
            Route::get('/{user}', [UserController::class, 'show'])->name('admin.users.show');
            Route::get('/{user}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
            Route::post('/', [UserController::class, 'store'])->name('admin.users.store');
            Route::put('/{user}', [UserController::class, 'update'])->name('admin.users.update');
            Route::delete('/{user}', [UserController::class, 'destroy'])->name('admin.users.destroy');
            Route::post('/{user}/block', [UserController::class, 'block'])->name('admin.users.block');
            Route::post('/{user}/unblock', [UserController::class, 'unblock'])->name('admin.users.unblock');
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
});
