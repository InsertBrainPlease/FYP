<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Candidate;
use App\User;
use App\Result;
use Image;

class CandidateController extends Controller
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
        $cands = Candidate::all();

        return view('candidates.index',compact('cands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cands = Candidate::all();
        return view('candidates.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //validate incoming data
        $this->validate($request, [

            'name' => 'required',
            'no_matric' => 'required',
            'sem' => 'required',
            'faculty' => 'required',
            'motto' => 'required',
            'program' => 'required',
            ]);

        $count = Candidate::all()->count();
        if($count>9){
            return view ('candidates.full');
        }

        // Assign local variable
        $cands = new Candidate;

        $cands->name = $request->name;
        $cands->no_matric = $request->no_matric;
        $cands->sem = $request->sem;
        $cands->faculty = $request->faculty;
        $cands->motto = $request->motto;
        $cands->program = $request->program;
        $cands->image = $request->image;

        $cands->save();

        return redirect()->route('candidate.show', $cands->id);

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cands = Candidate::find($id);
        return view('candidates.show',compact('cands'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cand = Candidate::find($id);
        return view('candidates.edit', compact('cand'));
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
        $cand = Candidate::find($id);

        $this->validate($request, [

            'name' => 'required',
            'no_matric' => 'required',
            'sem' => 'required',
            'faculty' => 'required',
            'motto' => 'required',
            'program' => 'required', 
            'picture' => 'required',   
            ]);

        // Assign local variable
        $cands = Candidate::find($id);

        $cands->name = $request->name;
        $cands->no_matric = $request->no_matric;
        $cands->sem = $request->sem;
        $cands->faculty = $request->faculty;
        $cands->motto = $request->motto;
        $cands->program = $request->program;
        $cands->picture = $request->picture;
        $cands->save();

        return redirect()->route('candidate.show', $cands);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cand = Candidate::find($id);

        $cand->delete();

        return redirect()->route('candidate.index');
    }

    public function candshow($name)
    {
        $cands = Candidate::find($name);
        return redirect()->route('vote');
    }

    public function candsresult($name)
    {
        $cands = Candidate::find($name);
        return redirect()->route('admin.result');
    }

    
}
