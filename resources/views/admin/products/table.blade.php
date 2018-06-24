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
        <th>PName</th>
        <th>PCode</th>
        <th>Model</th>
        <th>Pdesc</th>
        <th>Made</th>
        <th>Prices</th>
        <th>Count</th>
        <th>quantity</th>
        <th>Published</th>
        <th>Action</th>
    </tr>
    <thead>
    <tbody>
    @foreach($crud_list as $products)
        <tr>
            <td>{{$products->id}}</td>
            <td>{{$products->pro_name}}</td>
            <td>{{$products->pro_code}}</td>
            <td>{{$products->model}}</td>
            <td>{{$products->product_desc}}%</td>
            <td>{{$products->made}}</td>
            <td>{{$products->prices}}</td>
            <td>{{$products->count_product}}</td>
            <td>{{$products->quantity}}</td>
            <td align="center"><a href="#" class="btn btn-sm btn-warning btn-edit-row"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
            <td>
                <a href="{{ route($route_prefix . '.edit', $products) }}" class="btn btn-sm btn-success btn-edit-row">
                    <i class="fa fa-pencil" aria-hidden="true">Edit</i>
                </a>

                <a href="javascript:void(0);" class="btn btn-sm btn-danger btn-delete-row">
                    <i class="fa fa-times" aria-hidden="true">Delete</i>
                </a>

                <form method="POST" class="form-delete-row" action="{!! route($route_prefix . '.destroy', $products) !!}" accept-charset="UTF-8">
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

