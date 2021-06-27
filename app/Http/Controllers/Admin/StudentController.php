<?php

namespace App\Http\Controllers\Admin;

use App\Models\Student;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StudentsRequest;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::orderBy('no_absen', 'asc')->get();

        return view('admin.students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentsRequest $r)
    {
        if($r->hasFile('picture')) {
            $file = $r->file('picture');
            $extension = $file->extension();
            $imgName = Str::slug($r->name) . '-' . date('d-m-Y') . '.' . $extension;
            $file->storeAs('/images/students/', $imgName, 'public');
        } else {
            $imgName = '';
        }

        $student = Student::create([
            'no_absen' => $r->no_absen,
            'student_role' => $r->role,
            'name' => $r->name,
            'picture' => $imgName,
            'description' => $r->description,
        ]);

        if(!$student) {
            abort(422);
        }

        return redirect()->route('admin.students.show', $student->id)->with('success', 'Student was created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::findOrFail($id);

        return view('admin.students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::findOrFail($id);

        return view('admin.students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StudentsRequest $r, $id)
    {
        $oldStudent = Student::findOrFail($id);

        if($r->hasFile('picture')) {
            Storage::disk('public')->delete('/images/students/' . $oldStudent->picture);
            $file = $r->file('picture');
            $extension = $file->extension();
            $imgName = Str::slug($r->name) . '-' . date('d-m-Y') . '.' . $extension;
            $file->storeAs('/images/students/', $imgName, 'public');
        } else {
            $imgName = $oldStudent->picture;
        }

        $oldStudent->update([
            'no_absen' => $r->no_absen,
            'student_role' => $r->role,
            'name' => $r->name,
            'picture' => $imgName,
            'description' => $r->description,
        ]);

        if($oldStudent === false) {
            abort(422);
        }

        return redirect()->route('admin.students.show', $oldStudent->id)->with('success', 'Student was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::findOrFail($id);

        foreach($student->pickets as $p) {
            $p->delete();
        }

        Storage::disk('public')->delete('/images/students/' . $student->picture);
        $student->delete();

        return redirect()->route('admin.students.index')->with('success', 'Student was deleted successfully!');
    }
}
