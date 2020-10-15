<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Solution;
use App\Models\Assignment;

class SolutionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $assignment = Assignment::all();
        return view('createsolution')->with('assignment', $assignment);
        // return view('createsolution');
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
            'first_name' => 'required',
            'last_name' => 'required',
            'assignment_course_code' => '',
            'email' => 'required',
            'content' => 'required',
            'snapshot' => '',
            ]
        );
        
        $solution = new Solution();
        $solution->first_name = $request->input('first_name');
        $solution->last_name = $request->input('last_name');
        $solution->assignment_course_code = $request->input('assignment_course_code');
        $solution->email = $request->input('email');
        $solution->content = $request->input('content');
        $solution->user_id = Auth::id();
        
        if ($request->file('snapshot')) {
            $image = $request->file('snapshot');
          
            $ext = $image->getClientOriginalExtension();
            $name = $image->getClientOriginalName();

            $destinationPath = public_path('/snapshots');
            $imagePath = $destinationPath.  $name.'.'.$ext;
            // dd($imagePath);
            // $image->move($destinationPath, $name);
            $solution->snapshot = $imagePath;

        }
        $solution->save();
        
        return redirect('/home')->with('success', 'Solution submitted succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $solution = Solution::find($id);

        return view('showsolution')->with('solution', $solution);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $solution = Solution::find($id);
        
        return view('editsolution')->with('solution', $solution);
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
        $solution = Solution::find($id);
        $solution->first_name = $request->input('first_name');
        $solution->last_name = $request->input('last_name');
        $solution->assignment_course_code = $request->input('assignment_course_code');
        $solution->email = $request->input('email');
        $solution->content = $request->input('content');
        
        if ($request->file('snapshot')) {
            $image = $request->file('snapshot');
          
            $ext = $image->getClientOriginalExtension();
            $name = $image->getClientOriginalName();

            $destinationPath = public_path('/snapshots');
            $imagePath = $destinationPath.  $name.'.'.$ext;
            // dd($imagePath);
            // $image->move($destinationPath, $name);
            $company->logo = $imagePath;

        }
        $solution->save();
        
        return redirect('/home')->with('success', 'Solution edited succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $solution = Solution::find($id);
        $solution->delete();

        return redirect('/home')->with('success', 'Solution deleted succesfully');
    }
}
