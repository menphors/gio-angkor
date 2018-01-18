<?php
/**
 * Created by PhpStorm.
 * User: SSOKLIM
 * Date: 1/7/2018
 * Time: 6:11 PM
 */?>
<div class="row">
    <div class="col-md-6">
        {!! BootForm::number('quantity') !!}
    </div>
</div>
<div class="row">

    <div class="col-md-6">
        {!! BootForm::text('price') !!}
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        {!! BootForm::date('date')!!}
    </div>
</div>
{{--status: name;status:class;array: value of select--}}
<div class="row">
    <div class="col-md-6">
        {!! BootForm::select('status','status',array('active' => 'Active','inactive'=> 'Inactive'))!!}
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        {!! link_to_route($route_prefix . '.index', 'Back to list', [], ['class' => 'btn btn-default']) !!}
        {!! Form::submit('Submit', ['class' => 'btn btn-primary pull-right']) !!}
    </div>
</div>

