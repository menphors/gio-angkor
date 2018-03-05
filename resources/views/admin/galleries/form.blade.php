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
        {!! BootForm::select('published','publish',array('pub'=>'Main Gallery','unpub'=> 'Image Thumbsnail'))!!}
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        {!! link_to_route($route_prefix . '.index', 'Back to list', [], ['class' => 'btn btn-default']) !!}
        {!! Form::submit('Submit', ['class' => 'btn btn-primary pull-right']) !!}
    </div>
</div>
