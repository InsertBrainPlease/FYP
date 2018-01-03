@extends('layouts.adminapp')

@section('content')
<div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
            <div class="panel-heading"><strong><center>Edit Candidate</center></strong></div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('candidate.update', $cand->id)}}">
                        {{ method_field('PUT') }}
                        {{ csrf_field() }}

                        <!-- Name -->
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name :</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $cand->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- no_matric -->
                        <div class="form-group{{ $errors->has('no_matric') ? ' has-error' : '' }}">
                            <label for="no_matric" class="col-md-4 control-label">No. Matric :</label>

                            <div class="col-md-6">
                                <input id="no_matric" type="text" class="form-control" name="no_matric" value="{{ $cand->no_matric }}" required autofocus>

                                @if ($errors->has('no_matric'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('no_matric') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Sem -->
                        <div class="form-group{{ $errors->has('sem') ? ' has-error' : '' }}">
                            <label for="sem" class="col-md-4 control-label">Sem :</label>

                            <div class="col-md-6">
                                <select class="form-control" name="sem">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                </select>

                                @if ($errors->has('sem'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sem') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Faculty -->
                        <div class="form-group{{ $errors->has('faculty') ? ' has-error' : '' }}">
                            <label for="faculty" class="col-md-4 control-label">Faculty :</label>

                            <div class="col-md-6">
                                <select class="form-control" name="faculty">
                                <option value="FSTM">FSTM</option>
                                <option value="FPM">FPM</option>
                                <option value="FP">FP</option>
                                <option value="FSU">FSU</option>
                                <option value="PA">PA</option>
                                <option value="FPPI">FPPI</option>
                                <option value="PPT">PPT</option>
                                <option value="PPS">PPS</option>
                                </select>

                                @if ($errors->has('faculty'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('faculty') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- No.Tel -->
                        <div class="form-group{{ $errors->has('no_tel') ? ' has-error' : '' }}">
                            <label for="no_tel" class="col-md-4 control-label">No. Tel :</label>

                            <div class="col-md-6">
                                <input id="no_tel" type="text" class="form-control" name="no_tel" value="{{ $cand->no_tel }}" required autofocus>

                                @if ($errors->has('no_tel'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('no_tel') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Motto -->
                        <div class="form-group{{ $errors->has('motto') ? ' has-error' : '' }}">
                            <label for="motto" class="col-md-4 control-label">Motto :</label>

                            <div class="col-md-6">
                                <input id="motto" type="text" class="form-control" name="motto" value="{{ $cand->motto }}" required autofocus>

                                @if ($errors->has('motto'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('motto') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Program -->
                        <div class="form-group{{ $errors->has('program') ? ' has-error' : '' }}">
                            <label for="program" class="col-md-4 control-label">Program :</label>

                            <div class="col-md-6">
                                <input id="program" type="text" class="form-control" name="program" value="{{ $cand->program }}" required autofocus>

                                @if ($errors->has('program'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('program') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <!-- Picture -->
                        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                            <label for="image" class="col-md-4 control-label">Image :</label>

                            <div class="col-md-6">
                                <input id="image" type="file" name="image" value="{{ $cand->image }}" required autofocus>
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