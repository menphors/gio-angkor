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
        {!! BootForm::text('username') !!}
    </div>
</div>
<div class="row">

    <div class="col-md-6">
        {!! BootForm::tel('tel') !!}
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <label>Gender</label>
        {!! BootForm::radio('gender', 'F') !!}
        {!! BootForm::radio('gender', 'M') !!}

    </div>
</div>
<div class="row">
    <div class="col-md-6">
        {!! BootForm::date('dob')!!}
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        {!! BootForm::email('email')!!}
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        {!! BootForm::password('password')!!}
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        {!! BootForm::select('official','official',array('official' => 'official','unofficial'=> 'unofficial'))!!}
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        {!! link_to_route($route_prefix . '.index', 'Back to list', [], ['class' => 'btn btn-default']) !!}
        {!! Form::submit('Submit', ['class' => 'btn btn-primary pull-right']) !!}
    </div>
</div>

