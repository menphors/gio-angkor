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
<div class="contriner ">
    <div class="row" style="margin-top: 70px; margin-right: 1%;">
        <div class="col" style="margin-left: 70%;"></div>
        <div class="col-md-6 col-md-offset-6" style="border-right: 1px solid rgb(133, 133, 133);border-bottom: 1px solid rgb(133, 133, 133)" >
            <div class="panel panel-default">
                <h4>MEMBER SIGN IN</h4><p style="border: 1px  solid #EEEEEE; width: 82%;"></p>
                <p>If you already have an account you can sign in below.</p><br>
                <form action="">
                    <div class="form-group">
                        <p>USERNAME</p>
                        <input class="form-control col-md-8" type="email" name="" class="col-md-6" >
                    </div>
                    <div class="form-group ">
                        <p>PASSWORD<br>
                            <input class="form-control col-md-8" type="password" name=""  >
                            <br>
                            <label><input type="checkbox"> &nbsp;Remember me</label>
                            <label class="btn btn-link">Forget password</label>
                        </p>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="" class="btn btn-warning btn-sm disabled" value="SIGN IN">
                    </div><!---form-group-->
                </form><!---form--->

            </div><!--panel-default--->
        </div><!---col-->
        <div class="col" style="border-bottom: 1px solid rgb(133, 133, 133); padding-left: 5%;">
            <h4>CREATE ACCOUNT</h4><p style="border: 1px  solid #EEEEEE; width: 82%;"></p>
            <div class="panel panel-default">
                <form action="">
                    <p>Register a new membership</p>
                    <div class="form-group">
                        <p>Username<br>
                            <input type="email" name="" class="col-md-8 form-control" ></p>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group">
                        <p>Telephone<br>
                            <input type="tel" name="" class="form-control col-md-8" ></p>
                    </div>
                    <div class="form-group">
                            <input type="radio" name="gender"  class="col-md-1 form-control" value="Male" checked>Male
                            <input type="radio" name="gender"  class="col-md-1 form-control" value="Female">Female
                    </div>
                    <div class="form-group">
                        <p>DOB<br>
                            <input type="date" name="" class="col-md-8 form-control" ></p>
                    </div>
                    <div class="form-group">
                        <p>EMAIL<br>
                            <input type="email" name="" class="col-md-8 form-control" ></p>
                    </div>
                    <div class="form-group">
                        <p>PASSWORD<br>
                            <input type="password" name="" class="col-md-8 form-control" ></p>
                    </div>
                    <div class="form-group">
                        <p>CONFIRM PASSWORD<br>
                            <input type="password" name="" class="col-md-8 form-control" >
                            <br>
                            <label>&nbsp;I already have a membership!</label>
                            <label class="btn btn-link"> <a href="{{url('Login')}}">Sign in</a></label>
                        </p>
                    </div>
                    <div class="form-group">
                    </div><!---form-group-->
                </form><!---form--->
            </div><!--panel-default--->
            <div class="form-group">
                <a href=""><input type="submit" name="" class="btn btn-warning btn-sm" value="CREATE ACCOUNT"></a>
            </div><!---form-group-->
        </div>
    </div><!---- row ---->
</div><!-- contriner ---->
<br>
<button class="btn btn-primary btn-sm " style="background: #038;border: 1px solid #038;"><i class="fa fa-facebook">&nbsp;<span>|</span>&nbsp;</i>Sign in with Facebook </button>
&nbsp;
<button class="btn btn-primary btn-sm " style="background: #00c0ef;border: 1px solid #00c0ef;"><i class="fa fa-twitter"> | &nbsp;</i>Sign in with Twitter </button>

</body>
</html>
