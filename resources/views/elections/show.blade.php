@extends('layouts.adminapp')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Election</div>

                <div class="panel-body">
            <table class="table">
    <thead>
      <tr>
        <th>Title</th>
        <th>Session</th>
        <th>Description</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Start Time</th>
        <th>End Date</th>
      </tr>
    </thead>
    <tbody>
      <tr class="info">
        <td>{{ $elecs->title}}</td>
        <td>{{ $elecs->session}}</td>
        <td>{{ $elecs->description}}</td>
        <td>{{ $elecs->start_date}}</td>
        <td>{{ $elecs->end_date}}</td>
        <td>{{ $elecs->start_time}}</td>
        <td>{{ $elecs->end_time}}</td>
      </tr>
    </tbody>
  </table>
                </div>
            </div>
        </div>
    </div>


@endsection
