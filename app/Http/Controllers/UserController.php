<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile()
    {
        $data = auth()->user();
        return view('profile', [
            'title' => 'Profile',
            'user' => $data,
        ]);
    }
}
