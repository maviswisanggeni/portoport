<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.all');
    }

    // public function create()
    // {
    //     return view('profile.create');
    // }
    
    // public function store(Request $request)
    // {
    //     return view('profile.store');
    // }

    // public function edit($id)
    // {
    //     return view('profile.edit');
    // }

    // public function update(Request $request, $id)
    // {
    //     return view('profile.update');
    // }

    // public function delete($id)
    // {
    //     return view('profile.delete');
    // }
}
