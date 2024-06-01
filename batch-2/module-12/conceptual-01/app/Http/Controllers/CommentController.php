<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Student;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function comment(){
        $comment = Student::with(['comments','profile'])->get();
        return $comment;
    }
}
