@extends('front.homepages.header')
@section('navigation-bar')
@stop
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edmin</title>
        <link type="text/css" href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link type="text/css" href="{{asset('bootstrap/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
        <link type="text/css" href="{{asset('css/theme.css')}}" rel="stylesheet">
        <link type="text/css" href="{{asset('images_icon/icons/css/font-awesome.css')}}" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>
    <body>
        <br>
         <div class="container" align="center">
                <div class="col-md-6">
                    <p>This is your account <a href="#">Phors MEN</a>. Do you want to <a href="#">Logout?</a></p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="span3">
                    <div class="sidebar">
                        <ul class="widget widget-menu unstyled">
                            <li class="active"><a href="{{url('frontend/dashboard_index')}}"><i class="menu-icon icon-dashboard"></i>Dashboard</a></li>
                            <li><a href="#"><i class="menu-icon icon-bullhorn"></i>Order</a>
                            </li>
                            <li><a href="#"><i class="menu-icon icon-inbox"></i>Wishlist</b> </a></li>
                            <li><a href="#"><i class="menu-icon icon-tasks"></i>Profile</a></li>
                            <li><a href="#"><i class="menu-icon icon-signout"></i>Logout </a></li>
                        </ul>
                        <!--/.widget-nav-->
                    </div>
                    <!--/.sidebar-->
                </div>
                <!--/.span3-->
            </div>
        </div>
        <!--/.container-->
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>
    </body>
</html>
@include('front.homepages.footer')
@stop
