@extends('front.homepages.header')
@section('content')
<h1 class="my-4"></h1>
    <!-- Page Content -->
    <div class="container">
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
      <!-- Page Heading -->
      <h1 class="my-4">Products Grid
        <small>Best Selling</small>
      </h1>
      @foreach ($products as $value)
      <!-- Project One -->
      <div class="row">
        <div class="col-md-5">
          <a href="{!! url('frontend/product-add-to-card') !!}">
            <img class="img-fluid rounded mb-3 mb-md-0" src="{{URL::asset('/uploads/'.$value->gallery)}}" style="width: 400px;height: 300px;">
          </a>
        </div>
        <div class="col-md-7">
          <h3><a href="{!! url('frontend/products/productdetails/'. $value->id) !!}">{{ $value->pro_name }}</a></h3>
          <p>{{ $value->product_desc }} {{ $value->model }} {{ $value->pro_code }}.</p>
          <h4><b><a href="#" style="color: red !important;font-weight: bold;">{{ $value->prices }}$</a></b></h4>
          <a class="btn btn-primary" href="{!! url('frontend/products/productdetails/'. $value->id) !!}">View Detail</a>
        </div>
      </div>
      <hr>
      @endforeach
      <!-- /.row -->
      <!-- Pagination -->
      <ul class="pagination justify-content-center">
        <li class="page-item">
          {{ $products->links() }}
        </li>
      </ul>

    </div>
    <!-- /.container -->
@include('front.homepages.footer')
@stop