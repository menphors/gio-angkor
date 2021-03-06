@section('contents')
@extends('front.homepages.header')
@section('navigation-bar')
@stop
@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-3" id="menu">
            <ul class="" id="color-main01" >
                <li>
                    <a href="#"><i class="fa fa-home fa-fw"></i> Women's Clothing</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-list-alt fa-fw"></i> Man's Clothing</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-file-o fa-fw"></i> Phone & Accessories</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Computer & Office</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-table fa-fw"></i> Consumer Electonics</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-tasks fa-fw"></i> Jewelry&Watches</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-calendar fa-fw"></i> Home & Garden,Furniture</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-book fa-fw"></i> Bags & Shoes</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-pencil fa-fw"></i> Toys, Kids & Baby</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-cogs fa-fw"></i> Sports & Outdoors</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-calendar fa-fw"></i> Health & Beauty, Hair</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-book fa-fw"></i> Automobiles & Motorcycles</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-pencil fa-fw"></i> Home Improvement</a>
                </li>
            </ul>
        </div>
        <div class="col-md-7 " >
            <div id="carouselExampleIndicators"   class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner imagesize">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{asset('images/12.jpg')}}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('images/34.png')}}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('images/45.jpg')}}" alt="Third slide">
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('images/123321.png')}}" alt="Four slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('images/aa.png')}}" alt="Five slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>
        <div class="col-md-2" style="margin-left: -30px">

            <img src="{{asset('images/170.png')}}" width="220px" height="410px">
        </div>
    </div>
</div>
<!-- Ads banner -->
<div class="container">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-10" style="margin-left: -15px">
            <img src="{{asset('images/ads.gif')}}" alt="advertising" width="1140px">
        </div>
    </div>
</div>
<div class="container" style="margin-top: 50px">
    <div class="row ">
        <div class="col-xl-10 col-lg-10 col-md-10" id="Flash" style="margin-left: -15px" >
        <h2 class="text-body">Flash Deals 00:15:20</h2>
        </div>
        <div class="col-xl-2 col-lg-2 col-md-2">
            <label class="text-secondary" style="float: right" > View More> </label>
        </div>
    </div>
</div>
<!-- Flash Deal -->
<div class="container" style="margin-top:10px">
    <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3" style="margin-left: -15px">
                <img src="{{asset('images/flashdeal1.jpg')}}" alt="flashdeal" class="rounded">
                <h4 class="text-body" style="margin-top:10px">US $23.68</h4>
                <label class="text-secondary"style="text-decoration-line:line-through"> US $37.00 </label>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:20%">
                         <span class="sr-only">20% Complete</span>
                    </div>
                </div>
                <label class="text-secondary"style="margin-top: 10px"> 20% already claimed </label>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 "style="margin-left: 5px">
                <img src="{{asset('images/flashdeal2.jpg')}}" alt="flashdeal" class="rounded">
                <h4 class="text-body" style="margin-top:10px">US $23.68</h4>
                <label class="text-secondary"style="text-decoration-line:line-through"> US $37.00 </label>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                        <span class="sr-only">40% Complete</span>
                    </div>
                </div>
                <label class="text-secondary"style="margin-top: 10px"> 40% already claimed </label>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 "style="margin-left: 5px">
                <img src="{{asset('images/flashdeal3.jpg')}}" alt="flashdeal" class="rounded">
                <h4 class="text-body" style="margin-top:10px">US $23.68</h4>
                <label class="text-secondary"style="text-decoration-line:line-through"> US $37.00 </label>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                        <span class="sr-only">50% Complete</span>
                    </div>
                </div>
                <label class="text-secondary"style="margin-top: 10px"> 50% already claimed </label>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 "style="margin-left: 5px">
                <img src="{{asset('images/flashdeal4.jpg')}}" alt="flashdeal" class="rounded">
                <h4 class="text-body" style="margin-top:10px">US $23.68</h4>
                <label class="text-secondary" style="text-decoration-line:line-through"> US $37.00 </label>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                        <span class="sr-only">70% Complete</span>
                    </div>
                </div>
                <label class="text-secondary"style="margin-top: 10px"> 70% already claimed </label>
            </div>

        </div>
    </div>
