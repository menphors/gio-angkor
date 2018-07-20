<?php
/**
 * Created by PhpStorm.
 * User: SSOKLIM
 * Date: 1/14/2018
 * Time: 9:52 PM
 */
?>
<div class="row">
    <div class="col-md-6">
        {!! BootForm::text('sub_category_name') !!}
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <!-- {!! BootForm::text('category_id')!!} -->
        {!! BootForm::select('category_id', 'Category', $category_list) !!}

    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <!-- {!! BootForm::text('category_id')!!} -->
        {!! BootForm::select('cat_group_id', 'Group Category', $group_list) !!}
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        {!! BootForm::select('published','Published',array('1' => 'Publish','0'=> 'Unpublish'))!!}
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        {!! link_to_route($route_prefix . '.index', 'Back to list', [], ['class' => 'btn btn-default']) !!}
        {!! Form::submit('Submit', ['class' => 'btn btn-primary pull-right']) !!}
    </div>
</div>