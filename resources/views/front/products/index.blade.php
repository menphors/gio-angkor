
{{--{{$title}}--}}

{{--{{dd($products->toArray())}}--}}
@extends('front.homepages.header')
@section('content')
<div class="container">

    <h1>Search Results</h1>
    <p>{{$products->count()}} result(s) for '{{request()->input('searchname')}}'</p>

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
    @foreach( $products as $value )

    <div class="row">
        <div class="col-md-5">
            <a href="{!! url('frontend/product-add-to-card') !!}">
                <img class="img-fluid rounded mb-3 mb-md-0" src="{{URL::asset('/uploads/'.$value->gallery)}}" style="width: 400px;height: 300px;">
            </a>
        </div>
        <div class="col-md-7">
            <h3><a href="{!! url('frontend/product-add-to-card') !!}">{{ $value->pro_name }}</a></h3>
            <p>{{ $value->product_desc }} {{ $value->model }} {{ $value->pro_code }}.</p>
            <h4><b><a href="#" style="color: red !important;font-weight: bold;">{{ $value->prices }}$</a></b></h4>
            <a class="btn btn-primary" href="{!! url('frontend/product-add-to-card') !!}">View Detail</a>
        </div>
    </div>
    <hr>
    @endforeach
</div>

@include('front.homepages.footer')
@stop