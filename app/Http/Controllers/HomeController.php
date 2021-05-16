<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the Frontend Page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('frontend.home');
    }

    public function students()
    {
        $students = Student::latest()->limit(6)->get();
        return view('frontend.students', compact('students'));
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
