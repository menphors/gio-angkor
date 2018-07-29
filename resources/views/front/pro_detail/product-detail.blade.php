@extends('front.homepages.header')
@section('content')
<!-- Page Content -->
<h1 class="my-4"></h1>
<div class="container">
    <!-- Page Heading -->
    <div class="row" width="100%">
        <div class="col-md-9 col-sm-9 col-lg-9"></div>
        <div class="col-md-1 col-sm-1 col-lg-1" >
            View:<a href="{!! url('frontend/show-product-grid') !!}"><i class="fa fa fa-table fa-fw"></i></a><a href="{!! url('frontend/product-lists') !!}"><i class="fa fa fa-list-ul"></i></a>
        </div>
        <div class="col-md-2 col-sm-2 col-lg-2" >
            <div class="dropdown" style="float:right;position: relative;">
                <div class="col col-lg-2 col-sm-2 col-md-2 portfolio-item">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Sort By:
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="#">Low to High Price</a></li>
                    <li><a href="#">High to Low Price</a></li>
                    <li><a href="#">Latest Product</a></li>
                  </ul>
                </div>
            </div><!--dropdown-->
        </div>
    </div>
    <hr>
    <h1 class="my-4"></h1>
    <div class="row">
        @foreach ($users as $value)
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <a href="#"><img src="{{URL::asset('/uploads/'.$value->gallery)}}"></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">{{ $value->pro_name }}</a>
                    </h4>
                    <!--get pagination-->
                    <p class="card-text">{{ $value->product_desc }} {{ $value->model }} {{ $value->pro_code }}</p>
                    <p><a href="#" style="color: red !important;font-weight: bold;">{{ $value->prices }}$</a></p>
                    <button class="btn btn-success"><a href="{{route('cart.edit',$value->id)}}" style="color: #FFF;">Add to cart</a></button>
                </div>
            </div>
        </div>
        <br><br><br><br>
        @endforeach
    </div>
    <!-- /.row -->
    <div class="before-pagin" style="height: 40px !important;"></div>
    <!-- Pagination -->
    <ul class="pagination justify-content-center">
        <li class="page-item">
          {{ $users->links() }}
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
                                    <div class="span3" ><a href="#x" class="thumbnail"><img src="{{asset('images/phone_image/smart-watch-blue.jpg')}}" alt="Image" style="max-width:100%;"/></a></div>
                                    <div class="span3"><a href="#x" class="thumbnail"><img src="{{asset('images/phone_image/smart-watch-white.jpg')}}" alt="Image" style="max-width:100%;" /></a></div>
                                    <div class="span3"><a href="#x" class="thumbnail"><img src="{{asset('images/phone_image/smart-watch-blue.jpg')}}" alt="Image" style="max-width:100%;" /></a></div>
                                    <div class="span3"><a href="#x" class="thumbnail"><img src="{{asset('images/phone_image/smart-watch-gray.jpg')}}" alt="Image" style="max-width:100%;" /></a></div>
                                </div><!--/row-fluid-->
                            </div><!--/item-->

                            <div class="item">
                                <div class="row-fluid">
                                   <div class="span3" ><a href="#x" class="thumbnail"><img id= "writeinfo" src="uploads" alt="Image" style="max-width:100%;"/></a></div>
                                </div><!--/row-fluid-->
                            </div><!--/item-->
                        </div><!--/carousel-inner-->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lt;</a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next" id="right">&gt;</a>
                    </div><!--/myCarousel-->
                </div><!--/well-->
            </div>
        </div>
        <div id="pro">
        <input type="hidden" class="getinfo">
       <!--  <img id= "writeinfo" src="uploads" alt=""></img> -->
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
<script src="{{asset('js/jquery.min.js')}}" ></script>
    <script>
        $(document).ready(function(){
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            var pic = "http://localhost:8000/uploads";

            $("#right").click(function(){
                $.ajax({
                    /* the route pointing to the post function */
                    url: 'productimg',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {_token: CSRF_TOKEN, gallery:$(".getinfo").val()},
                    dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) { 
                        //var res = $(".writeinfo").append('<img src="uploads/" + data + ">');
                       var res = $('#writeinfo').attr("src","http://localhost:8000/uploads/"+data);
                    }
                }); 
            });
       });    
    </script>
<!-- Footer -->
<!-- Bootstrap core JavaScript -->
@include('front.homepages.footer')
@stop