<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            "email" => "required|email|exists:users,email|string",
            "password" => "required|string"
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->withErrors([
                'password' => 'Les identifiants sont incorrects.',
            ]);
        }

        $role = $user->role;
        // dd($role);
        Auth::login($user);
        $request->session()->regenerate(); 
        if ($role == 'admin'){
            return redirect('/dashboardAdamin');
        }else if($role == 'artiste'){
            return redirect(route('dashboardArtist'));
        }else{
            return redirect('/');
        }
            
    }

    public function showRegister(){
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255|string',
            'email' => 'required|email|string|unique:users',
            'password' => 'required|string',
            'role' => 'required|string|in:artiste,utilisateur',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'status' => 'actif',
            'role' => $request->role,
        ]);
        
        return redirect('/login');
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
