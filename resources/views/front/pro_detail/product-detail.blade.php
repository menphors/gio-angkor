@extends('front.homepages.header')
@section('navigation-bar')
@stop
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>4 Col Portfolio - Start Bootstrap Template</title>
    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap-combined.min.css')}}" rel="stylesheet" id="bootstrap-css">
    <!-- Custom styles for this template -->
    <link href="{{asset('css/4-col-portfolio.css')}}'" rel="stylesheet">
    <script src="{{asset('js/jquery-3.3.1.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/dist/js/bootstrap.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
    <script>
        $(document).ready(function() {
//        $('#myCarousel').carousel({
//            interval: 10000
//        });
            $('#myCarousel').carousel({
                pause: true,
                interval: false,
            });
        });
    </script>
    <style>
        .carousel-indicators {
            right: 50%;
            top: auto;
            bottom: 0px;
            margin-right: -19px;
        }
        /* Changes the colour of the indicators */
        .carousel-indicators li {
            background: #c0c0c0;
        }
        .carousel-indicators .active {
            background: #333333;
        }
    </style>
</head>
<body>
<!-- Page Content -->
<div class="container">
    <!-- Page Heading -->
    <h1 class="my-4"></h1>
    <div class="row">
            <div class="col-lg-2 col-md-3 col-sm-3">
                <div id="wrapper">
                    <!-- Sidebar -->
                    <div id="sidebar-wrapper">
                        <ul class="sidebar-nav">
                            <li class="sidebar-brand">
                                <a href="#">
                                     Women’s Clothing
                                </a>
                            </li>
                            <li>
                                <a href="#">Men’s Clothing</a>
                            </li>
                            <li>
                                <a href="#">Cellphones & Accessories</a>
                            </li>
                            <li>
                                <a href="#">Computer</a>
                            </li>
                            <li>
                                <a href="#">Consumer Electronics</a>
                            </li>
                            <li>
                                <a href="#">Jewelry & Watches</a>
                            </li>
                            <li>
                                <a href="#">Home & Garden & Funiture</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /#sidebar-wrapper -->
                </div><!-- wrap-->
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <a href="#"><img class="card-img-top" src="{{asset('images/phone_image/galaxy-s9.jpg')}}" alt="" width="400" height="700"></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">Galaxy S9</a>
                    </h4>
                    <p class="card-text">Samsung Galaxy S9 Plus (256GB)</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <a href="#"><img class="card-img-top" src="{{asset('images/phone_image/i-phone-8-plus.jpg')}}" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">Iphone 8 plus</a>
                    </h4>
                    <p class="card-text">iPhone 8 Plus</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <a href="#"><img class="card-img-top" src="{{asset('images/phone_image/iphone-x.jpg')}}" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">Iphone X</a>
                    </h4>
                    <p class="card-text">Iphone X</p>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-3">
            <div id="wrapper">
                <!-- Sidebar -->
                <div id="sidebar-wrapper">
                    <ul class="sidebar-nav">
                        <li class="sidebar-brand">
                            <a href="#">
                                Toys Kids & Baby
                            </a>
                        </li>
                        <li>
                            <a href="#">Sports & Outdoors</a>
                        </li>
                        <li>
                            <a href="#">Health & Beauty Hairs</a>
                        </li>
                        <li>
                            <a href="#">Automobiles & Motorcycles</a>
                        </li>
                        <li>
                            <a href="#">Home Improvement Tools</a>
                        </li>
                        <li>
                            <a href="#">Bags & shoes</a>
                        </li>
                    </ul>
                </div>
                <!-- /#sidebar-wrapper -->
            </div><!-- wrap-->
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
            <div style="height: 20px;"></div>
            <div class="card h-100">
                <a href="#"><img class="card-img-top" src="{{asset('images/phone_image/ipad-apple.jpg')}}" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">Ipad Apple</a>
                    </h4>
                    <p class="card-text">iPad Mini 4 (Cellular)</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
            <div style="height: 20px;"></div>
            <div class="card h-100">
                <a href="#"><img class="card-img-top" src="{{asset('images/phone_image/ipad-apple1.jpg')}}" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">Ipad Apple</a>
                    </h4>
                    <p class="card-text">iPad Pro 12.9 Cellular 2017</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
            <div style="height: 20px;"></div>
            <div class="card h-100">
                <a href="#"><img class="card-img-top" src="{{asset('images/phone_image/ipad-apple2.jpg')}}" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">Ipad Apple</a>
                    </h4>
                    <p class="card-text">iPad 9.7" 2018 (Cellular)</p>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <div class="before-pagin" style="height: 40px !important;"></div>
    <!-- Pagination -->
    <ul class="pagination justify-content-center">
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
        </li>
    </ul>
    <!--related product-->
    <!------ Include the above in your HEAD tag ---------->
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="well">
                    <div id="myCarousel" class="carousel slide">

                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <!-- Carousel items -->
                        <div class="carousel-inner">

                            <div class="item active">
                                <div class="row-fluid">
                                    <div class="span3"><a href="#x" class="thumbnail"><img src="{{asset('images/phone_image/smart-watch-black.jpg')}}" alt="Image" style="max-width:100%;" /></a></div>
                                    <div class="span3"><a href="#x" class="thumbnail"><img src="{{asset('images/phone_image/smart-watch-white.jpg')}}" alt="Image" style="max-width:100%;" /></a></div>
                                    <div class="span3"><a href="#x" class="thumbnail"><img src="{{asset('images/phone_image/smart-watch-blue.jpg')}}" alt="Image" style="max-width:100%;" /></a></div>
                                    <div class="span3"><a href="#x" class="thumbnail"><img src="{{asset('images/phone_image/smart-watch-gray.jpg')}}" alt="Image" style="max-width:100%;" /></a></div>
                                </div><!--/row-fluid-->
                            </div><!--/item-->

                            <div class="item">
                                <div class="row-fluid">
                                    <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                                    <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                                    <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                                    <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                                </div><!--/row-fluid-->
                            </div><!--/item-->

                            <div class="item">
                                <div class="row-fluid">
                                    <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                                    <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                                    <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                                    <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                                </div><!--/row-fluid-->
                            </div><!--/item-->
                        </div><!--/carousel-inner-->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lt;</a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">&gt;</a>
                    </div><!--/myCarousel-->
                </div><!--/well-->
            </div>
        </div>
    </div>
    <!--buyer protection-->
    <div id="bp-banner-new" style="margin-top: 10px;position: relative;border: 1px solid #ddd;
    border-radius: 5px;padding: 15px 20px 18px 60px;
    background-color: #f5f5f5;"><div class="bp-horizontal-banner bp-list-banner">
            <span class="bp-icon"></span>
            <div class="buy-protection-info">
                <h3>Buyer Protection</h3>
                <ul class="buy-protection-info-list">
                    <li class="bp-info-item">Full Refund if you don't receive your order</li>
                    <li class="bp-info-item">Refund or Keep items not as described</li>
                </ul>
                <div class="buy-protection-more">
                    <a rel="nofollow" target="_blank" href="#">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container -->
<div style="height: 20px;"></div>
<!-- Footer -->
<!-- Bootstrap core JavaScript -->
</body>
</html>
@include('front.homepages.footer')
@stop