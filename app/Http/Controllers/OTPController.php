<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\User;

class OTPController extends Controller
{
    // Show the OTP verification form
    public function showForm($user_id)
    {
        return view('auth.otp_form', ['user_id' => $user_id]);
    }

    // Handle the verification of the OTP
    public function verify(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'otp' => 'required|integer',
        ]);

        $cachedOtp = Cache::get('otp_' . $request->user_id);

        if (!$cachedOtp) {
            return redirect()->back()->withErrors(['otp' => 'OTP has expired.']);
        }

        if ($cachedOtp == $request->otp) {
            $user = User::find($request->user_id);
            $user->email_verified_at = now();
            $user->save();
            Cache::forget('otp_' . $request->user_id);
            return redirect()->route('home')->with('success', 'Email verified successfully!');
        }

        return redirect()->back()->withErrors(['otp' => 'Invalid OTP.']);
    }
}
