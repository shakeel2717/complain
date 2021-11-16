<?php

namespace App\Http\Controllers;

use App\Models\complaint;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $complaint = complaint::where('student_id',1)->get();
        return view('student.complaint.index',[
            'complaints' => $complaint,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.complaint.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task = new complaint();
        $task->student_id = 1;
        $task->to = $request->input('to');
        $task->subject = $request->input('subject');
        $task->message = $request->input('message');
        $task->status = "Open";
        $task->save();
        return redirect()->back()->with('message', 'Task Completed Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\complaint  $complaint
     * @return \Illuminate\Http\Response
     */
    public function show(complaint $complaint)
    {
        return view('complaint.index',[
            'complaint' => $complaint,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\complaint  $complaint
     * @return \Illuminate\Http\Response
     */
    public function edit(complaint $complaint)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\complaint  $complaint
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, complaint $complaint)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\complaint  $complaint
     * @return \Illuminate\Http\Response
     */
    public function destroy(complaint $complaint)
    {
        $task = complaint::find($complaint->id);
        $task->delete();
        // return redirect()->route('pin.index')->with('message', 'Task Completed Successfully');
    }
}