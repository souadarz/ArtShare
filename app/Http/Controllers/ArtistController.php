<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Oeuvre;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $oeuvres = Oeuvre::with('comments', 'likes')->where('user_id', Auth::id())->get();
        // dd($oeuvres);
        // $user = Auth::user()->with(['oeuvres' => function($query) {
        //     $query->withCount('commentaires');}])->get();
        // $nombreCommentaires = $user->oeuvres->sum('commentaires_count');
        $user = Auth::user();

        return view('dashboardArtist', compact('user', 'oeuvres'));
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
            'biographie' => 'string',
            'parcoursArtistique' => 'string',
            'styleArtistique' => 'string',
            'inspirations' => 'string'
        ]);

        $artist = Artist::create([
            'biographie' => $request->biographie,
            'parcoursArtistique' => $request->parcoursArtistique,
            'styleArtistique' => $request->styleArtistique,
            'inspirations' => $request->inspirations,
            'user_id' => Auth::id()
        ]);

        return redirect()->back();
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
    public function profile()
    {
        $user = Auth::user();
        // dd($user);
        return view('profile', compact('user'));
    }

}
