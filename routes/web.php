
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

// Home route
Route::get('/', function () {
    return view('home'); // Ensure 'home.blade.php' exists in the resources/views directory
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

// Protected routes that require authentication
Route::middleware(['auth'])->group(function () {
    // Admin routes
    Route::middleware(['role:admin'])->group(function () {
        Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
        // Other admin routes can be added here
    });

    // Customer routes
    Route::middleware(['role:customer'])->group(function () {
        Route::get('/customer', [CustomerController::class, 'index'])->name('customer.index');
        // Other customer routes can be added here
    });

    // Chef routes
    Route::middleware(['role:chef'])->group(function () {
        Route::get('/chef', [ChefController::class, 'index'])->name('chef.index');
        // Other chef routes can be added here
    });
    
    // Social Auth Routes
    Route::get('auth/google', [SocialAuthController::class, 'redirectToGoogle']);
    Route::get('auth/google/callback', [SocialAuthController::class, 'handleGoogleCallback']);
    Route::get('auth/facebook', [SocialAuthController::class, 'redirectToFacebook']);
    Route::get('auth/facebook/callback', [SocialAuthController::class, 'handleFacebookCallback']);
});
