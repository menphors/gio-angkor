<?php
/**
 * Created by PhpStorm.
 * User: Men phors
 * Date: 12/29/2017
 * Time: 2:17 PM
 */?>
<div class="row">
    <div class="col-md-6">
        {!! BootForm::text('group_cat_name','Group Category Name') !!}
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        {!! link_to_route($route_prefix . '.index', 'Back to list', [], ['class' => 'btn btn-default']) !!}
        {!! Form::submit('Submit', ['class' => 'btn btn-primary pull-right']) !!}
    </div>
</div>


