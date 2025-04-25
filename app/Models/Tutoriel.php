<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tutoriel extends Model
{
    protected $fillable = ['title', 'content', 'image', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
