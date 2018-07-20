<?php
/**
 * Created by PhpStorm.
 * User: SSOKLIM
 * Date: 1/7/2018
 * Time: 10:04 PM
 */
 ?>
<div class="row">
    <div class="col-md-6">
        {!! BootForm::text('group_cat_name') !!}
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
        {!! BootForm::select('sub_category_id', 'Group Category', $sub_list) !!}
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        {!! link_to_route($route_prefix . '.index', 'Back to list', [], ['class' => 'btn btn-default']) !!}
        {!! Form::submit('Submit', ['class' => 'btn btn-primary pull-right']) !!}
    </div>
</div>


