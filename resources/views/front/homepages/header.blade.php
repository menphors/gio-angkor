<!DOCTYPE html>
<html>
<head>
  <title>Gio Angkor</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
  <link href="{{asset('css/main.css')}}" rel="stylesheet">
  <link href="{{asset('css/main01.css')}}" rel="stylesheet">
  <link href="{{asset('css/bootstrap-theme.min.css')}}" rel="stylesheet">
  <script src="{{asset('js/popper.min.js')}}" ></script>
  <!-- Header style -->
  <!-- order style -->
  <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('css/order.css') }}" rel="stylesheet">
  <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/order.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/bootstrap.js') }}"></script>
    <!-- end order style -->
    <!-- product-detail header -->
  <link href="{{asset('css/main_styles.css')}}" rel="stylesheet">
  {{--<link href="{{asset('css/responsive.css')}}" rel="stylesheet">--}}
  <link href="{{asset('css/product-detail-css.css')}}" rel="stylesheet">
  <link href="{{asset('css/bootstrap-combined.min.css')}}" rel="stylesheet" id="bootstrap-css">
    <!-- Custom styles for this template -->
  <link href="{{asset('css/4-col-portfolio.css')}}'" rel="stylesheet">
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/jquery-3.3.1.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/dist/js/bootstrap.js')}}"></script>
  <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
  <!-- end product detail header -->
  <!-- user dashboard-->
  <link type="text/css" href="{{asset('bootstrap/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
  <link type="text/css" href="{{asset('css/theme.css')}}" rel="stylesheet">
  <link type="text/css" href="{{asset('images_icon/icons/css/font-awesome.css')}}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- end user dashboar --> 
    <!-- apply hold font to all page -->
  <link type="text/css" href="{{asset('css/style.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
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
     img:hover, a:hover {
          background-color: #e7e7e8;
      }
   </style>
</head>
<body>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12 col-xs-12" style="margin-top: -5px">
                    <!-- <a class="navbar-brand" href="#">
                        <img src="{{asset('images/cambodia1.png')}}" >
                    </a> -->
                    <a class="navbar-brand" href="#" style="margin-left: -30px">
                        <img src="{{asset('images/uk1.png')}}" >
                    </a>
                    <a class="navbar-brand mr-auto" style=" font-size:12px;color: black;margin-left: -15px" href="#">Tel: 016 841 777</a>


                </div>
                <div class="col-md-9 col-sm-12 col-xs-12" style="margin-bottom: 0px">
                    <a class="navbar-brand fa fa-users text-dark Active " href="{{ url('/register') }}" style="float: right;font-size: 14px">
                        <i class=" fa-lg" aria-hidden="true"></i>
                        Free Join </a>
                        @if(Auth::user())
                        <a class="navbar-brand fa fa-user text-dark Active " href="{{ url('/login') }}" style="float: right;font-size: 14px">
                        <i class=" fa-lg" aria-hidden="true"></i><?php echo Auth::user()->username;?></a>
                        @else 
                    <a class="navbar-brand fa fa-lock text-dark Active " href="{{ url('/login') }}" style="float: right;font-size: 14px">
                        <i class=" fa-lg" aria-hidden="true"></i>
                        Sign In </a>
                        @endif
                    <!-- <a class="navbar-brand fa fa-heartbeat text-dark Active " href="#" style="float: right;font-size: 14px">
                        <i class=" fa-lg" aria-hidden="true"></i>
                        Wish List </a> -->
                    <a class="navbar-brand fa fa-shopping-cart text-dark Active " href="{{ route('cart.index')}}" style="float: right;font-size: 14px">
                        <i class=" fa-lg" aria-hidden="true"></i>
                        Card <span class="badge badge-pill badge-danger" style="border: 2px solid;">{{ Cart::count() }}</span></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="background-color: #e7e7e8">
        <div class="container">
            <div class="row">

                <div class="col-md-3 col-sm-12 col-xs-12" style="margin-top: 55px;margin-bottom: 10px">
                    <a href="{{ url('/') }}"><img id="logo" src="{{asset('images/gio-angkor.png')}}" alt="logo" style="height: 80px;"></a>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12" id="search-tool">
                    <form action="{{route('searchResult')}}" class="form-inline">
                        <div class="input-group" style="margin-top: 40px;">
                            <input type="text" class="form-control" placeholder="Seach..." name="searchname" id="searchname"
                                   style="width:340px;height:35px;padding-right:161px;">
                            <select name="searchByCategory" id="searchByCategory" class="form-control" style="width:150px;height:35px">
                                <option value="" selected="selected">ALL Category</option>
                                @foreach($data as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            <button class="form-control btn btn-danger fa fa-search" type="submit" style="width: 42px;"></button>
                        </div>
                    </form>
                </div>
                <div class="col-md-3">
                    <div id="rcorners1"  style="float: right;width: 290px;margin-top: 38px" >
                       <p style="font-size: 16px;margin-top: -15px;"> <b style="color: #bf1e2e;"> >100 Thousands </b></p>
                        <p style="font-size: 16px;margin-top: -30px;margin-right: 20px;float: right"> <b style="color: #bf1e2e;"> 1.0800 Times </b></p>
                        <p style="font-size: 10px;margin-top: -15px;"> <b style="color: white;"> of product on GIO </b></p>
                        <p style="font-size: 10px;margin-top: -31px;margin-right: 14px;float: right"> <b style="color: white;"> transaction through GIO</b></p>
                        <p style="font-size: 35px;margin-top: -39px;margin-left: 120px; color: black">  | </p>
                    </div>
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
</script>
<script type="text/javascript">
    $('#searchname').autocomplete({
        source : '{!! URL::route('autoComplete') !!}',
        minlength : 1,
        autoFocus : true,
        select:function(e,ui){
        }
    });
</script>