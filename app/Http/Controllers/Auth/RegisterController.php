<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    // Show the registration form
    public function create()
    {
        return view('auth.register'); // Point to your registration view
    }

    // Handle the registration request
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone_number' => 'required|string|max:20',
            'password' => 'required|string|min:8|confirmed',
            'date_of_birth' => 'required|date',
            'profile_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Optional
            'state' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'gender' => 'required|string|in:male,female,other', // Example gender options
            'role' => 'required|string|in:customer,chef', // Only customer or chef roles allowed
        ]);

        // Handle the profile photo upload
        if ($request->hasFile('profile_photo')) {
            $photoPath = $request->file('profile_photo')->store('profile_photos', 'public');
        } else {
            $photoPath = null; // Set to null if no file is uploaded
        }

        // Create the user
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'password' => Hash::make($request->password),
            'date_of_birth' => $request->date_of_birth,
            'profile_photo' => $photoPath,
            'state' => $request->state,
            'country' => $request->country,
            'gender' => $request->gender,
            'role' => $request->role,
        ]);

        return response()->json(['success' => true, 'redirect' => url('/home')]);
    }
}
