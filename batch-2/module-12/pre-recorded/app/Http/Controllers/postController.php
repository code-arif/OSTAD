<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class postController extends Controller
{
    public function postRead(){
        return Post::with('user')->get();
    }

    public function post_tag(){
        return Post::with('tag')->get();
    }
}
