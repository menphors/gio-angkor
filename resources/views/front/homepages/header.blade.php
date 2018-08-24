<!DOCTYPE html>
<html>
<head>

  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=0, shrink-to-fit=no">

  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

  <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
  <link href="{{asset('css/main.css')}}" rel="stylesheet">
  <link href="{{asset('css/main01.css')}}" rel="stylesheet">
  <link href="{{asset('css/bootstrap-theme.min.css')}}" rel="stylesheet">

  <script src="{{asset('js/jquery.min.js')}}" ></script>
  <script src="{{asset('js/popper.min.js')}}" ></script>
  <script src="{{asset('js/bootstrap.min.js')}}" ></script>
  <!-- Header style -->
  <!-- order style -->
  <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('css/order.css') }}" rel="stylesheet">
  <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/order.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/bootstrap.js') }}"></script>
    <!-- end order style -->
    <!-- product-detail header -->
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/main_styles.css')}}" rel="stylesheet">
  {{--<link href="{{asset('css/responsive.css')}}" rel="stylesheet">--}}
  <link href="{{asset('css/product-detail-css.css')}}" rel="stylesheet">
  <link href="{{asset('css/bootstrap-combined.min.css')}}" rel="stylesheet" id="bootstrap-css">
    <!-- Custom styles for this template -->
  <link href="{{asset('css/4-col-portfolio.css')}}'" rel="stylesheet">
  <script src="{{asset('js/jquery-3.3.1.js')}}"></script>
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/dist/js/bootstrap.js')}}"></script>
  <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
    <!-- end product detail header -->
    <!-- user dashboard-->

  <link type="text/css" href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link type="text/css" href="{{asset('bootstrap/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
  <link type="text/css" href="{{asset('css/theme.css')}}" rel="stylesheet">
  <link type="text/css" href="{{asset('images_icon/icons/css/font-awesome.css')}}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- end user dashboar --> 
    <!-- apply hold font to all page -->
  <link type="text/css" href="{{asset('css/style.css')}}" rel="stylesheet">
 <style type="text/css">
     #search{
         width: 200px;

     }
     #research{
         width: 300px;
     }
     .width-space{
         width: 24%;
     }
     .space-right{
         padding-right: 5px;
     }
   
 </style>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
</head>
<body>
    <nav>
        @yield('navigation-bar')
    </nav>
    <div class="container-fluid" style="background-color: #f9fafb">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12 col-xs-12" style="margin-top: -5px">
                    <a class="navbar-brand" href="#">
                        <img src="{{asset('images/cambodia1.png')}}" >
                    </a>
                    <a class="navbar-brand" href="#" style="margin-left: -30px">
                        <img src="{{asset('images/uk1.png')}}" >
                    </a>
                    <a class="navbar-brand mr-auto" style=" font-size:12px;color: black;margin-left: -15px" href="#">Tel: 016 841 777</a>


                </div>
                <div class="col-md-9 col-sm-12 col-xs-12" style="margin-bottom: 15px">
                    <a class="navbar-brand fa fa-users text-dark Active " href="#" style="float: right;font-size: 14px">
                        <i class=" fa-lg" aria-hidden="true"></i>
                        Free Join </a>
                    <a class="navbar-brand fa fa-lock text-dark Active " href="#" style="float: right;font-size: 14px">
                        <i class=" fa-lg" aria-hidden="true"></i>
                        Sign In </a>
                    <a class="navbar-brand fa fa-heartbeat text-dark Active " href="#" style="float: right;font-size: 14px">
                        <i class=" fa-lg" aria-hidden="true"></i>
                        Wish List </a>
                    <a class="navbar-brand fa fa-shopping-cart text-dark Active " href="#" style="float: right;font-size: 14px">
                        <i class=" fa-lg" aria-hidden="true"></i>
                        Card <span class="badge badge-pill badge-danger" style="border: 2px solid;">10</span></a>
                </div>
            </div>
        </div>
    </div>

