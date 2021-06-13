<?php

namespace App\Http\Controllers\Admin;

use App\Models\Day;
use App\Models\Picket;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PicketRequest;

class PicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(isset($_GET['filter'])) {
            $filter = request()->get('filter');
            $pickets = Picket::with('day', 'student')->where('day_id', $filter)->get();
        } else {
            $pickets = Picket::with('day', 'student')->get();
        }
        $days = Day::get();

        return view('admin.pickets.index', compact('pickets', 'days'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $days = Day::get();
        $students = Student::orderBy('no_absen', 'asc')->get();

        return view('admin.pickets.create', compact('days', 'students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PicketRequest $r)
    {
        $picket = Picket::create([
            'student_id' => $r->student,
            'day_id' => $r->day,
        ]);

        if(!$picket) {
            return redirect()->route('admin.pickets.index')->with('error', 'Picket was Not Added.');
        }
        
        return redirect()->route('admin.pickets.index')->with('success', 'Picket was Added Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $picket = Picket::findOrFail($id);
        $days = Day::get();
        $students = Student::orderBy('no_absen', 'asc')->get();

        return view('admin.pickets.edit', compact('picket', 'days', 'students'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PicketRequest $r, $id)
    {
        $picket = Picket::findOrFail($id)->update([
            'student_id' => $r->student,
            'day_id' => $r->day
        ]);

        if(!$picket) {
            return redirect()->route('admin.pickets.index')->with('error', 'Picket was Not Updated.');
        }
        
        return redirect()->route('admin.pickets.index')->with('success', 'Picket was Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $picket = Picket::findOrFail($id)->delete();

        if(!$picket) {
            return redirect()->route('admin.pickets.index')->with('error', 'Picket was Not Deleted.');
        }
        
        return redirect()->route('admin.pickets.index')->with('success', 'Picket was Deleted Successfully.');
    }
}
