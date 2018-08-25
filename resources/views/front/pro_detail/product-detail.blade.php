@extends('front.homepages.header')
@section('content')
    <!-- Page Content -->
    <h1 class="my-4"></h1>

    <div class="container">
        <!-- Page Heading -->
        <div class="row" width="100%">
            <div class="col-md-9 col-sm-9 col-lg-9"></div>
            <div class="col-md-3 col-sm-3 col-lg-3">
                View:<a href="{!! url('frontend/show-product-grid') !!}"><i class="btn fa fa-table"></i></a>&nbsp;&nbsp;<a
                        href="{!! url('frontend/product-lists') !!}"><i class="btn fa fa-list-ul"></i></a>
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
                                <a href="{!! url('product/'. $value->id) !!}"">{{ $value->pro_name }}</a>
                            </h4>
                            <!--get pagination-->
                            <p class="card-text">{{ $value->product_desc }} {{ $value->model }} {{ $value->pro_code }}</p>
                            <p><a href="#" style="color: red !important;font-weight: bold;">{{ $value->prices }}$</a>
                            </p>
                            <button class="btn btn-success"><a href="{{route('cart.edit',$value->id)}}"
                                                               style="color: #FFF;">Add to cart</a></button>
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

        @include('partials.products.related-products', ['slideId' => 'relatedProducts', 'products' => $users])

    </div>
    <!--buyer protection-->
    <div id="bp-banner-new" style="margin-top: 10px;position: relative;border: 1px solid #ddd;
    border-radius: 5px;padding: 15px 20px 18px 60px;
    background-color: #f5f5f5;">
        <div class="bp-horizontal-banner bp-list-banner">
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
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            var pic = "http://localhost:8000/uploads";

            $("#right").click(function () {
                $.ajax({
                    /* the route pointing to the post function */
                    url: 'productimg',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {_token: CSRF_TOKEN, gallery: $(".getinfo").val()},
                    dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) {
                        //var res = $(".writeinfo").append('<img src="uploads/" + data + ">');
                        var res = $('#writeinfo').attr("src", "http://localhost:8000/uploads/" + data);
                    }
                });
            });
        });
    </script>
    <!-- Footer -->
    <!-- Bootstrap core JavaScript -->
    @include('front.homepages.footer')
@stop