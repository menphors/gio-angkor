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
        <th>Image</th>
        <th>Disc Per(%)</th>
        <th>Product#</th>
        <th>Brand#</th>
        <th>Ordered</th>
        <th>Cat#</th>
        <th>Exp Date</th>
        <th>From</th>
        <th>To</th>
        <th>Official</th>
        <th>Action</th>

    </tr>
    <thead>
    <tbody>
    @foreach($crud_list as $promotions)
        <tr>
            <td>{{$promotions->id}}</td>
            <td>{{$promotions->promotion_name}}</td>
            <td>{{$promotions->promotion_prices}}</td>
            <td><img src="{{URL::asset('/uploads/'.$promotions->promotion_image)}}" style="width:50px;height:50px;"></td>
            <td>{{$promotions->discount_percentage}}</td>
            <td>{{$promotions->product_id}}</td>
            <td>{{$promotions->brand_id}}</td>
            <td>{{$promotions->ordering}}</td>
            <td>{{$promotions->category_id}}</td>
            <td>{{$promotions->promotion_expire_date}}</td>
            <td>{{$promotions->date_from}}</td>
            <td>{{$promotions->date_to}}</td>
            <td>{{$promotions->published}}</td>
            <td>
                <a href="{{ route($route_prefix . '.edit', $promotions) }}" class="btn btn-sm btn-success btn-edit-row">
                    <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;&nbsp;Modify
                </a>

                <a href="javascript:void(0);" class="btn btn-sm btn-danger btn-delete-row">
                    <i class="fa fa-times" aria-hidden="true"></i>&nbsp;&nbsp;Delete
                </a>

                <form method="POST" class="form-delete-row" action="{!! route($route_prefix . '.destroy', $promotions) !!}" accept-charset="UTF-8">
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

