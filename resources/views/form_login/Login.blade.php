<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Transparent Login Form</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style_login.css')}}" rel="stylesheet">
    <script src="{{asset('js/jquery.min.js')}}" rel="type/script"></script>
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
                                <input type="email" name="" class="col-md-8" >
                            </div>
                            <div class="form-group">
                                <p>PASSWORD<br>
                                <input type="password" name="" class="col-md-8" >
                                <br>
                                <label><input type="checkbox"> &nbsp;Remember me</label>
                                <label class="btn btn-link">Forget password</label>
                                </p>
                            </div>
                            <div class="form-group">
                                <a href="{{url('sign_in')}}"><input type="submit" name="" class="btn btn-warning dropdown-toggle-split btn-sm btn-sig" value="SIGN IN"></a>
                            </div><!---form-group-->
                        </form><!---form--->

                </div><!--panel-default--->
                </div><!---col-->
                <div class="col" style="border-bottom: 1px solid rgb(133, 133, 133); padding-left: 5%;">
                    <h4>CREATE ACCOUNT</h4><p style="border: 1px  solid #EEEEEE; width: 82%;"></p>
                    <div class="default">
                        <li>
                            <a>Get free shipping on all orders of $100 or more</a>
                        </li>
                        <li>
                            <a>Free returns, always</a>
                        </li>
                        <li>
                            <a>Express checkout</a>
                        </li>
                        <li><a>Save and share your favoite products with your friends</a>
                        </li>
                    </div><br>
                    <div class="form-group">
                        <input type="submit" name="" class="btn btn-warning dropdown-toggle-split btn-sm btn-regis" value="CREATE ACCOUNT">

                    </div><!---form-group-->
                </div>
           </div><!---- row ---->
        </div><!-- contriner ---->
        <br>
        <button class="btn btn-primary btn-sm " style="background: #038;border: 1px solid #038;"><i class="fa fa-facebook">&nbsp;<span>|</span>&nbsp;</i>Sign in with Facebook </button>
        &nbsp;
        <button class="btn btn-primary btn-sm " style="background: #00c0ef;border: 1px solid #00c0ef;"><i class="fa fa-twitter"> | &nbsp;</i>Sign in with Twitter </button>
    </body>
<script>
    $(document).ready( function (){
        $('.btn-regis').click( function () {
            $('.btn-sig').prop('disabled',true);
            window.location.replace('http://localhost:8000/sign_in');
        });

    });
</script>
</html>