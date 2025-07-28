<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $request->remember)) {

            $user = Auth::user();

            if ($user->role->name == 'admin') {
                return redirect()->route('admin');
            } else {
                return redirect()->route('staff');
            }
        }

        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ])->withInput();
    }
}