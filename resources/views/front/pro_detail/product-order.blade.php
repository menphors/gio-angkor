@extends('front.homepages.header')
@section('navigation-bar')
@stop
@section('content')
    <style type="text/css">
        body{padding-top:20px;}
        .carousel {
            margin-bottom: 0;
            padding: 0 40px 30px 40px;
        }
        /* The controlsy */
        .carousel-control {
            left: -12px;
            height: 40px;
            width: 40px;
            background: none repeat scroll 0 0 #222222;
            border: 4px solid #FFFFFF;
            border-radius: 23px 23px 23px 23px;
            margin-top: 90px;
        }
        .carousel-control.right {
            right: -12px;
        }
        /* The indicators */
        .carousel-indicators {
            right: 50%;
            top: auto;
            bottom: -10px;
            margin-right: -19px;
        }
        /* The colour of the indicators */
        .carousel-indicators li {
            background: #cecece;
        }
        .carousel-indicators .active {
        background: #428bca;
        }
    </style>
    <!-- Page Content -->
    <div class="container">
        <div style="height: 20px;"></div>
        <!-- Portfolio Item Heading -->
        <h1 class="my-4">Product Description</h1>
        <hr>
        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-6">
                <img class="img-fluid" src="{{asset('/uploads/' . $product->gallery)}}" alt="{{$product->pro_name}}">
            </div>

            <div class="col-md-4">
                <h3 class="my-3">{{$product->pro_name}}</h3>
                <ul style="list-style-type: none;padding:15px;">
                    <li><p>{{$product->product_desc}}</p></li>
                </ul>

                <h3 class="my-3">Product Specification</h3>
                <ul style="list-style-type: none;padding:15px;">
                    <li>
                        <span style="width: 7%">Model</span>: <span style="width: auto;">{{ $product->model }}</span>
                    </li>
                    <li>
                        <span style="width: 7%">Price</span>: <span style="width: auto;">
                            <strong style="color: orange;font-size: 16pt; font-weight: bold;">{{$product->prices}}
                                $</strong>
                        </span>
                    </li>
                    <li>
                        <span style="width: 7%">Discount</span>: <span style="width: auto;">
                            @if($product->discount== '') N/A @else {{$product->discount}} @endif
                        </span>
                    </li>
                    <li><span style="width: 7%">Made in</span>: <span style="width: auto;">{{ $product->made }}</span>
                    </li>
                    <li>
                        <span style="width: 7%">In stock</span>: <span style="width: auto;">{{ $product->quantity }}
                            <input type="hidden" name="quantity" id="pro_qty" value="{{ $product->quantity }}">
                        </span>
                    </li>
                    <li>
                         @foreach($cartItems as $cartItem)
                         <input type="hidden" value="{{ $cartItem->rowId }}" id="rowID{{ $cartItem->id }}">
                        <span style="width: 7%">Quantity</span>: <span style="width: auto;">
                            <input type="number" value="{{ $cartItem->qty }}" id="upCart{{ $cartItem->id }}">
                        </span>
                        @endforeach
                    </li>
                    <br><br>
                    <li class="row">
                        <a class="btn btn-primary" href="{{ url('frontend/show-product-grid') }}" style="color:#FFF;">
                            << BACK TO SHOP</a>
                        &nbsp;&nbsp;
                        <a class="btn btn-warning" href="{{ route('cart.edit', $product->id) }}" style="color:#FFF;">ADD
                            TO CART</a>
                    </li><!--button-->
                </ul>
            </div>
        </div>
        <div style="height: 40px;"></div>

        <!-- /.row -->

        <!-- Related Projects Row -->
        <h3 class="my-4">Related Products</h3>
        <hr>
        <div style="height: 40px;"></div>

        @include('partials.products.related-products', ['slideId' => 'relatedProducts'])

    </div><!-- /.container -->

    <div style="height: 20px;"></div>

    <!-- /.container -->
    <script src="{{asset('js/jquery.min.js')}}" ></script>
<script type="text/javascript">
  $(document).ready( function () {
    @foreach ($cartItems as $cartItem)
    $('#upCart{{ $cartItem->id }}').on('change keyup', function (){
      var newQty = $('#upCart{{ $cartItem->id }}').val();
      var rowID = $('#rowID{{ $cartItem->id }}').val();
      var proQty = $('#pro_qty').val();
      if(newQty <= 0) {
            alert('Please input valid quantity');
      }else if(newQty > proQty) {
            alert('Your input product is out of stock. Please check again');
      }else {
        window.location.reload(); 
      $.ajax({
        url:'{{ url("/cart/update/$cartItem->id") }}',
        data:'rowID=' + rowID + '&newQty=' + newQty,
        type:'get',
        dataType:'html',
        success:function (response) {
          //console.log(response);
          $('#updateDiv').html(response);
        }
      });
      }
    });
    @endforeach
  });
</script>
    @include('front.homepages.footer')
@stop