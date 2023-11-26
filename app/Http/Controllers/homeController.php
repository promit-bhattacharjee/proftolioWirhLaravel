<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function homePage()
    {
        return view('pages.homePage');
    }

    public function aboutPage()
    {
        return view('pages.aboutPage');
    }

    public function projectsPage()
    {
        return view('pages.projectsPage');
    }

    public function educationPage()
    {
        return view('pages.educationPage');
    }

    public function interests()
    {
        return view('pages.interestsPage');
    }

    public function awards()
    {
        return view('pages.awardsPage');
    }
}
