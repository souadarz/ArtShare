<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = ['biographie', 'parcoursArtistique','styleArtistique', 'inspirations','user_id','picture'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}