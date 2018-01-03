@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><center><strong>Vote</strong></center></div>

                <div class="panel-body">
                <center>
                @foreach ($elecs as $elec)
                  <h3>{{$elec->title}}  {{$elec->session}}</h3>
                    •   To make your selection, select the button to the right of the option. <br>
                    •   There are 10 candidate’s name and choose 8 only.
                </center>
                @endforeach
                <form class="form-horizontal" method="POST" action="{{ route ('store')}}">
                {{ csrf_field() }}
                @foreach ($cands as $cand)
                <div class="row">
                <div class="col-md-6 col-md-offset-4">
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
                          Motto: {{ $cand->motto}}</p>

                          <span class="button-checkbox">
                            <button type="button" class="btn" data-color="primary" value= 1>Vote</button>
                            <input type="checkbox" class="hidden" />
                         </span>
                          
                          
                        </div>
                      </div>
                      </div>
                      <hr>
                      @endforeach
                            <div class="col-md-6 col-md-offset-4">
                                <input type="hidden" value="{{ csrf_token() }}" name="_token">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                    </form>
                </div>
           </div>
@endsection