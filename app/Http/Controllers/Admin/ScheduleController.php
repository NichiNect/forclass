<?php

namespace App\Http\Controllers\Admin;

use App\Models\Day;
use App\Models\Subject;
use App\Models\Schedule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ScheduleRequest;

class ScheduleController extends Controller
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
            
            $schedules = Schedule::with('day', 'subject')->where('day_id', $filter)->orderBy('day_id', 'asc')->get();
        } else {
            $schedules = Schedule::with('day', 'subject')->orderBy('day_id', 'asc')->get();
        }
        $days = Day::get();

        return view('admin.schedules.index', compact('schedules', 'days'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $days = Day::get();
        $subjects = Subject::get();

        return view('admin.schedules.create', compact('days', 'subjects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ScheduleRequest $r)
    {
        $schedule = Schedule::create([
            'subject_id' =>$r->subject,
            'day_id' => $r->day,
            'start_time' => $r->start_time,
            'end_time' => $r->finish_time,
        ]);

        if(!$schedule) {
            return view('admin.schedules.index')->with('error', 'Schedule was Not Added.');
        }

        return redirect()->route('admin.schedules.index')->with('success', 'Schedule was Added Successfully.');
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
        $schedule = Schedule::findOrFail($id);
        $days = Day::get();
        $subjects = Subject::get();

        return view('admin.schedules.edit', compact('schedule', 'days', 'subjects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ScheduleRequest $r, $id)
    {
        $schedule = Schedule::where('id', $id)->update([
            'subject_id' =>$r->subject,
            'day_id' => $r->day,
            'start_time' => $r->start_time,
            'end_time' => $r->finish_time,
        ]);

        if(!$schedule) {
            return view('admin.schedules.index')->with('error', 'Schedule was Not Edited.');
        }

        return redirect()->route('admin.schedules.index')->with('success', 'Schedule was Edited Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $schedule = Schedule::findOrFail($id)->delete();

        return redirect()->route('admin.schedules.index')->with('success', 'Schedule was Added Successfully.');
    }
}
