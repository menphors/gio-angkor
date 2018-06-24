<?php
/**
 * Created by PhpStorm.
 * User: SSOKLIM
 * Date: 1/14/2018
 * Time: 2:48 PM
 */?>
<table class="table table-bordered crud-table">
    <thead>
    <tr>
        <th>ID</th>
        <th>Category</th>
        <th>Ordering</th>
        <th>ProductID</th>
        <th>Published</th>
    </tr>
    <thead>
    <tbody>
    @foreach($crud_list as $Category)
        <tr>
            <td>{{$Category->id}}</td>
            <td>{{$Category->category_name}}</td>
            <td>{{$Category->ordering}}</td>
            <td>{{$Category->pro_id}}</td>
            <td align="center"><a href="#" class="btn btn-sm btn-warning btn-edit-row"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
            <td>
                <a href="{{ route($route_prefix . '.edit', $Category) }}" class="btn btn-sm btn-success btn-edit-row">
                    <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;&nbsp;Edit
                </a>

                <a href="javascript:void(0);" class="btn btn-sm btn-danger btn-delete-row">
                    <i class="fa fa-times" aria-hidden="true"></i>&nbsp;&nbsp;Delete
                </a>

                <form method="POST" class="form-delete-row" action="{!! route($route_prefix . '.destroy', $Category) !!}" accept-charset="UTF-8">
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

