<div class="row">
    <div class="col-md-6">
        {!! BootForm::select('type_id', 'Type', $type_list) !!}
    </div>
    <div class="col-md-6">
        {!! BootForm::text('code') !!}
    </div>
</div>

<div class="row">
    <div class="col-md-12 text-center">
        {!! Form::submit('Search', ['class' => 'btn btn-primary']) !!}
    </div>
</div>