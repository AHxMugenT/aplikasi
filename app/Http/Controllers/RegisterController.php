<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register',[
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
       $validatedData = $request->validate([
            'name' => 'required|max:100',
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => ['required', 'min:8']
       ]);

       $validatedData['password'] = Hash::make($validatedData['password']);

       User::create($validatedData);

    //    $request->session()->flash('success', 'Registration successfull! Please Login');

       return redirect('/login')->with('success', 'Registration successfull! Please Login');
    }
}
