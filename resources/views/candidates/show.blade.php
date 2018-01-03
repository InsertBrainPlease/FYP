@extends('layouts.adminapp')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Candidate</div>

                <div class="panel-body">
            <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>No. Matric</th>
        <th>Sem</th>
        <th>Faculty</th>
        <th>No. Tel</th>
        <th>Motto</th>
        <th>Program</th>
        <th>Image</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{ $cands->name}}</td>
        <td>{{ $cands->no_matric}}</td>
        <td>{{ $cands->sem}}</td>
        <td>{{ $cands->faculty}}</td>
        <td>{{ $cands->no_tel}}</td>
        <td>{{ $cands->motto}}</td>
        <td>{{ $cands->program}}</td>
        <td>{{ $cands->image}}</td>
      </tr>
    </tbody>
  </table>
                </div>
            </div>
        </div>
    </div>


@endsection
