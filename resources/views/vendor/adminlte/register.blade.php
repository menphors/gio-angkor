<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Transparent Login Form</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style_login.css')}}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row" style="margin-top: 10px; margin-right: 1%;">
            <div class="col" style="border-bottom: 1px solid rgb(133, 133, 133); padding-left: 5%;">
                <h4>CREATE ACCOUNT</h4><p style="border: 1px  solid #EEEEEE; width: 82%;"></p>
                <div class="panel panel-default">
                    <div class="register-box-body">
                        <p class="login-box-msg">{{ trans('adminlte::adminlte.register_message') }}</p>
                        <form action="{{ url(config('adminlte.register_url', 'register')) }}" method="post">
                            {!! csrf_field() !!}
                            <div class="form-group has-feedback {{ $errors->has('username') ? 'has-error' : '' }}">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" value="{{ old('username') }}" placeholder="Username" style="width: 82%;">
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong style="color: red">{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group has-feedback {{ $errors->has('gender') ? 'has-error' : '' }}">
                                <label>Gender</label><br>
                                Male:<input type="radio" name="gender" value="m">
                                Female:<input type="radio" name="gender" value="f">
                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong style="color: red">{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group has-feedback {{ $errors->has('dob') ? 'has-error' : '' }}">
                                <label>Date of Birth</label>
                                <input type="date" name="dob" class="form-control" value="{{ old('dob') }}" style="width: 82%;">
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                @if ($errors->has('dob'))
                                    <span class="help-block">
                                        <strong style="color: red">{{ $errors->first('dob') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group has-feedback {{ $errors->has('tel') ? 'has-error' : '' }}">
                                <label>Telephone</label>
                                <input type="tel" name="tel" class="form-control" value="{{ old('tel') }}" placeholder="012334455..." min="9" style="width: 82%;">
                                <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                                @if ($errors->has('tel'))
                                    <span class="help-block">
                                        <strong style="color: red">{{ $errors->first('tel') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
                                <input type="email" name="email" class="form-control" value="{{ old('email') }}"
                                       placeholder="{{ trans('adminlte::adminlte.email') }}" style="width: 82%;">
                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong style="color: red">{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
                                <input type="password" name="password" class="form-control"
                                       placeholder="{{ trans('adminlte::adminlte.password') }}" style="width: 82%;">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong style="color: red">{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group has-feedback {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                                <input type="password" name="password_confirmation" class="form-control"
                                       placeholder="{{ trans('adminlte::adminlte.retype_password') }}" style="width: 82%;">
                                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong style="color: red">{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <button type="submit"
                                    class="btn btn-primary btn-flat"
                            >{{ trans('adminlte::adminlte.register') }}</button>
                        </form><!-- /.form-box -->
                        <div class="auth-links">
                            <a href="{{ url(config('adminlte.login_url', 'login')) }}"
                               class="text-center">{{ trans('adminlte::adminlte.i_already_have_a_membership') }}</a>
                        </div>
                        </div><!-- /.register-box -->
                    </div><!-- default panel-->
                </div><!--col-->
            </div><!---- row ---->
            <br>
            <div class="row" style="padding-left: 11%;">
                <button class="btn btn-primary btn-sm " style="background: #038;border: 1px solid #038;"><i class="fa fa-facebook">&nbsp;<span>|</span>&nbsp;</i><a href="{{url('/redirect')}}">Sign in with Facebook</a></button>
                &nbsp;
                <a href="{{ url('/google/redirect') }}" class="btn btn-lg btn-danger btn-sm"><strong>Login With Google+</strong></a>
            </div><!--div button-->
        </div><!-- container ---->
    </body>
</html>
