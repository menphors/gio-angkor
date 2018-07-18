<?php
/**
 * Created by PhpStorm.
 * User: Men phors
 * Date: 3/6/2018
 * Time: 12:08 AM
 */?>
 <table class="table table-bordered crud-table">
    <thead>
    <tr>
        <th>Media Image</th>
        <th>Image Type</th>
        <th>Action</th>
    </tr>
    <thead>
    <tbody>
    @foreach($crud_list as $galleries)
    <tr>
    @if($galleries->published ==1) 
        <td>
            <img src="{{URL::asset('/uploads/'.$galleries->gallery_images)}}" width="100" height="100"/>
        </td>
        <td align="center"><a href="#" class="btn btn-sm btn-warning"><i class="fa fa-file-image-o" aria-hidden="true"></i> Main Gallery</a></td>
        @else
        <td>
            <img src="{{URL::asset('/uploads/'.$galleries->gallery_images)}}" width="100" height="100" style="border: 1px solid #000;padding: 4px;" />
        </td>
        <td align="center"><a href="#" class="btn btn-sm btn-warning btn-edit-row"><i class="fa fa-file-image-o" aria-hidden="true"></i> Image Thumbsnail</a></td> 
        @endif
    <td>
    <a href="{{ route($route_prefix . '.edit', $galleries) }}" class="btn btn-sm btn-success btn-edit-row">
        <i class="fa fa-pencil" aria-hidden="true"></i>
    </a>
    <a href="javascript:void(0);" class="btn btn-sm btn-danger btn-delete-row">
        <i class="fa fa-times" aria-hidden="true"></i>
    </a>
    <form method="POST" class="form-delete-row" action="{!! route($route_prefix . '.destroy', $galleries) !!}" accept-charset="UTF-8">
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
                   