<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

     //Relacioes muchos a muchos
     public function roles(){
        return $this->belongsToMany('App\Models\Role');
    }
}
