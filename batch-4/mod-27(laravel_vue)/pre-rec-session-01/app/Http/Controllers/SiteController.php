<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class SiteController extends Controller
{
    //show page 1
    public function page1(){
        $person = ['name' => "Md. Ariful Islam", 'age' => 25];
        return Inertia::render('Page1',['data' => $person]);
    }
    //show page 2
    public function page2(){
        $title = ['title' => "Welcome to Page 2"];
        return Inertia::render('Page2')->withViewData(['title' => $title]);
    }
    //show page 3
    public function page3(){
        $share_data = ['message' => "You are registared successfully", 'status' => "success", 'code' => 200];
        return Inertia::render('Page3')->with($share_data);
    }
    //show page 4
    public function page4(){
        return Inertia::render('Page4');
    }
    //show page 5
    public function page5(){
        return Inertia::render('Page5');
    }
}
