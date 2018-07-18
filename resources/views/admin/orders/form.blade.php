<?php
/**
 * Created by PhpStorm.
 * User: Men phors
 * Date: 12/24/2017
 * Time: 8:43 PM
 */?>
<div class="row" style="height: 30px !important;">
    <div class="col-md-6">
        {!! BootForm::text('order_unit_price') !!}
    </div>
</div>
<div class="row" style="height: 30px !important;">

    <div class="col-md-6">
        {!! BootForm::text('discount') !!}
    </div>
</div>

<div class="row" style="height: 30px !important;">
    <div class="col-md-6">
        {!! BootForm::number('quantity')!!}
    </div>
</div>

<div class="row" style="height: 30px !important;">
    <div class="col-md-6">
        {!! BootForm::date('order_date')!!}
    </div>
</div>

<div class="row" style="height: 30px !important;">
    <div class="col-md-6">
        {!! BootForm::select("status_product","Status",array("Completed"=>"Completed","Processing"=>"Processing","Pending Payment"=>"Pending Payment","On hold"=> "On hold","Cancelled"=>"Cancelled","Refunded"=>"Refunded","Fail"=>"Fail"))!!}
    </div>
</div>
<div class="row" style="height: 30px !important;">
    <div class="col-md-6">
        {!! BootForm::select('product_id', 'Product Name', $product_list) !!}
    </div>
</div>
<div class="row" style="height: 30px !important;">
    <div class="col-md-6">
        {!! BootForm::select('user_id', 'Username', $user_list) !!}
    </div>
</div>

<div class="row" style="height: 30px !important;">
    <div class="col-md-6">
        {!! BootForm::select('published','publish',array('1'=>'Publish','0'=> 'Un-publish'))!!}
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        {!! link_to_route($route_prefix . '.index', 'Back to list', [], ['class' => 'btn btn-default']) !!}
        {!! Form::submit('Submit', ['class' => 'btn btn-primary pull-right']) !!}
    </div>
</div>

