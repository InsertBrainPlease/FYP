@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <!-- Name -->
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name :</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Matric Number -->
                        <div class="form-group{{ $errors->has('matric_no') ? ' has-error' : '' }}">
                            <label for="matric_no" class="col-md-4 control-label">Matric Number :</label>

                            <div class="col-md-6">
                                <input id="matric_no" type="text" class="form-control" name="matric_no" value="{{ old('matric_no') }}" required autofocus>

                                @if ($errors->has('matric_no'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('matric_no') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Semester -->
                        <div class="form-group{{ $errors->has('semester') ? ' has-error' : '' }}">
                            <label for="semester" class="col-md-4 control-label">Semester :</label>

                            <div class="col-md-6">
                                <select class="form-control" name="semester">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                </select>

                                @if ($errors->has('semester'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('semester') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Ic Number -->
                        <div class="form-group{{ $errors->has('ic_no') ? ' has-error' : '' }}">
                            <label for="ic_no" class="col-md-4 control-label">Ic Number :</label>

                            <div class="col-md-6">
                                <input id="ic_no" type="text" class="form-control" name="ic_no" value="{{ old('ic_no') }}" required autofocus>

                                @if ($errors->has('ic_no'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ic_no') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Program-->
                        <div class="form-group{{ $errors->has('program') ? ' has-error' : '' }}">
                            <label for="program" class="col-md-4 control-label">Program :</label>

                            <div class="col-md-6">
                                <select class="form-control" name="program">
                                <option value="MS31">MS31</option>
                                <option value="MS32">MS32</option>
                                <option value="MS33">MS33</option>
                                <option value="MS34">MS34</option>
                                <option value="MS35">MS35</option>
                                <option value="MS36">MS36</option>
                                <option value="MS39">MS39</option>
                                </select>

                                @if ($errors->has('program'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('program') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Email:</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Confirm Password -->
                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
