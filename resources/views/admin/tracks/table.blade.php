<?php
/**
 * Created by PhpStorm.
 * User: Men phors
 * Date: 12/31/2017
 * Time: 10:42 PM
 */?>
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
        <th>Order#</th>
        <th>Tracking No</th>
        <th>Store#</th>
        <th>Status</th>
        <th>Product#</th>
        <th>Created Date</th>
        <th>Updated Date</th>
        <th>Action</th>
    </tr>
    <thead>
    <tbody>
    @foreach($crud_list as $tracks)
        <tr>
            <td>{{$tracks->id}}</td>
            <td>{{$tracks->tracking_number}}</td>
            <td>{{$tracks->store_id}}</td>
            <td>{{$tracks->status}}</td>
            <td>{{$tracks->product_id}}</td>
            <td>{{$tracks->created_at}}</td>
            <td>{{$tracks->updated_at}}</td>
            <td>
                <a href="{{ route($route_prefix . '.edit', $tracks) }}" class="btn btn-sm btn-success btn-edit-row">
                    <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;&nbsp;Modify
                </a>

                <a href="javascript:void(0);" class="btn btn-sm btn-danger btn-delete-row">
                    <i class="fa fa-times" aria-hidden="true"></i>&nbsp;&nbsp;Delete
                </a>

                <form method="POST" class="form-delete-row" action="{!! route($route_prefix . '.destroy', $tracks) !!}" accept-charset="UTF-8">
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

