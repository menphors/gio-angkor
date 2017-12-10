@extends('adminlte::page')

@section('title', str_plural($site_title) . ' - modify')

@section('content_header')
    <h1>{{ str_plural($page_title) . ' - modify' }}</h1>
@stop

@section('content')
    @if(Session::has('success'))
        <div class="alert alert-success">
            <p>{{ session('success') }}</p>
        </div>
    @endif
    <div class="panel panel-default">
        <div class="panel-body">
            {!! BootForm::open(['model' => $crud_item, 'store' => $route_prefix . '.store', 'update' => $route_prefix . '.update']); !!}
                @if (view()->exists($view_prefix . '.form'))
                    @include($view_prefix . '.form')
                @else
                    <p>No views <strong>form.blade.php</strong> found in <strong>views.{{ $view_prefix }}</strong></p>
                @endif
            {!! BootForm::close() !!}
        </div>
    </div>
@stop