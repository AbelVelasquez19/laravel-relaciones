<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Relacion uno a muchos (inversa)
    public function user(){
        return $this->belongsTo(User::class,'post_id','id');
    }

    //Relacion uno a muchos (inversa)
    public function category(){
        return $this->belongsTo(category::class,'post_id','id');
    }
}
