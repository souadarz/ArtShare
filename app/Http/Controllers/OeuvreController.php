<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        $oeuvres = Oeuvre::with('category')->get();
        $oeuvres = Oeuvre::paginate(9);
        return view('pageDesŒuvres', compact('oeuvres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('createOeuvre', compact('categories'));
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
            'category_id'=> 'required|integer',
            'image'=> 'required|image|mimes:jpeg,png,jpg'
        ]);

        $imagepath = $request->file('image') ? $request->file('image')->store('images', 'public') : null;
        $oeuvre = Oeuvre::create([
            'title' => $request->title,
            'description' => $request->description,
            'category_id'=> $request->category_id,
            'image'=> $imagepath,
            'user_id' => Auth::id()
        ]);

        return redirect(route('oeuvresDartist'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $oeuvre = Oeuvre::with('category')->where('id',$id)->first();
        $oeuvreSimilaires = Oeuvre::where('id', '!=', $oeuvre->id)->where('user_id',$oeuvre->user_id)->take(3)->get();
        return view('detailsDoeuvre', compact('oeuvre', 'oeuvreSimilaires'));
    }

    public function getoeuvresDartist(){
        $oeuvres = Oeuvre::where('user_id', Auth::id())->get();
        return view('artist.oeuvresDartist', compact('oeuvres'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $oeuvre = Oeuvre::findOrFail($id);
        $categories = Category::all();
        return view('editOeuvre', compact('oeuvre', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Oeuvre $oeuvre)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id'=> 'required|string',
            'image'=> 'image|mimes:jpeg,png,jpg'
        ]);
        
        if ($request->hasFile('image')) {
            $imagepath = $request->file('image')->store('images', 'public');
            $oeuvre->image = $imagepath; 
        }

        $oeuvre->update([
            'title' => $request->title,
            'description' => $request->description,
            'category_id'=> $request->category_id,
            // 'image'=> $imagepath,
            'user_id' => Auth::id()
        ]);

        return redirect(route('oeuvresDartist'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $oeuvre = Oeuvre::findOrFail($id);
       $oeuvre->delete();
       return redirect(route('oeuvresDartist'));
    }
}
