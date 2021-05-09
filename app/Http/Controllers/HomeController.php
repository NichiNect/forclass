<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('frontend.home');
    }

    public function students()
    {
        return view('frontend.students');
    }

    public function schedules()
    {
        return view('frontend.schedules');
    }

    public function pickets()
    {
        return view('frontend.pickets');
    }
}
