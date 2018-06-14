<?php
/**
 * Created by PhpStorm.
 * User: Men phors
 * Date: 12/31/2017
 * Time: 11:30 PM
 */?>
<div class="row">
    <div class="col-md-6">
        {!! BootForm::text('promotion_name') !!}
    </div>
</div>
<div class="row">

    <div class="col-md-6">
        {!! BootForm::text('promotion_prices') !!}
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        {!! BootForm::file('promotion_image')!!}
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        {!! BootForm::text('discount_percentage')!!}
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        {!! BootForm::select('published','publish',array('pub'=>'Publish','unpub'=> 'Un-publish'))!!}
    </div>
</div>

<div class="row" style="height: 30px !important;">
    <div class="col-md-6">
        {!! BootForm::text('product_id')!!}
    </div>
</div>

<div class="row" style="height: 30px !important;">
    <div class="col-md-6">
        {!! BootForm::text('brand_id')!!}
    </div>
</div>

<div class="row" style="height: 30px !important;">
    <div class="col-md-6">
        {!! BootForm::text('ordering')!!}
    </div>
</div>

<div class="row" style="height: 30px !important;">
    <div class="col-md-6">
        {!! BootForm::text('category_id')!!}
    </div>
</div>

<div class="row" style="height: 30px !important;">
    <div class="col-md-6">
        {!! BootForm::date('promotion_expire_date')!!}
    </div>
</div>

<div class="row" style="height: 30px !important;">
    <div class="col-md-6">
        {!! BootForm::date('date_from')!!}
    </div>
</div>

{{--<div class="row" style="height: 30px !important;">--}}
    {{--<div class="col-md-6">--}}
        {{--{!! BootForm::date('date_to')!!}--}}
    {{--</div>--}}
{{--</div>--}}

<div class="row">
    <div class="col-md-12">
        {!! link_to_route($route_prefix . '.index', 'Back to list', [], ['class' => 'btn btn-default']) !!}
        {!! Form::submit('Submit', ['class' => 'btn btn-primary pull-right']) !!}
    </div>
</div>


