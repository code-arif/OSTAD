<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Symfony\Component\HttpKernel\Profiler\Profile;
use App\Models\Profile;

class User extends Model
{
    use HasFactory;

    //for profile model
    function profile(){
        return $this->hasOne(Profile::class);
    }
    //for post model
    function post(){
        return $this->hasMany(Post::class);
    }

}
