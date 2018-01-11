<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Election;
use App\User;
use App\Candidate;
use Carbon;

class ElectionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $elecs = Election::all();
        return view('elections.index', compact('elecs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $elecs = Election::all();
        return view('elections.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [

            'title' => 'required',
            'session' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required', 
            'start_time' => 'required', 
            'end_time' => 'required', 
            ]);

        $count = Election::all()->count();
        if($count>0){
            return view ('elections.full');
        }

        $elecs = new Election;

        $elecs->title = $request->title;
        $elecs->session = $request->session;
        $elecs->description = $request->description;
        $elecs->start_date = $request->start_date;
        $elecs->end_date = $request->end_date;
        $elecs->start_time = $request->start_time;
        $elecs->end_time = $request->end_time;
        $elecs->save();

        return redirect()->route('election.show', $elecs->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $elecs = Election::find($id);
        return view('elections.show',compact('elecs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $elec = Election::find($id);
        return view('elections.edit', compact('elec'));
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
        $elec = Election::find($id);

        $this->validate($request, [

            'title' => 'required',
            'session' => 'required',
            'description' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|after:start_date', 
            'start_time' => 'required|time', 
            'end_time' => 'required|after:start_time', 
            ]);

        // Assign local variable
        $elecs = Election::find($id);

        $elecs->title = $request->title;
        $elecs->session = $request->session;
        $elecs->description = $request->description;
        $elecs->start_date = $request->start_date;
        $elecs->end_date = $request->end_date;
        $elecs->start_time = $request->start_time;
        $elecs->end_time = $request->end_time;
        $elecs->save();

        return redirect()->route('election.show', $elecs);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $elec = Election::find($id);

        $elec->delete();

        return redirect()->route('election.index');
    }

    public function vote($id){
        $vote = new Vote;
        $vote->user_id = Auth::id();
        $vote->election_id = $id;
        $vote->Save();

        return Redirect::to('vote');
    }
}
