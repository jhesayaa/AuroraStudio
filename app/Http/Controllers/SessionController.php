<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class SessionController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Validate the request input
        $validator = User::make($request->all(), [
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string', 'min:6', 'max:21'],
        ]);
        $user = User::where('email', $request->email)->first();

        if ($user && $request->password == $user->password) {
            // Login pengguna
            Auth::login($user);
        // Attempt to find the user by email
            return redirect()->route('home');
        }
        else{
            return redirect()->route('login')->with('error', 'Email atau password salah');
        }
    }
public function registrasi(){
    return view('registrasi');
}
public function proses(Request $request){
       // dd($request->all());
       $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required',
    ]);

    // Create a new user
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => $request->password,
    ]);
        return redirect('login')->with('success', 'Registration successful, please check your phone for verification.');
}
public function logout(Request $request) 
    {
        $request->session()->flush();
        return redirect('/login');
    }
}


