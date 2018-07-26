<?php
/**
 * Created by PhpStorm.
 * User: Men phors
 * Date: 12/31/2017
 * Time: 11:30 PM
 */?>
<table class="table table-bordered crud-table">
    <thead>
    <tr>
        <th>Pro#</th>
        <th>Name</th>
        <th>Price</th>
        <!-- <th>Image</th> -->
        <th>Disc Per(%)</th>
        <!-- <th>Product#</th> -->
        <th>Brand#</th>
       <!--  <th>Ordered</th> -->
        <th>Cat#</th>
        <th>Exp Date</th>
        <th>From</th>
       <!--  <th>To</th> -->
        <th>Official</th>
        <th>Action</th>

    </tr>
    <thead>
    <tbody>
    @foreach($crud_list as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->promotion_name}}</td>
            <td>{{$product->promotion_prices}}$</td>
           <!--  <td><img src="{{URL::asset('/uploads/'.$product->promotion_image)}}" style="width:50px;height:50px;"></td> -->
            <td>{{$product->discount_percentage}}%</td>
            <!-- <td>{{ $product->product_id }}</td> -->
            <td>{{$product->brand_id}}</td>
            <td>{{$product->category_id}}</td>
            <td>{{$product->promotion_expire_date}}</td>
            <td>{{$product->date_from}}</td>
            @if($product->published ==1) 
            <td align="center"><a href="#" class="btn btn-sm btn-warning btn-edit-row"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
            @else
            <td align="center"><a href="#" class="btn btn-sm btn-warning btn-edit-row"><i class="fa fa-eye-slash" aria-hidden="true"></i></a></td> 
            @endif
            <td>
                <a href="{{ route($route_prefix . '.edit', $product) }}" class="btn btn-sm btn-success btn-edit-row">
                    <i class="fa fa-pencil" aria-hidden="true">Edit</i>
                </a>

                <a href="javascript:void(0);" class="btn btn-sm btn-danger btn-delete-row">
                    <i class="fa fa-times" aria-hidden="true">Delete</i>
                </a>

                <form method="POST" class="form-delete-row" action="{!! route($route_prefix . '.destroy', $product) !!}" accept-charset="UTF-8">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="row pull-right">
    <div class="col-md-12">
        {!! $crud_list->links() !!}
    </div>
</div>

