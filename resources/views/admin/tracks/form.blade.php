<?php
/**
 * Created by PhpStorm.
 * User: Men phors
 * Date: 12/31/2017
 * Time: 10:43 PM
 */?>
<?php
/**
 * Created by PhpStorm.
 * User: Men phors
 * Date: 12/24/2017
 * Time: 8:43 PM
 */?>
<div class="row">
    <div class="col-md-6">
        {!! BootForm::text('tracking_number') !!}
    </div>
</div>
<div class="row">

    <div class="col-md-6">
        {!! BootForm::text('store_id') !!}
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        {!! BootForm::text('status')!!}
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        {!! BootForm::text('product_id')!!}
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        {!! link_to_route($route_prefix . '.index', 'Back to list', [], ['class' => 'btn btn-default']) !!}
        {!! Form::submit('Submit', ['class' => 'btn btn-primary pull-right']) !!}
    </div>
</div>


