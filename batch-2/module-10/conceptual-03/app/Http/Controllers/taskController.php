<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class taskController extends Controller
{
      public function showsTask(){
        return view('pages.tasks.task');
      }
}
