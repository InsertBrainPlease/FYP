@extends('layouts.adminapp')

@section('content')
<div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('election.update', $elec->id)}}">
                        {{ method_field('PUT') }}
                        {{ csrf_field() }}

                        <!-- Title -->
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">Title :</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{ $elec->title }}" required autofocus>

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
                                <input id="session" type="text" class="form-control" name="session" value="{{ $elec->session }}" required autofocus>

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
                                <input id="description" type="text" class="form-control" name="description" value="{{ $elec->description }}" required autofocus>

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
                                <input id="datepicker" type="date" data-date-format='dd-mm-yyyy' class="form-control" name="start_date" value="{{ $elec->start_date }}" required autofocus>

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
                                <input id="datepicker2" type="date" data-date-format='dd-mm-yyyy' class="form-control" name="end_date" value="{{ $elec->end_date }}" required autofocus>

                                @if ($errors->has('end_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('end_date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Edit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection