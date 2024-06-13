<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller

{
    public function register()
    {
        return view('auth.register', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email:dns', 'max:255', 'unique:users'],
            'phone_number' => ['required', 'max:15', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        if ($validatedData['password'] !== $request->password_confirmation) {
            return back()->with('error', 'Password confirmation does not match.');
        }

        $validatedData['id'] = Str::uuid();
        $validatedData['password'] = Hash::make($validatedData['password']);


        User::create([
            'id' => $validatedData['id'],
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone_number' => $validatedData['phone_number'],
            'address' => $request->address,
            'password' => $validatedData['password'],
        ]);

        return redirect()->route('login')->with('success', 'Register success! Please login.');
    }
}
