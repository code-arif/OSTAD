<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    function user(){
        return $this->belongsTo(User::class);
    }

    function tag(){
        return $this->belongsToMany(Tag::class,'post_tag');
    }
}
