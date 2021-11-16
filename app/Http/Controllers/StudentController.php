<?php

namespace App\Http\Controllers;

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
        $query = student::where('email',$request->input('email'))->where('password',$request->input('password'))->first();
        if($query == "") {
            return "Login Failed";
        }
        return view('student.dashboard');
    }

    public function register()
    {
        return view('student.register');
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
        $task = new student();
        $task->fname = $request->input('fname');
        $task->lname = $request->input('lname');
        $task->username = $request->input('username');
        $task->password = $request->input('password');
        $task->email = $request->input('email');
        $task->mobile = $request->input('mobile');
        $task->address = $request->input('address');
        $task->dob = $request->input('dob');
        $task->save();
        // return redirect()->back()->withErrors('Wrong Password, Please try again');
        return redirect()->route('student.login')->with('message', 'Task Completed Successfully');
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