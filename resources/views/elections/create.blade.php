@extends('layouts.adminapp')

@section('content')
<div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <ul class="nav nav-tabs ">
                 <li><a href={{route('election.index')}}>Election</a></li>
                 <li class="active"><a href="{{route('election.create')}}">Create New Election</a></li
                </ul>
            </ul>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('election.store')}}">
                        {{ csrf_field() }}

                        <!-- Title -->
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">Title :</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>                            
                                @endif
                            </div>
                        </div>

                        <!-- Session -->
                        <div class="form-group{{ $errors->has('session') ? ' has-error' : '' }}">
                            <label for="session" class="col-md-4 control-label">Session :</label>

                            <div class="col-md-6">
                                <select class="form-control" name="session">
                                <option value="Session 1 2017/2018">Session 1 2017/2018</option>
                                <option value="Session 2 2017/2018">Session 2 2017/2018</option>
                                </select>

                                @if ($errors->has('session'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('session') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Desc -->
                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Description :</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control" name="description" value="{{ old('description') }}" required autofocus>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Start Date -->
                        <div class="form-group{{ $errors->has('start_date') ? ' has-error' : '' }}">
                            <label for="start_date" class="col-md-4 control-label">Start Date :</label>

                            <div class="col-md-6">
                                <input id="datepicker" type="date" data-date-format='dd-mm-yyyy' class="form-control" name="start_date" value="{{ old('start_date') }}" required autofocus>

                                @if ($errors->has('start_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('start_date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- End Date -->
                        <div class="form-group{{ $errors->has('end_date') ? ' has-error' : '' }}">
                            <label for="end_date" class="col-md-4 control-label">End Date :</label>

                            <div class="col-md-6">
                                <input id="datepicker2" type="date" data-date-format='dd-mm-yyyy' class="form-control" name="end_date" value="{{ old('end_date') }}" required autofocus>

                                @if ($errors->has('end_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('end_date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Start Time -->
                        <div class="form-group{{ $errors->has('start_time') ? ' has-error' : '' }}">
                            <label for="start_time" class="col-md-4 control-label">Start Time :</label>

                            <div class="col-md-6">
                                <input id="timepicker" type="time" class="form-control" name="start_time" value="{{ old('start_time') }}" required autofocus>

                                @if ($errors->has('start_time'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('start_time') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- End Time -->
                        <div class="form-group{{ $errors->has('end_time') ? ' has-error' : '' }}">
                            <label for="end_time" class="col-md-4 control-label">End Time :</label>

                            <div class="col-md-6">
                                <input id="timepicker" type="time"  class="form-control" name="end_time" value="{{ old('end_time') }}" required autofocus>

                                @if ($errors->has('end_time'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('end_time') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Create
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection