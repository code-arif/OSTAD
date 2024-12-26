<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function home()
    {
        return Inertia::render('HomePage');
    }

    //about page
    public function about()
    {
        return Inertia::render('AboutPage');
    }

    //resume page
    public function resume()
    {
        return Inertia::render('ResumePage');
    }

    //service page
    public function service()
    {
        return Inertia::render('ServicePage');
    }

    //portfolio page
    public function portfolio()
    {
        return Inertia::render('PortfolioPage');
    }

    //portfolio details page
    public function portfolioDetails()
    {
        return Inertia::render('PortfolioDetailsPage');
    }

    //contact page
    public function contact(){
        return Inertia::render('ContactPage');
    }
}
