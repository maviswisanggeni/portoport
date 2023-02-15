<?php

namespace App\Http\Controllers;

use App\models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index()
    {
        return view('session.login', ["data_user" => User::all()]);
    }

    public function create()
    {
        return view('session.create', ["user" => User::all()]);
    }
    
    public function auth(Request $request)
    {
        //validate data
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }

        return back()->with([
            'loginError' => 'LOGIN GAGAL YA GES!',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/session/login');
    }
}
