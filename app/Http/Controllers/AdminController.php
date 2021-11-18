<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\complaint;
use App\Models\notification;
use App\Models\reply;
use App\Models\staff;
use App\Models\student;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function login()
    {
        return view('admin.login');
    }

    public function loginReq(Request $request)
    {
        $query = admin::where('email',$request->input('email'))->where('password',$request->input('password'))->first();
        if($query == "") {
            return "Login Failed";
        }
        return redirect()->route('admin.index');
    }

    public function register()
    {
        return view('admin.register');
    }

    public function staffApprove($id)
    {
        $task = staff::find($id);
        $task->status = "Yes";
        $task->save();
        return redirect()->back()->with('message','Task Completed Successfully');

    }


    public function adminStaffNotification()
    {
        return view('admin.adminStaffNotification',[
            'notifications' => notification::where('to','Admin')->get(),
        ]);
    }

    public function staffStop($id)
    {
        $task = staff::find($id);
        $task->status = "No";
        $task->save();
        return redirect()->back()->with('message','Task Completed Successfully');

    }


    public function createStudent()
    {
        return view('admin.createStudent');
    }

    public function index()
    {
        $complaints = complaint::get();
        $students = student::get();
        return view('admin.dashboard',[
            'complaints' => $complaints,
            'students' => $students,
            'reply' => reply::get(),
        ]);
    }

    public function totalComplaintsRej($id)
    {
        $task = complaint::find($id);
        $task->status = "Rejected";
        $task->save();
        return redirect()->back()->with('message','Task Completed Successfully');
    }

    public function students()
    {
        return view('admin.students',[
            'students' => student::all(),
        ]);
    }

    public function staffs()
    {
        return view('admin.staffs',[
            'staffs' => staff::all(),
        ]);
    }


    public function totalComplaintsDel($id)
    {
        $task = complaint::find($id);
        $task->status = "Deleted";
        $task->save();
        return redirect()->back()->with('message','Task Completed Successfully');
    }

    public function totalComplaintsFix($id)
    {
        $task = complaint::find($id);
        $task->status = "Completed";
        $task->save();
        return redirect()->back()->with('message','Task Completed Successfully');
    }

    
    public function totalComplaints()
    {
        
        $complaints = complaint::get();
        return view('admin.totalComplaints',[
            'complaints' => $complaints
        ]);
    }
    
    
    public function compalinReply($id)
    {
        $complaint = complaint::find($id);
        return view('admin.compalinReply',[
            'complaint' => $complaint
        ]);
    }

    public function compalinReplyReq(Request $request)
    {
        $task = new reply();
        $task->complaint_id = $request->input('complaint_id');
        $task->student_id = $request->input('student_id');
        $task->message = $request->input('reply');
        $task->status = "Replied";
        $task->save();

        // chaning the status of this Complaint
        $task = complaint::find($request->input('complaint_id'));
        $task->status = "Replied";
        $task->save();
        return redirect()->back();
    }


    public function officer()
    {
        return view('admin.officer',[
            'complaints' => complaint::where('subject','Officer')->get(),
        ]);
    }


    public function teacher()
    {
        return view('admin.teacher',[
            'complaints' => complaint::where('subject','Teacher')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task = new admin();
        $task->password = $request->input('password');
        $task->email = $request->input('email');
        $task->save();
        return redirect()->route('admin.login')->with('message', 'Task Completed Successfully');
    }


    public function studentStore(Request $request)
    {
        $task = new student();
        $task->fname = $request->input('fname');
        $task->lname = $request->input('lname');
        $task->username = $request->input('username');
        $task->password = $request->input('password');
        $task->email = $request->input('email');
        $task->mobile = $request->input('mobile');
        $task->address = $request->input('address');
        $task->program = $request->input('program');
        $task->programs = $request->input('programs');
        $task->dob = $request->input('dob');
        $task->status = 0;
        $task->save();
        // return redirect()->back()->withErrors('Wrong Password, Please try again');
        return redirect()->back()->with('message', 'Task Completed Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(admin $admin)
    {
        return view('admin.index',[
            'admin' => $admin,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(admin $admin)
    {
        $task = admin::find($admin->id);
        $task->delete();
        // return redirect()->route('pin.index')->with('message', 'Task Completed Successfully');
    }
}