<!--     <div class="container-fluid" style="background-color: #e7e7e8">
        <div class="container">
            <div class="row">
            <div class="col-md-3 col-sm-12 col-xs-12" style="margin-top: 55px;margin-bottom: 10px">
                <a href="{{ url('/') }}"><img id="logo" src="{{asset('images/gio-angkor.png')}}" alt="logo" style="height: 80px;"></a>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12" id="search-tool">
                        <div class="input-group" id="search_group" style="width: 530px;margin-top: 40px">
                            <input id="txt-search" type="text" class="form-control" name="x" placeholder="Search..." style="height: 35px;">
                            <div id="btn-all" class="input-group-btn search-panel">
                               <span> <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                    All Category
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#contains">Contains</a></li>
                                    <li><a href="#its_equal">It's equal</a></li>
                                    <li><a href="#greather_than">Greather than ></a></li>
                                    <li><a href="#less_than">Less than < </a></li>
                                    <li class="divider"></li>
                                    <li><a href="#all">Anything</a></li>
                                </ul></span>
                            </div>
                            <span class="input-group-btn">
                            <button id="btn-search" class="btn btn-danger" type="button"><span class="glyphicon glyphicon-search"></span></button>
                            </span>
                        </div>
            </div>
            <div class="col-md-3">
                        <div id="rcorners1"  style="float: right;width: 290px;margin-top: 38px" >
                           <p style="font-size: 16px;margin-top: -15px;"> <b style="color: #bf1e2e;"> >800 million </b></p>
                            <p style="font-size: 16px;margin-top: -32px;margin-right: 20px;float: right"> <b style="color: #bf1e2e;"> 1.0800 million </b></p>
                            <p style="font-size: 10px;margin-top: -15px;"> <b style="color: white;"> of product on Amazon </b></p>
                            <p style="font-size: 10px;margin-top: -24px;margin-right: 14px;float: right"> <b style="color: white;"> transaction through GIO</b></p>
                            <p style="font-size: 35px;margin-top: -52px;margin-left: 120px; color: black">  | </p>
                        </div> -->


    <div class="container-fluid  " style="background-color: #e7e7e8;">
        <div class="container ">
            <div class="row ">
                <div class="col-3  my-5 mx-auto"><a href="{!! url('/') !!}"><img src="{{asset('images/logo/circle-logo.png')}}" alt="logo" id="logo"></a></div>
                <div class="col-9 my-5 mx-auto" style="margin-top: -50px;">
                    <form class="input-group " style="    margin-left: -13px;    width: 852px;" action="{{route('searchResult')}}" >
                        <input type="text" class="col-md-6 col-sm-6 col-lg-6" placeholder="Seach..." name="searchname" id="searchname" style="height: 40px;width: 50%;">
                        <span class="input-group-btn  mr-3">
                        {{--<button class="btn btn btn-secondary dropdown" data-toggle="dropdown" type="submit" style="height: 40px;">All Categries</button>--}}
                    <select name="searchByCategory" id="searchByCategory">
                        <option value="">ALL Category</option>
                        @foreach($data as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                  <button class="btn btn-danger" type="submit" style="height: 40px;"><i class="fa fa-search" aria-hidden="true"></i></button>
                </span>
                        <ul class="nav float-right" style="margin-left: 551px;
    position: absolute;height: 40px;">
                            <li class="nav-item border border-dark border-right-0">
                                <a class="nav-link">800 million</a>
                            </li>
                            <li class="nav-item border border-dark">
                                <a class="nav-link">200.000 successful</a>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <section>
        @yield('content')
    </section>
<!-- Nav header -->

</body>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '{your-app-id}',
      cookie     : true,
      xfbml      : true,
      version    : '{api-version}'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

<script type="text/javascript">
    $('#searchname').autocomplete({
        source : '{!! URL::route('autoComplete') !!}',
        minlength : 1,
        autoFocus : true,
        select:function(e,ui){
        }
    });
</script>