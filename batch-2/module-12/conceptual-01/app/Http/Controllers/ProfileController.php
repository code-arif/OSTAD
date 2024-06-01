<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        $profile = Profile::with('student')->get();
        return $profile;
    }
}
