<?php
/**
 * Created by PhpStorm.
 * User: Men phors
 * Date: 12/31/2017
 * Time: 11:30 PM
 */?>
<div class="row" style="height: 30px !important;">
    <div class="col-md-6">
        {!! BootForm::text('pro_name') !!}
    </div>
</div>
<div class="row" style="height: 30px !important;">
    <div class="col-md-6">
        {!! BootForm::text('pro_code') !!}
    </div>
</div>

<div class="row" style="height: 30px !important;">
    <div class="col-md-6">
        {!! BootForm::text('model')!!}
    </div>
</div>
<div class="row" style="height: 30px !important;">
    <div class="col-md-6">
        {!! BootForm::text('made')!!}
    </div>
</div>
<div class="row" style="height: 30px !important;">
    <div class="col-md-6">
        {!! BootForm::number('prices')!!}
    </div>
</div>
<div class="row" style="height: 30px !important;">
    <div class="col-md-6">
        {!! BootForm::text('count_product')!!}
    </div>
</div>
<div class="row" style="height: 30px !important;">
    <div class="col-md-6">
        {!! BootForm::text('quantity')!!}
    </div>
</div>
<div class="row" style="height: 30px !important;">
    <div class="col-md-6">
        <!-- {!! BootForm::text('brand')!!} -->
<!--          {!! BootForm::select('id','brand',array(
        'addidas'=>"Addidas",
        'nike'=>"Nike",
        'apple'=>"Apple",
        'samsung'=>"Samsung",
        'zendo'=>"Zendo",
        'pedro'=>"Pedro",
        'romanson'=>"Romanson",
        'gucci'=>"Gucci",
        'channel'=>"Channel",
        'dior'=>'Dior',
        'baby_dry'=>"Baby Dry",
        'levi'=>"Levi's")
        )!!} -->
    {!! BootForm::select('brand_id', 'Brand', $brand_list) !!}

    </div>
</div>
<div class="row" style="height: 30px !important;">
    <div class="col-md-6">
        <!-- {!! BootForm::text('category')!!} -->
<!--         {!! BootForm::select('category','category',array(
        'women_cloth'=>"Women's Clothing",
        'man_cloth'=>"Man's Clothing",
        'phone'=>"Phone & Accessories",
        'computer'=>"Computer & Office",
        'consumer'=>"Consumer Electronics",
        'jewelry'=>"Jewelry & Watches",
        'home'=>"Home & Garden, Funiture",
        'bag_shoes'=>"Bags & Shoes",
        'toy'=>"Toy, Kids & Baby",
        'sport'=>'Sport & Outdoor',
        'health'=>"Health & Beauty, Hair",
        'automobile'=>"Automobiles & Motorcycles",
        'home_impro'=>"Home Improvement")
        )!!} -->
        {!! BootForm::select('category_id', 'Category', $category_list) !!}

    </div>
</div>
<div class="row" style="height: 30px !important;">
    <div class="col-md-6">
        <!-- {!! BootForm::text('setting')!!} -->
       <!--   {!! BootForm::select('id','setting',array(
        'size'=>"Size",
        'color'=>"Color",
        'weight'=>"Weight")
        )!!} -->
        {!! BootForm::select('promotion_id', 'Promotion', $promotion_list) !!}
    </div>
</div>
<div class="row" style="height: 30px !important;">
    <div class="col-md-6">
        <!-- {!! BootForm::text('setting')!!} -->
       <!--   {!! BootForm::select('id','setting',array(
        'size'=>"Size",
        'color'=>"Color",
        'weight'=>"Weight")
        )!!} -->
        {!! BootForm::select('type_id', 'Setting Type', $settingtype_list) !!}
    </div>
</div>
<div class="row" style="height: 30px !important;">
    <div class="col-md-6">
        <!-- {!! BootForm::text('setting')!!} -->
       <!--   {!! BootForm::select('id','setting',array(
        'size'=>"Size",
        'color'=>"Color",
        'weight'=>"Weight")
        )!!} -->
        {!! BootForm::select('setting_id', 'Setting Items', $settingitem_list) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        {!! BootForm::hidden('user')!!}
    </div>
</div>
<div class="row">
    <div class="col-md-6">
    </div>
</div>
<div class="row" style="height: 30px !important;">
    <div class="col-md-6">
        {!! BootForm::file('gallery')!!}
    </div>
</div>
<div class="row" style="height: 30px !important;">
    <div class="col-md-6">
        {!! BootForm::select('published','publish',array('pub'=>'Publish','unpub'=> 'Un-publish'))!!}
    </div>
</div>
<div class="row" style="height: 30px !important;">
    <div class="col-md-12">
        {!! BootForm::textarea('product_desc')!!}
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        {!! link_to_route($route_prefix . '.index', 'Back to list', [], ['class' => 'btn btn-default']) !!}
        {!! Form::submit('Submit', ['class' => 'btn btn-primary pull-right']) !!}
    </div>
</div>


