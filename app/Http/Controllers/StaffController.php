<?php

namespace App\Http\Controllers;

use App\Models\staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function login()
    {
        return view('staff.login');
    }


    public function loginReq(Request $request)
    {
        $query = staff::where('email',$request->input('email'))->where('password',$request->input('password'))->first();
        if($query == "") {
            return "Login Failed";
        }
        return view('staff.dashboard');
    }

    public function register()
    {
        return view('staff.register');
    }


    public function index()
    {
        $staff = staff::all();
        return view('staff.index',[
            'staffs' => $staff,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task = new staff();
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
        return redirect()->route('staff.login')->with('message', 'Task Completed Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(staff $staff)
    {
        return view('staff.index',[
            'staff' => $staff,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(staff $staff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, staff $staff)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(staff $staff)
    {
        $task = staff::find($staff->id);
        $task->delete();
        // return redirect()->route('pin.index')->with('message', 'Task Completed Successfully');
    }
}