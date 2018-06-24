<?php
/**
 * Created by PhpStorm.
 * User: Men phors
 * Date: 12/31/2017
 * Time: 11:30 PM
 */?>
<div class="row">
    <div class="col-md-6">
        {!! BootForm::text('pro_name') !!}
    </div>
</div>
<div class="row">

    <div class="col-md-6">
        {!! BootForm::text('pro_code') !!}
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        {!! BootForm::text('model')!!}
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        {!! BootForm::text('product_desc')!!}
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        {!! BootForm::text('made')!!}
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        {!! BootForm::number('prices')!!}
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        {!! BootForm::text('count_product')!!}
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        {!! BootForm::text('quantity')!!}
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        {!! BootForm::text('brand')!!}
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        {!! BootForm::text('category')!!}
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        {!! BootForm::text('setting')!!}
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        {!! BootForm::text('user')!!}
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        {!! BootForm::file('gallery')!!}
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        {!! BootForm::select('published','publish',array('pub'=>'Publish','unpub'=> 'Un-publish'))!!}
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        {!! link_to_route($route_prefix . '.index', 'Back to list', [], ['class' => 'btn btn-default']) !!}
        {!! Form::submit('Submit', ['class' => 'btn btn-primary pull-right']) !!}
    </div>
</div>


