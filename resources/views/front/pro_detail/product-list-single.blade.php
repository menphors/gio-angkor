@extends('front.homepages.header')
@section('content')
<h1 class="my-4"></h1>
    <!-- Page Content -->
    <div class="container">
      <div class="row" width="100%">
        <div class="col-md-9 col-sm-9 col-lg-9"></div>
        <div class="col-md-3 col-sm-3 col-lg-3" >
            View:<a href="{!! url('frontend/show-product-grid') !!}"><i class="btn fa fa-table"></i></a>&nbsp;&nbsp;<a href="{!! url('frontend/product-lists') !!}"><i class="btn fa fa-list-ul"></i></a>
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
        <div class="col-md-3">
          <a href="{!! url('product/'. $value->id) !!}"">
            <img class="img-fluid rounded mb-3 mb-md-0" src="{{URL::asset('/uploads/'.$value->gallery)}}" style="width: 200px;">
          </a>
        </div>
        <div class="col-md-5">
          <h3><a href="{!! url('product/'. $value->id) !!}"">{{ $value->pro_name }}</a></h3>
          <p>{{ $value->product_desc }} {{ $value->model }} {{ $value->pro_code }}.</p>
          <h4><b><a href="#" style="color: red !important;font-weight: bold;">{{ $value->prices }}$</a></b></h4>
          <a class="btn btn-primary" href="{!! url('product/'. $value->id) !!}">View Detail</a>
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