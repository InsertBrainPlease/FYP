<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Candidate;
use App\Election;
use App\Result;
use App\Position;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $elecs = Election::all();
        return view('pages.home', compact('elecs'));   
    }

    public function vote()
    {
        $cands = Candidate::all();
        $elecs = Election::all();
        return view('pages.vote',compact('cands', 'elecs'));
    }

    public function result()
    {
        $cands = Candidate::all();
        $elecs = Election::all();
        return view('pages.result',compact('cands', 'elecs'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function success()
    {
        return view('pages.success');
    }

    public function store(Request $request)
    {

       $this->validate($request, [

            'vote' => 'required',
            ]);

            $cands = new Candidate;

            $cands->votes = $request->votes;
            $cands->save();
        
        return redirect()->route('success');
    }
}
