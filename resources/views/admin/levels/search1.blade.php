<div class="row">
    {{--<div class="col-md-6">--}}
        {{--{!! BootForm::select('type_id', 'Type', $type_list) !!}--}}
    {{--</div>--}}
    <div class="col-md-4 btn-group" style="display: inline;">
        {{--<input type="text" class="">--}}
        {{--<input type="submit" class="btn-primary">--}}
        {!! BootForm::text('All user type') !!}{!! Form::submit('Search', ['class' => 'btn btn-primary']) !!}
    </div>
    <div class="col-md-3 text-center btn-group">
        {!! BootForm::select('published','published',array('published' => 'published','unpublished'=> 'unpublished'))!!}
    </div>
    <div class="col-md-3 text-center"></div>
    <div class="col-md-3 text-center"></div>
</div>

{{--<div class="row">--}}
   {{----}}
{{--</div>--}}