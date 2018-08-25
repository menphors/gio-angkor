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
                        <span style="width: 7%">Quantity</span>: <span style="width: auto;">
                            <input type="number" value="{{ $product->quantity }}">
                        </span>
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
    @include('front.homepages.footer')
@stop