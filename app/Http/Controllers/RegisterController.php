<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('register.index', [
            'title' => 'register',
            'active'=> 'Register'
        ]);
    }
    public function store(Request $request) {
        //return request()->all();
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255',
            'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = hash::make($validatedData['password']);

        User::create($validatedData);

        // $request->session()->flash('success', 'Task was successful!');
        return redirect('login')->with('success', 'Task was successful! Please login');
    }
}
