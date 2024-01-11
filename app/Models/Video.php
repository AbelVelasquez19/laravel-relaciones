<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    //Relacion uno a muchos (inverso)
    public function user(){
        return  $this->belongsTo(User::class,'video_id','id');
    }

    //Relacion uno a muchos polimorfica
    public function comments(){
        return $this->morphMany(Comment::class,'commentable');
    }

     //Relacion muchos a muchos polimorfica
     public function posts(){
        return $this->morphToMany(Tag::class,'taggable');
    }
}
