@extends('front.homepages.header')
@section('navigation-bar')
@stop
@section('content')
    <!-- Page Content -->
    <div class="container">
      <div style="height: 20px;"></div>
      <!-- Portfolio Item Heading -->
      <h1 class="my-4">Product Description</h1>
      <hr>
      <!-- Portfolio Item Row -->
      <div class="row">
        @foreach ($data as $value)
        <div class="col-md-6">
          <img class="img-fluid" src="{{URL::asset('/uploads/'.$value->gallery)}}" alt="">
        </div>

        <div class="col-md-4">
          <h3 class="my-3">{{$value->pro_name}}</h3>
          <ul style="list-style-type: none;padding:15px;">
             <li> <p>{{$value->product_desc}}</p></li>
          </ul>
          
          <h3 class="my-3">Product Specification</h3>
          <ul style="list-style-type: none;padding:15px;">
            <li><span style="width: 7%">Model</span>: <span style="width: auto;">{{$value->model}}</span></li>
            <li><span style="width: 7%">Price</span>: <span style="width: auto;"><strong style="color: orange;font-size: 16pt; font-weight: bold;">{{$value->prices}} $</strong></span></li>
            <li><span style="width: 7%">Discount</span>: <span style="width: auto;">@if($value->discount== '') N/A @else {{$value->discount}} @endif</span></li>
            <li><span style="width: 7%">Made in</span>: <span style="width: auto;">{{$value->made}}</span></li>
            <li><span style="width: 7%">Quantity</span>: <span style="width: auto;"><input type="number" value="{{$value->quantity}}"></span></li>
            <br><br>
            <li class="row">
                <button class="btn btn-primary"><a href="{{ url('frontend/show-product-grid')}}" style="color:#FFF;"> << BACK TO SHOP</button>
                &nbsp;&nbsp;
                <button class="btn btn-warning"><a href="{{route('cart.edit',$value->id)}}" style="color:#FFF;">ADD TO CART</a></button>
            </li><!--button-->
          </ul>
        </div>
      </div>
      <div style="height: 40px;"></div>
      @endforeach
      <!-- /.row -->

      <!-- Related Projects Row -->
      <h3 class="my-4">Related Products</h3>
      <hr>
        <div style="height: 40px;"></div>
      <!-- /.container -->
    </div>
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
    <!-- /.container -->
@include('front.homepages.footer')
@stop