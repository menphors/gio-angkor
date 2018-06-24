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
        <th>UID#</th>
        <th>Username</th>
        <th>Phone</th>
        <th>Gender</th>
        <th>DOB</th>
        <th>Email</th>
        <th>Published</th>
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
            <td align="center"><a href="#" class="btn btn-sm btn-warning btn-edit-row"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
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
