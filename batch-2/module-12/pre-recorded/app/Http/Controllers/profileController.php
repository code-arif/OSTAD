<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class profileController extends Controller
{
    public function profile(){
        return Profile::with('user')->get();
    }
}
