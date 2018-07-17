<div class="row">
    <div class="col-md-6">
        {!! BootForm::text('level_name') !!}
    </div>
</div>
<div class="row">

    <div class="col-md-6">
        {!! BootForm::text('level_slog') !!}
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        {!! BootForm::select('published','Publish',array('1'=>'Publish','0'=> 'Un-publish'))!!}
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        {!! BootForm::textarea('remark')!!}
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        {!! link_to_route($route_prefix . '.index', 'Back to list', [], ['class' => 'btn btn-default']) !!}
        {!! Form::submit('Submit', ['class' => 'btn btn-primary pull-right']) !!}
    </div>
</div>
