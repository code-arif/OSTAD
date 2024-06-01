<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class allPostController extends Controller
{
    //allPost show
    public function allPost(){
        $posts = Post::latest()->get();
        return view('pages.allPost',compact('posts'));
    }
}
