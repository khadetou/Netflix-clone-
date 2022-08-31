<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;

class UserController extends Controller
{
    //Show login page
    public function login()
    {
        return view('users.login');
    }

    // Show Register Page
    public function register()
    {
        return view('users.register');
    }

    // Register user
    public function create_user(Request $req)
    {
        // dd($req);

        $formFields = $req->validate([
            'firstname' => ['required', 'min:3'],
            'lastname' => ['required', 'min:3'],
            'username' => ['required', 'min:3'],
            'email' => ['required', 'email', 'confirmed', Rule::unique('users', 'email', 'min:6')],
            'password' => 'required|confirmed|min:6'
        ]);

        // dd($formFields);
        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);
        // Create user
        $user = User::create($formFields);

        // Login
        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in successfully');
    }

    // Login user
    public function login_user(Request $req)
    {
        $formFields = $req->validate([
            "username" => ['required', 'string', 'regex:/\w*$/'],
            "password" => 'required'
        ]);
        if (auth()->attempt($formFields)) {
            $req->session()->regenerate();
            return redirect('/')->with('message', 'You are logged in');
        }
        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }

    // Logout User
    public function logout_user(Request $req)
    {
        auth()->logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect('/')->with('message', 'You have been logged out!');
    }
}