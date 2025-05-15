<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('main_components.login');
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $validated['email'])->first();

        if (!$user) {
            return redirect()->back()->withErrors([
                'email' => 'User not found',
            ])->withInput();
        }

        if (!Hash::check($validated['password'], $user->password)) {
            return redirect()->back()->withErrors([
                'password' => 'Incorrect password',
            ])->withInput();
        }

        Auth::login($user);

        switch ($user->role) {
            case 'super_admin':
                return redirect('/admin');
            case 'admin':
                return redirect('/admin');
            default:
                return redirect('/');
        }
    }
}
