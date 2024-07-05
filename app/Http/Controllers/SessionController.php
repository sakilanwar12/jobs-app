<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }
    public function store()
    {
        $attrs = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (!Auth::attempt($attrs)) {
            throw ValidationException::withMessages([
                'email' => 'You have no account',
            ]);
        }

        request()->session()->regenerate();
        return redirect('/jobs');
    }
    public function destroy()
    {
        Auth::logout();
        return redirect('/login');
    }
}
