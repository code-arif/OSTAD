<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function showHome(){
        // return Inertia::render('Home/Home');
        return Inertia::render('Home/Home', [
            'title' => 'Home - My App- hello',
            // 'posts' => $this->getPost()
            'posts' => Inertia::defer(fn() =>
                $this->getPost()),
        ]);
    }

    //show about page
    public function showAbout(){
        return Inertia::render('About/About');
    }

    //get porst from api
    private function getPost(){
        $post = Http::get('https://jsonplaceholder.typicode.com/posts');
        return $post->json();
    }
}
