<?php

namespace App\Http\Controllers;

use App\Models\tutoriel;
use App\Models\Tutoriel as ModelsTutoriel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TutorielController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tutoriels = Tutoriel::all();
        return view('tutoriels', compact('tutoriels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tutoriel.createTutoriel');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image'=> 'required|image|mimes:jpeg,png,jpg'
        ]);

        $imagepath = $request->file('image') ? $request->file('image')->store('images', 'public') : null;

        $tutoriel = Tutoriel::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $imagepath,
            'user_id' => Auth::id()
        ]);

        return redirect( route('tutorielsDartist'));
    }

    /**
     * Display the specified resource.
     */
    public function show(tutoriel $tutoriel)
    {
        
    }

    public function getTutorielDartist(){
        $tutoriels = Tutoriel::where('user_id', Auth::id())->get();
        return view('mesTutoriels', compact('tutoriels'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tutoriel $tutoriel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tutoriel $tutoriel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tutoriel $tutoriel)
    {
        //
    }
}
