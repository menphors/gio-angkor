<?php
/**
 * Created by PhpStorm.
 * User: Men phors
 * Date: 12/24/2017
 * Time: 8:30 PM
 */?>
<table class="table table-bordered crud-table">
    <thead>
    <tr>
        <th>OrderID</th>
        <th>Order Unit Price</th>
        <th>Quantity</th>
        <th>Discount</th>
        <th>Order Date</th>
        <th>Status Product</th>
        <th>Official</th>
        <th>Action</th>
    </tr>
    <thead>
    <tbody>
    @foreach($crud_list as $orders)
        <tr>
            <td>{{$orders->id}}</td>
            <td>{{$orders->order_unit_price}}</td>
            <td>{{$orders->quantity}}</td>
            <td>{{$orders->discount}}</td>
            <td>{{$orders->order_date}}</td>
            <td>{{$orders->status_product}}</td>
            <td>{{$orders->published}}</td>
            <td>
                <a href="{{ route($route_prefix . '.edit', $orders) }}" class="btn btn-sm btn-success btn-edit-row">
                    <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;&nbsp;Modify
                </a>

                <a href="javascript:void(0);" class="btn btn-sm btn-danger btn-delete-row">
                    <i class="fa fa-times" aria-hidden="true"></i>&nbsp;&nbsp;Delete
                </a>

                <form method="POST" class="form-delete-row" action="{!! route($route_prefix . '.destroy', $orders) !!}" accept-charset="UTF-8">
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
