<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Oeuvre extends Model
{
    protected $fillable = ['title','description','category','image','user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
