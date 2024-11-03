<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\OTPMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    // Show the registration form
    public function create()
    {
        return view('auth.register');
    }

    // Handle the registration request
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'phone_number' => 'required|string|max:20',
            'password' => 'required|string|min:8|confirmed',
            'date_of_birth' => 'required|date',
            'profile_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'state' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'gender' => 'required|string|in:male,female,other',
            'role' => 'required|string|in:customer,chef',
        ]);

        // Store profile photo if exists
        $photoPath = $request->hasFile('profile_photo')
            ? $request->file('profile_photo')->store('profile_photos', 'public')
            : null;

        // Create the user
        $user = User::create([
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

        // Generate and cache the OTP
        $otp = random_int(100000, 999999);
        Cache::put('otp_' . $user->id, $otp, now()->addMinutes(5));

        // Send the OTP email
        Mail::to($user->email)->send(new OTPMail($otp));

        // Redirect to OTP verification form
        return redirect()->route('otp.form', ['user_id' => $user->id]);
    }
}
