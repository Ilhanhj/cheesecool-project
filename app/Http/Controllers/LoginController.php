<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index',[
            'title' => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
        // validasi input $request
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:8|max:255'
        ]);

        // apakah input $request sesuai dengan database ?
        // regenerate untuk mencegah session fixation
        // intended agar melewati middleware
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('fail', 'Login failed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
