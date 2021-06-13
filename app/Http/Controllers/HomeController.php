<?php

namespace App\Http\Controllers;

use App\Models\Day;
use App\Models\Picket;
use App\Models\Schedule;
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
        $days = Day::with('schedules')->orderBy('id', 'asc')->get();
        // dd($days);
        return view('frontend.schedules', compact('days'));
    }

    public function pickets()
    {
        $days = Day::with('pickets')->orderBy('id', 'asc')->get();
        return view('frontend.pickets', compact('days'));
    }
}
