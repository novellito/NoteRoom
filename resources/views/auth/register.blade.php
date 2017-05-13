@extends('layouts.app')

<style>
    body {
        background: url("img/registerbg.jpg") no-repeat 100% ;
        background-size: 100% 100%;
    }
    /*h1,
    label,
    p.help-block {
        color: white;
    }
    .input-group-addon {
        background-color: #a2c9e6;
    }
    .input.form-control {
        background-color: #c2e4f5;
    }*/
</style>
<link rel="stylesheet" href="\NoteRoom\font-awesome-4.7.0\css\font-awesome.min.css">
  <link rel= "stylesheet" href="\NoteRoom\public\css\nav_footer.css">

@section('content')
<div class="container">
    <div class="row" style="margin-top:30px;">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">Username</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

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

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
                            <label for="school" class="col-md-4 control-label">School</label>

                            <div class="col-md-6">
                                <input id="school" type="text" class="form-control" name="school" required>

                                @if ($errors->has('school'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('school') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
                            <label for="role" class="col-md-4 control-label">Role</label>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="role" id="role" value="option1" checked>
                                    Student                         
                                    </label>
                                </div>

                                <div class="form-check disabled">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="role" id="role" value="option2" disabled>
                                    Teacher (alpha)
                                    </label>
                                </div>

                                @if ($errors->has('role'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('role') }}</strong>
                                    </span>
                                @endif
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

 <footer id="contact">
        <div class="content-wrap">
            <h4></h4>
            <div class="footerElems">
                <a href="http://localhost/NoteRoom/public/#about">About</a>
                <a href="http://localhost/NoteRoom/public/#contact">Contact Us</a>
                <a href="http://localhost/NoteRoom/public/#team">Our Team</a>
            </div>
            <p style="margin-bottom: 0;">Copyright 2017 by NoteRoomLLC</p>
            <div class="logos">
              <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-github-square" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
            </div>
        </div>
    </footer>
@endsection
