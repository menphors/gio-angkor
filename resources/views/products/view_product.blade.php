@extends('adminlte::page')

@section('title', 'GIO Angkor')

@section('content_header')
    <h1>Products Information</h1>
    <style>
    
 </style>
@stop

@section('content')
<div class="container">
  <table class="table table-hover">
    <thead>
      <tr>
        <a href="<?php echo url("/pd");?>" class="btn btn-primary" style="margin-right: 75px;float: right;">+ADD New Product</a>
        <th>ID</th>
        <th>ProductCode</th>
        <th>ProductName</th>
        <th>Category</th>
        <th>Brand</th>
        <th>Action</th>
      </tr>
    </thead>

    @if(isset($products))
    @foreach($products as $value)
    <tbody>
      <tr>
        <td> {{ $value->id }}</td>
        <td> {{ $value->pro_code }}</td>
        <td> {{ $value->pro_name }}</td>
        <td> {{ $value->category }}</td>
        <td> {{ $value->brand }}</td>
        <td> <a href="<?php echo url("/delete/{$value->id}");?>"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><span class=" glyphicon glyphicon-trash" aria-hidden="true"></span> </button></a> | <a href="<?php echo url("/edit/{$value->id}");?>"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></a> </td>
      </tr>
    </tbody>
   @endforeach
   @endif
  </table>
</div>

@stop
