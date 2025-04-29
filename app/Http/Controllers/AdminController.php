<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Oeuvre;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $users = User::all();
        $users = User::with('oeuvres')->get();
        $oeuvres = Oeuvre::with('comments');
        $categories = Category::all();
        return view('dashboardAdmin', compact('users','oeuvres','categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('createUser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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
        
        return redirect('/dashboardAdamin');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::where('id',$id)->first();
        $user->delete();
        return redirect()->back();
    }

    public function changeUserStatus(Request $request, User $user){
        $newStatuses = [
            'actif' => 'bloque',
            'bloque' => 'actif'
        ];
        $user->update(['status'=> $newStatuses[$user->status]]);
        return redirect()->back();

    }
}
