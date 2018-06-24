<?php
/**
 * Created by PhpStorm.
 * User: SSOKLIM
 * Date: 1/14/2018
 * Time: 9:52 PM
 */
        ?>

<table class="table table-bordered crud-table">
    <thead>
    <tr>
        <th>ID</th>
        <th>Category ID</th>
        <th>Sub-Category Name</th>
        <th>Published</th>
    </tr>
    <thead>
    <tbody>
    @foreach($crud_list as $SubCategory)
        <tr>
            <td>{{$SubCategory->id}}</td>
            <td>{{$SubCategory->cat_group_id}}</td>
            <td>{{$SubCategory->sub_category_name}}</td>
            <td align="center"><a href="#" class="btn btn-sm btn-warning btn-edit-row"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
            <td>
                <a href="{{ route($route_prefix . '.edit', $SubCategory) }}" class="btn btn-sm btn-success btn-edit-row">
                    <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;&nbsp;Edit
                </a>

                <a href="javascript:void(0);" class="btn btn-sm btn-danger btn-delete-row">
                    <i class="fa fa-times" aria-hidden="true"></i>&nbsp;&nbsp;Delete
                </a>

                <form method="POST" class="form-delete-row" action="{!! route($route_prefix . '.destroy', $SubCategory) !!}" accept-charset="UTF-8">
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
