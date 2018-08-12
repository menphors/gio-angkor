@extends('front.homepages.header')
@section('content')
        <br>
         <div class="container" align="center">
                <div class="col-md-12">
                    <div class="col-md-10">
                        <p>This is your account <a href="#">Phors MEN</a>.Do you want to <a href="{{url('auth/logout') }}">Logout?</a></p>
                    </div>
                    @if(Auth::user() &&  Auth::user()->admin == 1)
                    <div class="col-md-2">
                        <button class="btn btn-success"><a href="{{url('adminz')}}" style="color:#FFF;">Go to Admin Panel</a></button>
                    </div>
                    <br>
                    <hr>
                    @else
                    <br>
                    <hr>
                    @endif
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
                            <li><a href="{{ url('auth/logout') }}"><i class="menu-icon icon-signout"></i>Logout </a></li>
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
@include('front.homepages.footer')
@stop
