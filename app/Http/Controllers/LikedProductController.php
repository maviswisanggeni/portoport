<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LikedProductController extends Controller
{
    public function index()
    {
        return view('profile.content.likedproduct.all');
    }
}
