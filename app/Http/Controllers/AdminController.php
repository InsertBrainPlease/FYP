<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Candidate;
use App\Election;
use App\Result;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admins.adminhome')->with('users', $users);
    }

    public function result()
    {
        $elecs = Election::all();
        $cands = Candidate::orderBy('vote' , 'desc')->get();
        $total_votes = $cands->sum('vote');
        return view('admins.adminresult',compact('cands', 'elecs', 'total_votes'));
    }

    public function store(Request $request)
    {
        

    return redirect()->back();
    }
}
