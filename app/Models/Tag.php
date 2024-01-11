<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    //Relacion muchos a muchos (inversa) polimorfica
    public function posts(){
        return $this->morphedByMany(Post::class,'taggable');
    }

    //Relacion muchos a muchos (inversa) polimorfica
    public function videos(){
        return $this->morphedByMany(Video::class,'taggable');
    }
}
