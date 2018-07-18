<?php
/**
 * Created by PhpStorm.
 * User: Men phors
 * Date: 12/21/2017
 * Time: 9:44 PM
 */
?>
<div class="row">
    <div class="col-md-6">
        {!! BootForm::text('brand_name') !!}
    </div>
</div>
<div class="row">

    <div class="col-md-6">
        {!! BootForm::file('images_url') !!}
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        {!! BootForm::select('official','Official',array('1' => 'official','0'=> 'unofficial'))!!}
    </div>
</div>
<!-- 
<div class="row">
    <div class="col-md-12">
        {!! BootForm::number('ordering')!!}
    </div>
</div>

 -->

<div class="row">
    <div class="col-md-12">
        {!! link_to_route($route_prefix . '.index', 'Back to list', [], ['class' => 'btn btn-default']) !!}
        {!! Form::submit('Submit', ['class' => 'btn btn-primary pull-right']) !!}
    </div>
</div>

