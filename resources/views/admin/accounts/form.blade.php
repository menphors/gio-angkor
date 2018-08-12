<?php
/**
 * Created by PhpStorm.
 * User: Men phors
 * Date: 12/21/2017
 * Time: 9:44 PM
 */
?>
<div class="row" style="height: 30px !important;">
    <div class="col-md-6">
        {!! BootForm::text('username') !!}
    </div>
</div>
<div class="row" style="height: 30px !important;">

    <div class="col-md-6">
        {!! BootForm::tel('tel') !!}
    </div>
</div>
<div class="row" style="height: 30px !important;">
    <div class="col-md-6">
        <label>Gender</label>
        {!! BootForm::radio('gender', 'F') !!}
        {!! BootForm::radio('gender', 'M') !!}

    </div>
</div>
<div class="row" style="height: 30px !important;">
    <div class="col-md-6">
        {!! BootForm::date('dob')!!}
    </div>
</div>
<div class="row" style="height: 30px !important;">
    <div class="col-md-6">
        {!! BootForm::email('email')!!}
    </div>
</div>
<div class="row" style="height: 30px !important;">
    <div class="col-md-6">
        {!! BootForm::password('password')!!}
    </div>
</div>
<div class="row" style="height: 30px !important;">
    <div class="col-md-6">
        {!! BootForm::select('level_id', 'Level', $level_list) !!}
    </div>
</div>
<div class="row" style="height: 30px !important;">
    <div class="col-md-6">
        <input name="admin" id="admin" type="hidden" value="">
    </div>
</div>
<div class="row" style="height: 30px !important;">
    <div class="col-md-6">
        {!! BootForm::select('published','Official',array('1' => 'official','0'=> 'unofficial'))!!}
    </div>
</div>
{{ csrf_field() }}
<div class="row">
    <div class="col-md-12">
        {!! link_to_route($route_prefix . '.index', 'Back to list', [], ['class' => 'btn btn-default']) !!}
        {!! Form::submit('Submit', ['class' => 'btn btn-primary pull-right']) !!}
    </div>
</div>
<script src="{{asset('js/jquery.min.js')}}" ></script>
    <script>
        $(document).ready(function(){
            $('#level_id').on('change', function() {
                $('#admin').val(' ');
                var level = $('#level_id').val();
                if( level== '1'){
                    $('#admin').val('1');
                    //$('#admin').prev('input').val("1");
                }
            });
        });
</script>
