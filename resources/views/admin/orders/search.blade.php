<div class="row">
    <div class="col-md-6">
        {!! BootForm::select('id', '#OrderID', $order_list) !!}
    </div>
    <div class="col-md-6">
        {!! BootForm::text('id') !!}
    </div>
</div>

<div class="row">
    <div class="col-md-12 text-center">
        {!! Form::submit('Search', ['class' => 'btn btn-primary']) !!}
    </div>
</div>