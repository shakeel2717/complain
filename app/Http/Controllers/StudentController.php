<?php

namespace App\Http\Controllers;

use App\Models\complaint;
use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function login()
    {
        return view('student.login');
    }

    public function loginReq(Request $request)
    {
        $query = student::where('email',$request->input('email'))->where('password',$request->input('password'))->where('status',1)->first();
        if($query == "") {
            return "Login Failed";
        }
        return redirect()->route('student.dashboard');
    }

    public function register()
    {
        return view('student.register');
    }

    public function studentDashboard()
    {
        return view('student.dashboard',[
            'complaints' => complaint::where('student_id',1)->get(),
        ]);
    }


    public function index()
    {
        $student = student::all();
        return view('student.index',[
            'students' => $student,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // query 
        $query = student::where('fname',$request->input('fname'))->where('lname',$request->input('lname'))->where('email',$request->input('email'))->first();
        if($query == "") {
            return "No Record Found";
        }
        $query->status = 1;
        $query->save();
        // return redirect()->back()->withErrors('Wrong Password, Please try again');
        return redirect()->back()->with('message', 'Student Registered Succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(student $student)
    {
        return view('student.index',[
            'student' => $student,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(student $student)
    {
        $task = student::find($student->id);
        $task->delete();
        // return redirect()->route('pin.index')->with('message', 'Task Completed Successfully');
    }
}