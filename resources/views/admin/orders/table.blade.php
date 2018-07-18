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
        <th>Total</th>
        <th>Action</th>
    </tr>
    <thead>
    <tbody>
    @foreach($crud_list as $orders)
        <tr>
            <td>
                <a href="{{ route($route_prefix . '.edit', $orders) }}" class="links">#000{{$orders->id}}
                </a>
            </td>
            <td>{{$orders->order_unit_price}}</td>
            <td>{{$orders->quantity}}</td>
            <td>{{$orders->discount}}</td>
            <td>{{$orders->order_date}}</td>
            <td>{{$orders->status_product}}</td>
            <td align="center"> $</td>
            <td>
                <a href="{{ route($route_prefix . '.edit', $orders) }}" class="btn btn-sm btn-success btn-edit-row">
                    <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;&nbsp;Edit
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
<script src="{{asset('js/jquery.min.js')}}" ></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.order').css('display','none');
    });
</script>
