@extends('layouts.adminapp')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <ul class="nav nav-tabs ">
        <li class="active"><a href={{route('election.index')}}>Election List</a></li>
        <li><a href="{{route('election.create')}}">Create New Election</a></li
                </ul>
            </ul>

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
        <th>End Time</th>
        <th>Option</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      @foreach ($elecs as $elec)
        <td>{{ $elec->title}}</td>
        <td>{{ $elec->session}}</td>
        <td>{{ $elec->description}}</td>
        <td>{{ $elec->start_date}}</td>
        <td>{{ $elec->end_date}}</td>
        <td>{{ $elec->start_time}}</td>
        <td>{{ $elec->end_time}}</td>

        <td>
        <a href="{{ route('election.edit', $elec->id) }}"><button class="btn btn-block btn-sm btn-info">Edit</button></a>
        	<form method="POST" action="{{ route('election.destroy', $elec->id) }}">
        		{{method_field('DELETE') }}
        		<input type="hidden" name="_token" value="{{ csrf_token() }}">
        		<button type="submit" class="btn btn-danger btn-block btn-sm">Delete</button>
        	</form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
                </div>
            </div>
        </div>
    </div>


@endsection
