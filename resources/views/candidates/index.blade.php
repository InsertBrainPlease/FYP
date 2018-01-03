@extends('layouts.adminapp')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <ul class="nav nav-tabs ">
        <li class="active"><a href={{route('candidate.index')}}>Candidate List</a></li>
        <li><a href="{{route('candidate.create')}}">Create New Candidate</a></li
                </ul>
            </ul>

                <div class="panel-body">
            <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Matric No</th>
        <th>Sem</th>
        <th>Faculty</th>
        <th>Motto</th>
        <th>Program</th>
        <th>Image</th>
        <th>Option</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      @foreach ($cands as $cand)
        <td>{{ $cand->name}}</td>
        <td>{{ $cand->no_matric}}</td>
        <td>{{ $cand->sem}}</td>
        <td>{{ $cand->faculty}}</td>
        <td>{{ $cand->motto}}</td>
        <td>{{ $cand->program}}</td>
        <td><img src="{{ URL::to('storage/'.$cand->image)}}" class="media-object" style="width:120px"></td>
        <td>
        <a href="{{ route('candidate.edit', $cand->id) }}"><button class="btn btn-block btn-sm btn-info">Edit</button></a>
        	<form method="POST" action="{{ route('candidate.destroy', $cand->id) }}">
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
