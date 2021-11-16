<?php

namespace App\Http\Controllers;

use App\Models\reply;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reply = reply::all();
        return view('reply.index',[
            'replys' => $reply,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reply.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
        // 'test' => 'required|min:4|max:30|exists:admins',
        ]);
        $task = new reply();
        $task->test = $validated['test'];
        $task->save();
        // return redirect()->back()->withErrors('Wrong Password, Please try again');
        // return redirect()->route('pin.index')->with('message', 'Task Completed Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function show(reply $reply)
    {
        return view('reply.index',[
            'reply' => $reply,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function edit(reply $reply)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, reply $reply)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function destroy(reply $reply)
    {
        $task = reply::find($reply->id);
        $task->delete();
        // return redirect()->route('pin.index')->with('message', 'Task Completed Successfully');
    }
}