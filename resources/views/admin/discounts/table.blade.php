<?php
/**
 * Created by PhpStorm.
 * User: Men phors
 * Date: 1/1/2018
 * Time: 12:13 AM
 */?>
<table class="table table-bordered crud-table">
    <thead>
    <tr>
        <th>Discount#</th>
        <th>Discount Per(%)</th>
        <th>Quantity</th>
        <th>Product#</th>
        <th>Category#</th>
        <th>Store#</th>
        <th>From</th>
        <th>To</th>
        <th>Official</th>
        <th>Action</th>
    </tr>
    <thead>
    <tbody>
    @foreach($crud_list as $discounts)
        <tr>
            <td>{{$discounts->id}}</td>
            <td>{{$discounts->discount_percentage}}</td>
            <td>{{$discounts->quantity}}</td>
            <td>{{$discounts->product_id}}</td>
            <td>{{$discounts->category_id}}</td>
            <td>{{$discounts->store_id}}</td>
            <td>{{$discounts->date_from}}</td>
            <td>{{$discounts->date_to}}</td>
            <<td align="center"><a href="#" class="btn btn-sm btn-warning btn-edit-row"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
            <td>
                <a href="{{ route($route_prefix . '.edit', $discounts) }}" class="btn btn-sm btn-success btn-edit-row">
                    <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;&nbsp;Edit
                </a>

                <a href="javascript:void(0);" class="btn btn-sm btn-danger btn-delete-row">
                    <i class="fa fa-times" aria-hidden="true"></i>&nbsp;&nbsp;Delete
                </a>

                <form method="POST" class="form-delete-row" action="{!! route($route_prefix . '.destroy', $discounts) !!}" accept-charset="UTF-8">
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