</div>
<!-- Brand Zone -->
<div class="container" style="margin-top:40px">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12" style="margin-left: -15px">
            <h2 class="text-body"> Brand Zone</h2>
        </div>
        <div class="col-xl-10 col-lg-10 col-md-10"style="margin-left: -15px">
            <label class="text-secondary">Get in the zone with the best brands from GIO Angkor</label>
        </div>
        <div class="col-xl-2 col-lg-2 col-md-2">
            <label class="text-secondary" style="float: right">View More></label>
        </div>
        <div id="BrandZone1" class="col-xl-4 col-lg-4 col-md-4" style="margin-top: 10px;margin-left: -15px">
            <img src="{{asset('images/brandzone1.jpg')}}" alt="brandzone" class="rounded">
            <h4 class="text-body" style="margin-top: 10px">Shop sales now</h4>
            <label class="text-secondary">Don't miss great items at incredible prices</label>
        </div>
        <div id="BrandZone2" class="col-xl-4 col-lg-4 col-md-4" style="margin-top: 10px;margin-left: 5px">
            <img src="{{asset('images/brandzone2.jpg')}}" alt="brandzone" class="rounded">
            <h4 class="text-body" style="margin-top: 10px">SHOP YOUR FAVORITE BRANDS</h4>
            <label class="text-secondary">Incredible deals on exclusive brands</label>
        </div>
        <div id="BrandZone3" class="col-xl-4 col-lg-4 col-md-4" style="margin-top: 10px;margin-left: 5px">
            <img src="{{asset('images/brandzone3.jpg')}}" alt="brandzone" class="rounded">
            <h4 class="text-body" style="margin-top: 10px">Shop sales now</h4>
            <label class="text-secondary">Don't miss great items at incredible prices</label>
        </div>
    </div>
</div>
<!-- Inspiration -->
<div class="container" style="margin-top:40px">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12" style="margin-left: -15px">
            <h2 class="text-body"> Inspiration</h2>
            <label class="text-secondary">A wide selection of items for you to choose from</label>
        </div>
        <!-- Inspiration Block1-->
        <div id="Inspiration1" class="col-xl-4 col-lg-4 col-md-4" style="margin-top: 10px;margin-left: -15px">
            <img src="{{asset('images/Inspiration1.jpg')}}" alt="Inspiration" class="rounded">
            <img src="{{asset('images/Inspiration2.jpg')}}" alt="Inspiration" class="rounded">
            <img src="{{asset('images/Inspiration4.jpg')}}" alt="Inspiration" class="rounded">
            <img src="{{asset('images/Inspiration3.jpg')}}" alt="Inspiration" class="rounded">
            <h4>TECH</h4>
        </div>

        <!-- Inspiration Block2-->
        <div id="Inspiration1" class="col-xl-4 col-lg-4 col-md-4" style="margin-top: 10px;margin-left: 7px">
            <img src="{{asset('images/Inspiration1.jpg')}}" alt="Inspiration" class="rounded">
            <img src="{{asset('images/Inspiration2.jpg')}}" alt="Inspiration" class="rounded">
            <img src="{{asset('images/Inspiration4.jpg')}}" alt="Inspiration" class="rounded">
            <img src="{{asset('images/Inspiration3.jpg')}}" alt="Inspiration" class="rounded">
            <h4>SPORT</h4>
        </div>
        <!-- Inspiration Block3-->
        <div id="Inspiration1" class="col-xl-4 col-lg-4 col-md-4" style="margin-top: 10px;margin-left: 7px">
            <img src="{{asset('images/Inspiration1.jpg')}}" alt="Inspiration" class="rounded">
            <img src="{{asset('images/Inspiration2.jpg')}}" alt="Inspiration" class="rounded">
            <img src="{{asset('images/Inspiration4.jpg')}}" alt="Inspiration" class="rounded">
            <img src="{{asset('images/Inspiration3.jpg')}}" alt="Inspiration" class="rounded">
            <h4>FASHION</h4>
        </div>
        <!-- Inspiration Block4-->
        <div id="Inspiration1" class="col-xl-4 col-lg-4 col-md-4" style="margin-top: 10px;margin-left: -15px">
            <img src="{{asset('images/Inspiration1.jpg')}}" alt="Inspiration" class="rounded">
            <img src="{{asset('images/Inspiration2.jpg')}}" alt="Inspiration" class="rounded">
            <img src="{{asset('images/Inspiration4.jpg')}}" alt="Inspiration" class="rounded">
            <img src="{{asset('images/Inspiration3.jpg')}}" alt="Inspiration" class="rounded">
            <h4>HOME</h4>
        </div>
        <!-- Inspiration Block5-->
        <div id="Inspiration1" class="col-xl-4 col-lg-4 col-md-4" style="margin-top: 10px;margin-left: 7px">
            <img src="{{asset('images/Inspiration1.jpg')}}" alt="Inspiration" class="rounded">
            <img src="{{asset('images/Inspiration2.jpg')}}" alt="Inspiration" class="rounded">
            <img src="{{asset('images/Inspiration4.jpg')}}" alt="Inspiration" class="rounded">
            <img src="{{asset('images/Inspiration3.jpg')}}" alt="Inspiration" class="rounded">
            <h4>KIDS</h4>
        </div>
        <!-- Inspiration Block6-->
        <div id="Inspiration1" class="col-xl-4 col-lg-4 col-md-4" style="margin-top: 10px;margin-left: 7px">
            <img src="{{asset('images/Inspiration1.jpg')}}" alt="Inspiration" class="rounded">
            <img src="{{asset('images/Inspiration2.jpg')}}" alt="Inspiration" class="rounded">
            <img src="{{asset('images/Inspiration4.jpg')}}" alt="Inspiration" class="rounded">
            <img src="{{asset('images/Inspiration3.jpg')}}" alt="Inspiration" class="rounded">
            <h4>BEAUTY</h4>
        </div>
    </div>
