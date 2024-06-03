<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function home(){
        $posts = Post::with('category')->get();
        return view('pages.home',compact('posts'));
    }
}
