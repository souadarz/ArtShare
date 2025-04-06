<?php

namespace App\Http\Controllers;

use App\Models\Oeuvre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OeuvreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category'=> 'required|string',
            'image'=> 'required|image|mimes:jpeg,png,jpg'
        ]);
        $imagepath = $request->file('image') ? $request->file('image')->store('images', 'public') : null;
        // dd(Auth::check(), Auth::id());
        $œuvre = Oeuvre::create([
            'title' => $request->title,
            'description' => $request->description,
            'category'=> $request->category,
            'image'=> $imagepath,
            'user_id' => Auth::id()
        ]);

        // return redirect('/mesOeuvres');
        return redirect('/createOeuvre');
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
        //
    }
}
