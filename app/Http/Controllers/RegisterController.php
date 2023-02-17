<?php

namespace App\Http\Controllers;

use App\models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('session.register');
    }

    public function create(){
        return view('session.create',[
            'user' => User::all()
        ]);
    }
    public function store(Request $request){
        $validateData = $request->validate([
            'name'      => 'required',
            'email'     => 'required',
            'password'  => 'required|max:25'
            
        ]
        );
        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);
        return redirect('/session/register')->with('success','Register Success');
    }
}
