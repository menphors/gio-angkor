<?php
/**
 * Created by PhpStorm.
 * User: Men phors
 * Date: 12/29/2017
 * Time: 2:12 PM
 */?>
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
        <th>Group CategoryID</th>
        <th>Group Category Name</th>
        <th>Action</th>
    </tr>
    <thead>
    <tbody>
    @foreach($crud_list as $group_category)
        <tr>
            <td>{{$group_category->id}}</td>
            <td>{{$group_category->group_cat_name}}</td>
            <td>
                <a href="{{ route($route_prefix . '.edit', $group_category) }}" class="btn btn-sm btn-success btn-edit-row">
                    <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;&nbsp;Modify
                </a>

                <a href="javascript:void(0);" class="btn btn-sm btn-danger btn-delete-row">
                    <i class="fa fa-times" aria-hidden="true"></i>&nbsp;&nbsp;Delete
                </a>

                <form method="POST" class="form-delete-row" action="{!! route($route_prefix . '.destroy', $group_category) !!}" accept-charset="UTF-8">
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

