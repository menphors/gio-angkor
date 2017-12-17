<div class="row">
    <div class="col-md-6">
        {!! BootForm::select('type_id', 'Type', $type_list) !!}
    </div>
    <div class="col-md-6">
        {!! BootForm::text('code') !!}
    </div>
</div>
<div class="row">

    <div class="col-md-6">
        {!! BootForm::text('name') !!}
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        {!! BootForm::textarea('note')!!}
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        {!! link_to_route($route_prefix . '.index', 'Back to list', [], ['class' => 'btn btn-default']) !!}
        {!! Form::submit('Submit', ['class' => 'btn btn-primary pull-right']) !!}
    </div>
</div>
