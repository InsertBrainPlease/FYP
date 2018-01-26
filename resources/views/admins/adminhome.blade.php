@extends('layouts.adminapp')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><strong><center>Admin Dashboard</center></strong></div>

                <div class="panel-body">
            <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Matric Number</th>
        <th>Semester</th>
        <th>Ic Number</th>
        <th>Program</th>
        <th>Created At</th>
        <th>Voted<th>
      </tr>
    </thead>
    <tbody>
      <tr>
      @foreach ($users as $user)
        <td>{{ $user->name}}</td>
        <td>{{ $user->matric_no}}</td>
        <td>{{ $user->semester}}</td>
        <td>{{ $user->ic_no}}</td>
        <td>{{ $user->program}}</td>
        <td>{{ $user->created_at}}</td>
        <td>{{ $user->voted}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
                </div>
            </div>
        </div>
    </div>


@endsection
