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

    <title>Portfolio Item - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/portfolio-item.css" rel="stylesheet">

  </head>

  <body>
    <!-- Page Content -->
    <div class="container">

      <!-- Portfolio Item Heading -->
      <h1 class="my-4">IPhone X</h1>

      <!-- Portfolio Item Row -->
      <div class="row">

        <div class="col-md-8">
          <img class="img-fluid" src="{{asset('images/phone_image/iphone-x.jpg')}}" alt="">
        </div>

        <div class="col-md-4">
          <h3 class="my-3">Product Description</h3>
          <p>Technology GSM / HSPA / LTE
2G bands  GSM 850 / 900 / 1800 / 1900
3G bands  HSDPA 850 / 900 / 1700(AWS) / 1900 / 2100
4G bands  LTE band 1(2100), 2(1900), 3(1800), 4(1700/2100), 5(850), 7(2600), 8(900), 12(700), 13(700), 17(700), 18(800), 19(800), 20(800), 25(1900), 26(850), 28(700), 29(700), 30(2300), 34(2000), 38(2600), 39(1900), 40(2300), 41(2500), 66(1700/2100)
Speed HSPA 42.2/5.76 Mbps, LTE-A (3CA) Cat12 600/150 Mbps, EV-DO Rev.A 3.1 Mbps
GPRS  Yes
EDGE  Yes</p>
          <h3 class="my-3">Product Specification</h3>
          <ul>
            <li>OS  iOS 11.1 Chipset Apple A11 Bionic</li>
            <li>CPU Hexa-core (2x Monsoon + 4x Mistral)</li>
            <li>GPU Apple GPU (three-core graphics)</li>
            <li>Memory  Card slot No Internal  64/256 GB, 3 GB RAM</li>
            <li class="row">
                <button class="btn btn-warning">BUY NOW</button>
                &nbsp;&nbsp;
                <button class="btn btn-primary">ADD TO CART</button>
            </li><!--button-->
          </ul>
        </div>
      </div>
      <!-- /.row -->

      <!-- Related Projects Row -->
      <h3 class="my-4">Related Projects</h3>

      <div class="row">

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="{{asset('images/phone_image/i-phone-8-plus.jpg')}}" alt="">
          </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="{{asset('images/phone_image/galaxy-s9.jpg')}}" alt="">
          </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="{{asset('images/phone_image/iphone-x.jpg')}}" alt="">
          </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="{{asset('images/phone_image/ipad-apple.jpg')}}" alt="">
          </a>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
    <!-- Footer -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>

</html>
@include('front.homepages.footer')
@stop