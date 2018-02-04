<?php
/**
 * Created by PhpStorm.
 * User: Men phors
 * Date: 12/21/2017
 * Time: 9:34 PM
 */
?>
<table class="table table-bordered crud-table">
    <thead>
    <tr>
        <th>Brand#</th>
        <th>Brand Name</th>
        <th>Brand Image</th>
        <th>Ordering</th>
        <th>Action</th>
    </tr>
    <thead>
    <tbody>
    @foreach($crud_list as $brands)
        <tr>
            <td>{{$brands->id}}</td>
            <td>{{$brands->brand_name}}</td>
            <td>{{$brands->images_url}}</td>
            <td>{{$brands->ordering}}</td>
            <td>
                <a href="{{ route($route_prefix . '.edit', $brands) }}" class="btn btn-sm btn-success btn-edit-row">
                    <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;&nbsp;Modify
                </a>

                <a href="javascript:void(0);" class="btn btn-sm btn-danger btn-delete-row">
                    <i class="fa fa-times" aria-hidden="true"></i>&nbsp;&nbsp;Delete
                </a>

                <form method="POST" class="form-delete-row" action="{!! route($route_prefix . '.destroy', $brands) !!}" accept-charset="UTF-8">
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
