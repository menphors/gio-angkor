
{{--{{$title}}--}}

{{--{{dd($products->toArray())}}--}}
@extends('front.homepages.header')
@section('content')
<div class="container">
    <br><br>
    <div class="row"> 
        <div class="col-md-5 col-sm-5 col-lg-5" >
            View:&nbsp;<a href="{!! url('frontend/show-product-grid') !!}"><i class="btn fa fa-table"></i></a>&nbsp;&nbsp;&nbsp;<a href="{!! url('frontend/product-lists') !!}"><i class="btn fa fa-list-ul"></i></a>
        </div>
    </div>
    <!-- <h1>Search Results</h1>
    <p>{{$products->count()}} result(s) for '{{request()->input('searchname')}}'</p> -->

    {{--@foreach($products as $product)--}}
        {{--<div>{{ $product->pro_name }}</div>--}}
    {{--@endforeach--}}

    {{--<table>--}}
        {{--<thead>--}}
            {{--<tr>--}}
                {{--<th>#</th>--}}
                {{--<th>Product Name</th>--}}
                {{--<th>Product Desc</th>--}}
                {{--<th>Price</th>--}}
                {{--<th>Image</th>--}}
            {{--</tr>--}}
        {{--</thead>--}}
        {{--<tbody>--}}
            {{--@foreach($products as $product)--}}
                {{--<tr>--}}
                    {{--<th>{{$product->id}}</th>--}}
                    {{--<th>{{$product->pro_name}}</th>--}}
                    {{--<th>{{$product->product_desc}}</th>--}}
                    {{--<th>${{$product->prices}}</th>--}}
                    {{--<th><img class="" src="{{URL::asset('/uploads/'.$product->gallery)}}" style="width: 400px;height: 300px;"></th>--}}
                {{--</tr>--}}
            {{--@endforeach--}}
        {{--</tbody>--}}
    {{--</table>--}}
    <h1 class="my-4">{{request()->input('categoryName')}}</h1>
    <div class="row">
      @foreach ($products as $value)
          <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
              <div class="card h-100">
                  <a href="{!! url('product/'. $value->id) !!}"><img src="{{URL::asset('/uploads/'.$value->gallery)}}"></a>
                  <div class="card-body">
                      <h4 class="card-title">
                          <a href="{!! url('product/'. $value->id) !!}"">{{ $value->pro_name }}</a>
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
    {{ $products->appends(request()->input())->links() }}
</div>

@include('front.homepages.footer')
@stop