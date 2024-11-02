<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Socialite; // Make sure to import Socialite for Google authentication

class LoginController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Handle login request
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('home'); // Redirect to intended route
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    // Redirect to Google for authentication
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // Handle Google callback
    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();

        // Logic to handle user information after successful authentication
        // For example, create or find user in the database and log them in

        return redirect()->intended('home');
    }

    // Handle logout request
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login'); // Redirect after logout
    }
}
