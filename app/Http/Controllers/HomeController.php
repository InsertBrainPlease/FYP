<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Candidate;
use App\Election;
use App\Result;
use App\Position;
use Session;

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
        $cands = Candidate::orderBy('vote' , 'desc')->get();
        $elecs = Election::all();
        $total_votes = $cands->sum('vote');
        return view('pages.result',compact('cands', 'elecs', 'total_votes'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function success()
    {
        return view('pages.success');
    }

    public function store(Request $request, $id)
    {

        //vote
        $votes = $request->all();
        $total = count($votes);
        if ($total < 9) { 
            Session::flash('error', 'You cannot vote less than eight !');

        return back();
        }
        $candidates = Candidate::all();
        foreach ($votes as $vote) {
            $find = Candidate::find($vote);
            if ($find != null){
                $find->vote += 1;
                $find->save();
            }

        }

        $user = User::find($id);

        $user->voted = 1;
        $user->save();

        
        return redirect()->route('success');

    }
}
