<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class permission extends Model
{
    public function role(){
        return $this->belongsToMany(Role::class, 'role_permission');
    }
}
