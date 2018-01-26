@extends('layouts.adminapp')

@section('content')
<div class="row">
  <div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
      <div class="panel-heading"><strong><center>Result</center></strong></div>

      <div class="container">
        <center><h2>The result of the election</h2>
          @foreach ($elecs as $elec)
          <h3>{{$elec->title}}  {{$elec->session}}</h3></center>
          <br>
          @endforeach
          @foreach ($cands as $cand)
          <center><div class="media">
            <div class="media-left media-middle">
              <img src="{{ URL::to('storage/'.$cand->image)}}" class="media-object" style="width:220px">
            </div> 
            <div class="media-body">
              <h4 class="media-heading"></h4>
              <p>Name: {{ $cand->name}} <br>
                No Matric: {{ $cand->no_matric}}<br>
                Sem: {{ $cand->sem}}<br>  
                Faculty: {{ $cand->faculty}}<br>
                Program: {{ $cand->program}} <br>
                Vote: {{ $cand->vote}} <br>
                Percentage:
                {{ number_format(($cand->vote/$total_votes) * 100) }}%
                <div class="progress" title="{{ $cand->percent }}%">
                  <div class="progress-bar progress-bar-info progress-bar-striped active" style="width:{{number_format(($cand->vote/$total_votes) * 100)}}%"></div>
                </div> 
              </p>
              </div>
            </div>
            <hr>
          </center>
            @endforeach
          </div>
          <center><button onClick="window.print()">Print this page</button></center>
        </div>
      </div>
    </div>


    @endsection