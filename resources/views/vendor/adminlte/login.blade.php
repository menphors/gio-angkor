<!DOCTYPE html>
<html lang="en"> <!--correct template login-->
<head>
    <meta charset="UTF-8">
    <title>Transparent Login Form</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style_login.css')}}" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row" style="margin-top: 70px; margin-right: 1%;">
        <div class="col" style="margin-left: 70%;"></div>
            <div class="col-md-12 col-md-offset-12">
                <div class="panel panel-default">
                <h4>MEMBER SIGN IN</h4><p style="border: 1px  solid #EEEEEE; width: 82%;"></p>
                <p>If you already have an account you can sign in below.</p><br>
                    <form action="{{ url(config('adminlte.login_url', 'login')) }}" method="post">
                        {!! csrf_field() !!}

                        <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
                            <input type="email" name="email" class="form-control" value="{{ old('email') }}"
                                   placeholder="{{ trans('adminlte::adminlte.email') }}" style="width: 82%;">
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong style="color: red;">{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
                            <input type="password" name="password" class="form-control"
                                   placeholder="{{ trans('adminlte::adminlte.password') }}" style="width: 82%;">
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong style="color: red;">{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="row">
                            <div class="col-xs-8">
                                <div class="checkbox icheck">
                                    <label>
                                        <input type="checkbox" name="remember"> {{ trans('adminlte::adminlte.remember_me') }}
                                    </label>
                                </div>
                            </div>
                        </div><!--row-->
                            <!-- /.col -->
                        <div class="row">
                            <div class="col-xs-4">
                                <button type="submit"
                                        class="btn btn-primary btn-block btn-flat">{{ trans('adminlte::adminlte.sign_in') }}</button>
                            </div>
                            <!-- /.col -->
                        </div><br>
                    </form>
                    <div class="auth-links">
                        <a href="{{ url(config('adminlte.password_reset_url', 'password/reset')) }}"
                           class="text-center"
                        >{{ trans('adminlte::adminlte.i_forgot_my_password') }}</a>
                        <br>
                        @if (config('adminlte.register_url', 'register'))
                            <a href="{{ url(config('adminlte.register_url', 'register')) }}"
                               class="text-center"
                            >{{ trans('adminlte::adminlte.register_a_new_membership') }}</a>
                        @endif
                    </div>
            </div><!-- default panel-->
        </div><!--col-->
    </div><!---- row ---->
    <br>
        <div class="row" style="padding-left: 1%;">
            <button class="btn btn-primary btn-sm " style="background: #038;border: 1px solid #038;"><i class="fa fa-facebook">&nbsp;<span>|</span>&nbsp;</i><a href="{{url('/redirect')}}">Sign in with Facebook</a></button>
            &nbsp;
            <button class="btn btn-primary btn-sm " style="background: #00c0ef;border: 1px solid #00c0ef;"><i class="fa fa-twitter"> | &nbsp;</i>Sign in with Twitter </button>
        </div><!--div button-->
</div><!-- container ---->
</body>
</html>

@section('adminlte_js')
    <script src="{{ asset('vendor/adminlte/plugins/iCheck/icheck.min.js') }}"></script>
    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
    @yield('js')
@stop
