<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class RegisterController extends Controller
{
    public function register(){
        return view('register/register');
    }
    public function registerSubmit(Request $request){
        Admin::create([
            'name' => $request->input('name'),
            'password' => $request->input('password'),
            'role' => $request->input('role'),
        ]);
        return redirect()->route('login.admin');
    }
}
