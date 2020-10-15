<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assignment;
use App\Models\Solution;

class AssignmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assignments = Assignment::orderBy('created_at', 'desc')->get();
        $solutions = Solution::all();
        return view('welcome2' ,compact('assignments', 'solutions'));
        // return view('welcome')->with('assignments', $assignments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [
            'course_code' => 'required',
            'lecturer' => 'required',
            'question' => 'required',
            'deadline' => 'required',
            ]
        );
        
        $assignment = new Assignment();
        $assignment->course_code = $request->input('course_code');
        $assignment->lecturer = $request->input('lecturer');
        $assignment->question = $request->input('question');
        $assignment->deadline = $request->input('deadline');
        $assignment->save();
        
        return redirect('/home')->with('success', 'Assignment created succesfully');
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
        $assignment = Assignment::find($id);
        
        return view('edit')->with('assignment', $assignment);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $assignment = Assignment::find($id);
        $assignment->course_code = $request->input('course_code');
        $assignment->lecturer = $request->input('lecturer');
        $assignment->question = $request->input('question');
        $assignment->deadline = $request->input('deadline');
        $assignment->save();

        return redirect('/home')->with('success', 'Assignment edited succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $assignment = Assignment::find($id);
        $assignment->delete();

        return redirect('/home')->with('success', 'Assignment deleted succesfully');

    }
}
