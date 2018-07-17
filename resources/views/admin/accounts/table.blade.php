<?php
/**
 * Created by PhpStorm.
 * User: Men phors
 * Date: 12/21/2017
 * Time: 9:34 PM
 */
?>
<table class="table table-bordered crud-table" id="table" 
             data-toggle="table"
             data-search="true"
             data-filter-control="true" 
             data-show-export="true"
             data-click-to-select="true"
             data-toolbar="#toolbar">
    <thead>
    <tr>
        <th data-filter-control="select" sortable="true" data-field="UID">UID#</th>
        <th data-filter-control="select" sortable="true" data-field="Username">Username</th>
        <th data-filter-control="select" sortable="true" data-field="Phone">Phone</th>
        <th data-filter-control="select" sortable="true" data-field="Gender">Gender</th>
        <th data-filter-control="select" sortable="true" data-field="DOB">DOB</th>
        <th data-filter-control="select" sortable="true" data-field="Email">Email</th>
        <th data-filter-control="select" sortable="true" data-field="Published">Published</th>
        <th>Action</th>
    </tr>
    <thead>
    <tbody>
    @foreach($crud_list as $users)
        <tr>
            <td>{{$users->id}}</td>
            <td>{{$users->username}}</td>
            <!--<td><img src="{{URL::asset('/uploads/'.$users->images_url)}}" style="width:50px;height:50px;"></td>-->
            <td>{{$users->tel}}</td>
            <td>{{$users->gender}}</td>
            <td>{{$users->dob}}</td>
            <td>{{$users->email}}</td>
            @if($users->published ==1)
            <td align="center"><a href="#" class="btn btn-sm btn-warning btn-edit-row"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
            @else
            <td align="center"><a href="#" class="btn btn-sm btn-warning btn-edit-row"><i class="fa fa-eye-slash" aria-hidden="true"></i></a></td> 
            @endif
            <td>
                <a href="{{ route($route_prefix . '.edit', $users) }}" class="btn btn-sm btn-success btn-edit-row">
                    <i class="fa fa-pencil" aria-hidden="true"></i>Edit
                </a>

                <a href="javascript:void(0);" class="btn btn-sm btn-danger btn-delete-row">
                    <i class="fa fa-times" aria-hidden="true"></i>Delete
                </a>

                <form method="POST" class="form-delete-row" action="{!! route($route_prefix . '.destroy', $users) !!}" accept-charset="UTF-8">
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
<!-- <script>
    alert('Hi');
    //exporte les données sélectionnées
var $table = $('#table');
    $(function () {
        $('#toolbar').find('select').change(function () {
            $table.bootstrapTable('refreshOptions', {
                exportDataType: $(this).val()
            });
        });
    })

        var trBoldBlue = $("table");

    $(trBoldBlue).on("click", "tr", function (){
            $(this).toggleClass("bold-blue");
    });
</script> -->
