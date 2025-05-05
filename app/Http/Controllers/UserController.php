<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    //
    public function signup()
    {
        return view('signup');
    }
    public function login()
    {
        return view('login');
    }
    public function register(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required','min:3'],
            'email' => ['required', 'email',Rule::unique('users', 'email')],
            'password' => ['required', 'min:8','confirmed']
        ]);
        $formFields['password'] = bcrypt($formFields['password']);
        $user = User::create($formFields);
        Auth::login($user);
        return redirect('/')->with('message', 'User Created successfully and logged in');
    }
    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        if (Auth::attempt($formFields)) {
            $request->session()->regenerate();
            return redirect('/')->with('message', 'User logged in');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request ->session()->invalidate();
        $request ->session()->regenerateToken();
        return redirect('/')->with('message', 'User logged out');
    }
}
