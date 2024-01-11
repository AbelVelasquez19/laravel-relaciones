<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    //Relacioes muchos a muchos

    public function users(){
        return $this->belongsToMany(User::class,'role_id','id');
    }
}
