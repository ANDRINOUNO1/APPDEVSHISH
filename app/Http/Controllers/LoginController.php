<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Booking;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.Login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            return $this->adminDashboard();
        }

        return back()->with('error', 'Invalid Credentials');
    }
    public function adminDashboard()
    {
        $bookings = Booking::all();
        return view('AdminPage', compact('bookings'));
    }

    public function frontdeskDashboard()
    {
        return view('frontdesk-dashboard');
    }
}
