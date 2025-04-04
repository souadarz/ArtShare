<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    public function permissions(){
        return $this->belongsToMany(Permission::class, 'role_permission');
    }
}
