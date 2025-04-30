<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Oeuvre;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showDashboardArtist()
    {
        $oeuvres = Oeuvre::where('user_id', Auth::id())->get();
        $totalLikes = Oeuvre::where('user_id', auth()->id())->withCount('likes')
            ->get()->sum('likes_count');

        $totalComments = Oeuvre::where('user_id', auth()->id())->withCount('comments')
            ->get()->sum('comments_count');
        $user = Auth::user();

        return view('dashboardArtist', compact('user', 'oeuvres', 'totalComments', 'totalLikes'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('biographieDartist');
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
    public function update(Request $request)
    {
       //
    }

    public function storeOrUpdate(Request $request)
    {
        $request->validate([
            'picture' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'biographie' => 'nullable|string',
            'parcoursArtistique' => 'nullable|string',
            'styleArtistique' => 'nullable|string',
            'inspirations' => 'nullable|string'
        ]);
        
        $user = auth()->user();
    
        $picturePath = null;

        if ($request->hasFile('picture')) {

            if ($user->artist && $user->artist->picture) {
                Storage::disk('public')->delete($user->artist->picture);
            }
        
            $picturePath = $request->file('picture')->store('images', 'public');
        }

        if ($user->artist) {
            $user->artist->update([
                'biographie' => $request->biographie,
                'parcoursArtistique' => $request->parcoursArtistique,
                'styleArtistique' => $request->styleArtistique,
                'inspirations' => $request->inspirations,
                'picture' => $picturePath ?? $user->artist->picture,
            ]);
        } else {
            $user->artist()->create([
                'biographie' => $request->biographie,
                'parcoursArtistique' => $request->parcoursArtistique,
                'styleArtistique' => $request->styleArtistique,
                'inspirations' => $request->inspirations,
                'picture' => $picturePath,
            ]);
        }
    
        return redirect()->back();
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function showProfileArtist($id)
    {
        $user = User::where('role', 'artiste')->with('artist')->findOrfail($id);

        return view('profile', compact('user'));
    }
}
