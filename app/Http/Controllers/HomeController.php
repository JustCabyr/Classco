<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assignment;
use App\Models\Solution;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $assignments = Assignment::orderBy('created_at', 'desc')->get();
        $solutions = Solution::all();
        
        if(auth()->user()->type == 'students') {
            $solutions = Auth::user()->solutions;
        }
        
        return view('home' ,compact('assignments', 'solutions'));
        // return view('home')->with('assignments', $assignments);
    }
}
