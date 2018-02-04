<?php
/**
 * Created by PhpStorm.
 * User: SSOKLIM
 * Date: 1/7/2018
 * Time: 6:11 PM
 */?>
<table class="table table-bordered crud-table">
    <thead>
    <tr>
        <th>LogID</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Date</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
    <thead>
    <tbody>
    @foreach($crud_list as $logActivity)
        <tr>
            <td>{{$logActivity->id}}</td>
            <td>{{$logActivity->quantity}}</td>
            <td>{{$logActivity->price}}</td>
            <td>{{$logActivity->date}}</td>
            <td>{{$logActivity->status}}</td>
            <td>
                <a href="{{ route($route_prefix . '.edit', $logActivity) }}" class="btn btn-sm btn-success btn-edit-row">
                    <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;&nbsp;Modify
                </a>

                <a href="javascript:void(0);" class="btn btn-sm btn-danger btn-delete-row">
                    <i class="fa fa-times" aria-hidden="true"></i>&nbsp;&nbsp;Delete
                </a>

                <form method="POST" class="form-delete-row" action="{!! route($route_prefix . '.destroy', $logActivity) !!}" accept-charset="UTF-8">
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
