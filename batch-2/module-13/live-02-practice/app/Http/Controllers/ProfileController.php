<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //profile
    public function showProfile()
    {
        return view('pages.dashboard.profile');
    }

    //edit profile
    public function showEditProfile(){
        return view('pages.dashboard.edit-profile');
    }
}
