<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashbaordController extends Controller
{
    public function showDashboard(){
        return view('pages.dashboard.dashboard-page');
    }
}