</div>
<!-- More to Love -->
<div class="container" style="margin-top:40px">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12" style="margin-left: -15px">
            <h2 class="text-body"> More To Love</h2>
        </div>
        <div class="col-md-2 col-md-offset-1"style="margin-top: 10px;margin-left: -15px">
            <img src="{{asset('images/other1.jpg')}}" alt="other" class="rounded">
            <h4 class="text-body">US $2.89</h4>
        </div>
        <div class="col-md-2"style="margin-top: 10px;margin-left: 50px">
            <img src="{{asset('images/other2.jpg')}}" alt="other" class="rounded" >
            <h4 class="text-body">US $2.89</h4>
        </div>
        <div class="col-md-2"style="margin-top: 10px;margin-left: 50px">
            <img src="{{asset('images/other3.jpg')}}" alt="other" class="rounded">
            <h4 class="text-body">US $2.89</h4>
        </div>
        <div class="col-md-2"style="margin-top: 10px;margin-left: 50px">
            <img src="{{asset('images/other4.jpg')}}" alt="other" class="rounded">
            <h4 class="text-body">US $2.89</h4>
        </div>
        <div class="col-md-2"style="margin-top: 10px;margin-left: 50px">
            <img src="{{asset('images/other5.jpg')}}" alt="other" class="rounded">
            <h4 class="text-body">US $2.89</h4>
        </div>
        <div class="col-md-2 col-md-offset-1"style="margin-top: 10px;margin-left: -15px">
            <img src="{{asset('images/other6.jpg')}}" alt="other" class="rounded">
            <h4 class="text-body">US $2.89</h4>
        </div>
        <div class="col-md-2"style="margin-top: 10px;margin-left: 50px">
            <img src="{{asset('images/other7.jpg')}}" alt="other" class="rounded">
            <h4 class="text-body">US $2.89</h4>
        </div>
        <div class="col-md-2"style="margin-top: 10px;margin-left: 50px">
            <img src="{{asset('images/other8.jpg')}}" alt="other" class="rounded">
            <h4 class="text-body">US $2.89</h4>
        </div>
        <div class="col-md-2"style="margin-top: 10px;margin-left: 50px">
            <img src="{{asset('images/other9.jpg')}}" alt="other" class="rounded">
            <h4 class="text-body">US $2.89</h4>
        </div>
        <div class="col-md-2"style="margin-top: 10px;margin-left: 50px">
            <img src="{{asset('images/other10.jpg')}}" alt="other" class="rounded">
            <h4 class="text-body">US $2.89</h4>
        </div>
        <div class="col-md-2 col-md-offset-1"style="margin-top: 10px;margin-left: -15px">
            <img src="{{asset('images/other11.jpg')}}" alt="other" class="rounded">
            <h4 class="text-body">US $2.89</h4>
        </div>
        <div class="col-md-2"style="margin-top: 10px;margin-left: 50px">
            <img src="{{asset('images/other12.jpg')}}" alt="other" class="rounded">
            <h4 class="text-body">US $2.89</h4>
        </div>
        <div class="col-md-2"style="margin-top: 10px;margin-left: 50px">
            <img src="{{asset('images/other13.jpg')}}" alt="other" class="rounded">
            <h4 class="text-body">US $2.89</h4>
        </div>
        <div class="col-md-2"style="margin-top: 10px;margin-left: 50px">
            <img src="{{asset('images/other14.jpg')}}" alt="other" class="rounded">
            <h4 class="text-body">US $2.89</h4>
        </div>
        <div class="col-md-2"style="margin-top: 10px;margin-left: 50px">
            <img src="{{asset('images/other15.jpg')}}" alt="other" class="rounded">
            <h4 class="text-body">US $2.89</h4>
        </div>
    </div>
</div>s
@include('front.homepages.footer')
@stop