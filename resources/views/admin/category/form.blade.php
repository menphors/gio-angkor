<?php
/**
 * Created by PhpStorm.
 * User: SSOKLIM
 * Date: 1/14/2018
 * Time: 8:19 PM
 */
?>
<div class="row" style="height: 30px !important;">
    <div class="col-md-6">
        {!! BootForm::text('name') !!}
    </div>
</div>
<div class="row">


    <div class="col-md-6">
        {!! BootForm::text('name') !!}
    </div>
</div>
<div class="row" style="height: 30px !important;">
    <div class="col-md-6">
       <!--  {!! BootForm::number('parent_id')!!} -->
        {!! BootForm::select('parent_id','Main Category',array('1' => 'Main Category','0'=> 'Child Category'))!!}
    </div>
</div>

<div class="row" style="height: 30px !important;">
    <div class="col-md-6">
        {!! BootForm::select('published','Published',array('1' => 'Publish','0'=> 'Unpublish'))!!}
    </div>
</div>
{{ csrf_field() }}
<div class="row">
    <div class="col-md-12">
        {!! link_to_route($route_prefix . '.index', 'Back to list', [], ['class' => 'btn btn-default']) !!}
        {!! Form::submit('Submit', ['class' => 'btn btn-primary pull-right']) !!}
    </div>
</div>

