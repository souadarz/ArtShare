<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Oeuvre extends Model
{
    protected $fillable = ['title','description','category','image','user_id'];
}
