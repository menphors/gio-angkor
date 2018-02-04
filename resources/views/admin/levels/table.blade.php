<table class="table table-bordered crud-table">
    <thead>
        <tr>
            <th>Level#</th>
            <th>Login/Email</th>
            <th>Level Name</th>
            <th>Level slog</th>
            <th>Remark</th>
            <th>Last Login</th>
            <th>Action</th>
        </tr>
    <thead>
    <tbody>
    @foreach($crud_list as $levels)
        <tr>
            <td><input type="checkbox" name="chk[{{$levels->id}}]"> </td>
            <td></td>
            <td>{{$levels->level_name}}</td>
            <td>{{$levels->level_slog}}</td>
            <td>{{$levels->remark}}</td>
            <td></td>
            <td>
                <a href="{{ route($route_prefix . '.edit', $levels) }}" class="btn btn-sm btn-success btn-edit-row">
                    <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;&nbsp;Modify
                </a>

                <a href="javascript:void(0);" class="btn btn-sm btn-danger btn-delete-row">
                    <i class="fa fa-times" aria-hidden="true"></i>&nbsp;&nbsp;Delete
                </a>

                <form method="POST" class="form-delete-row" action="{!! route($route_prefix . '.destroy', $levels) !!}" accept-charset="UTF-8">
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