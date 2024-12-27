<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function showHome()
    {
        // return Inertia::render('Home/Home');
        return Inertia::render('Home/Home', [
            'title' => 'Home - My App- hello',
            // 'posts' => $this->getPost()
            'posts' => Inertia::defer(fn() => $this->getPost()),
        ]);
    }

    //show about page
    public function showAbout()
    {
        return Inertia::render('About/About');
    }

    //get porst from api
    private function getPost()
    {
        $post = Http::get('https://jsonplaceholder.typicode.com/posts');
        return $post->json();
    }

    //show create student page
    public function showStudent()
    {
        return Inertia::render('Home/Student');
    }

    //create student
    public function createStudent(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'email' => 'required',
        ]);

        $student = Student::create([
            'name' => $request->input('name'),
            'age' => $request->input('age'),
            'email' => $request->input('email'),
        ]);

        return response()->json([
            'message' => 'Student created successfully',
            'student' => $student,
        ],200);
    }
}
