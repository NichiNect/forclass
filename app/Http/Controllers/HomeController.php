<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Day;
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
        $students = Student::where('student_role', '!=', 'Siswa Kelas')->latest()->get();
        $articles = Article::with('author')->where('status', 'published')->latest()->limit(3)->get();
        return view('frontend.home', compact('students', 'articles'));
    }

    public function students()
    {
        $students = Student::latest()->paginate(10);
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
