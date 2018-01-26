@extends('layouts.app')

@section('content')
@foreach($elecs as $elec)
@if(date("Y-m-d") > $elec->end_date)
<div class="row">
  <div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
      <div class="panel-heading"><strong><center>Result</center></strong></div>

      <div class="container">
        @foreach ($elecs as $elec)
        <h3><center>{{$elec->title}}  {{$elec->session}}</center></h3>
        @endforeach
        @foreach ($cands as $cand)
        <div class="media">
          <div class="media-left media-middle">
            <img src="{{ URL::to('storage/'.$cand->image)}}" class="media-object" style="width:200px">
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
              </p>  </p>
            </div>
          </div>
          <hr>
          @endforeach
        </div>
        @else
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
              <div class="panel-heading"><center>Please wait until {{date('M j, Y h:i a', strtotime($elec->end_date))}}</center></div>

              <div class="panel-body">
               <center><p><strong>Thanks for your patient !</strong></p></center>
             </div>
           </div>
         </div>
       </div>
       @endif 
       @endforeach



       @endsection