<?php
/**
 * Created by PhpStorm.
 * User: Men phors
 * Date: 1/1/2018
 * Time: 12:13 AM
 */?>
<div class="row" style="height: 30px !important;">
    <div class="col-md-6">
        {!! BootForm::number('discount_percentage') !!}
    </div>
</div>
<div class="row" style="height: 30px !important;">

    <div class="col-md-6">
        {!! BootForm::text('quantity') !!}
    </div>
</div>

<div class="row" style="height: 30px !important;">
    <div class="col-md-6">
        {!! BootForm::number('product_id')!!}
    </div>
</div>

<div class="row" style="height: 30px !important;">
    <div class="col-md-6">
        {!! BootForm::text('category_id')!!}
    </div>
</div>

<div class="row" style="height: 30px !important;">
    <div class="col-md-6">
        {!! BootForm::text('store_id')!!}
    </div>
</div>

<div class="row" style="height: 30px !important;">
    <div class="col-md-6">
        {!! BootForm::date('date_from')!!}
    </div>
</div>

<div class="row" style="height: 30px !important;">
    <div class="col-md-6">
        {!! BootForm::date('date_to')!!}
    </div>
</div>

<div class="row" style="height: 30px !important;">
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


