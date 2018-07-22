<?php
/**
 * Created by PhpStorm.
 * User: Men phors
 * Date: 3/6/2018
 * Time: 12:45 AM
 */?>
<div class="row">
    <div class="col-md-6">
        {!! BootForm::file('gallery_images')!!}
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        {!! BootForm::select('published','Publish',array('1'=>'Main Gallery','0'=> 'Image Thumbsnail'))!!}
    </div>
</div>
{{ csrf_field() }}
<div class="row">
    <div class="col-md-12">
        {!! link_to_route($route_prefix . '.index', 'View Gallery', [], ['class' => 'btn btn-success']) !!}
        {!! Form::submit('Submit', ['class' => 'btn btn-primary pull-right']) !!}
    </div>
</div>
