<?php

namespace App\Http\Controllers;

use App\Models\notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
        return view('admin.notification');
    }

    public function adminNotificationReq(Request $request)
    {
        $task = new notification();
        $task->to = $request->input('to');
        $task->message = $request->input('reply');
        $task->from = "Admin";
        $task->save();
        return redirect()->back()->with('message','Task Completed Successfully');
    }
}
