<?php
/**
 * Created by PhpStorm.
 * User: SSOKLIM
 * Date: 1/7/2018
 * Time: 10:26 PM
 */
 ?>
<table class="table table-bordered crud-table">
    <thead>
    <tr>
        <th>ID</th>
        <th>Group Category</th>
        <th>Category ID</th>
        <th>Sub-Category ID</th>
        <th>Action</th>
    </tr>
    <thead>
    <tbody>
    @foreach($crud_list as $GroupCategory)
        <tr>
            <td>{{$GroupCategory->id}}</td>
            <td>{{$GroupCategory->group_cat_name}}</td>
            <td>{{$GroupCategory->category_id}}</td>
            <td>{{$GroupCategory->sub_category_id}}</td>
            <td>
                <a href="{{ route($route_prefix . '.edit', $GroupCategory) }}" class="btn btn-sm btn-success btn-edit-row">
                    <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;&nbsp;Edit
                </a>

                <a href="javascript:void(0);" class="btn btn-sm btn-danger btn-delete-row">
                    <i class="fa fa-times" aria-hidden="true"></i>&nbsp;&nbsp;Delete
                </a>

                <form method="POST" class="form-delete-row" action="{!! route($route_prefix . '.destroy', $GroupCategory) !!}" accept-charset="UTF-8">
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
