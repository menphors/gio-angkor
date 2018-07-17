<div class="row">
    <div class="col-md-6">
        {!! BootForm::select('product_id', 'Product', $product_list) !!}
    </div>
    <div class="col-md-6">
        {!! BootForm::text('promotion_name') !!}
    </div>
</div>

<div class="row">
    <div class="col-md-12 text-center">
        {!! Form::submit('Search', ['class' => 'btn btn-primary']) !!}
    </div>
</div>