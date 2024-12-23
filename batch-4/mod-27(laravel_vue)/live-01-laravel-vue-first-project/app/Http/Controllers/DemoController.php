<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class DemoController extends Controller
{
    public function home(){
        return Inertia::render('HomePage');
    }

    public function profile(){
        return Inertia::render('ProfilePage');
    }
}
