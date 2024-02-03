<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;



class registerController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:255'
        ]);
        
        // password encryption
        // $validatedData['password'] = bcrypt($validatedData['password']); 
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        //flash data
        //session()->flash('success', 'Registration successfull. Please Login');

        //after register go to login
        return redirect('login') -> with('success', 'Registration successfull. Please Login');
        ;
    }
}
