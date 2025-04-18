<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin(){
        return view('login');
    }

    public function login(Request $request){
        $request->validate([
            "email" => "required|email|exists:users,email|string",
            "password" => "required|string"
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return [
                'errors' => [
                    'email' => ['The provided credentials are incorrect.']
                ]
            ];
        }

        Auth::login($user);
        $request->session()->regenerate();
        return redirect('/dashboardArtist');
    }
        
    public function register(Request $request){
        $request->validate([
            'name' => 'required|max:255|string',
            'email' => 'required|email|string|unique:users',
            'password' => 'required|string'
        ]);
        // dd($request);

        $FirstUser = User::count() === 0;
        $role =  $FirstUser ? 'admin' : 'user';
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            ]);

        return redirect('/dashboardArtist');
    }
}
