<?php
/**
 * Created by PhpStorm.
 * User: SSOKLIM
 * Date: 12/10/2017
 * Time: 3:51 PM
 */
?>

@extends('adminlte::page')

@section('title', 'GIO Angkor')

@section('content_header')
    <h1>Add Products</h1>
    <style>

    </style>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <form class="form-inline" action="/update" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Product Name:</label>
                        @foreach($products as $value)
                        <input type="text" class="form-control" name="pro_name" value="<?php echo $value->pro_name;?>"><br><br>
                        <label>Product Code:</label>
                        <input type="text" class="form-control" name="pro_code" value="<?php echo $value->pro_code;?>">
                    </div><br><br>
                    @endforeach
                    <div class="form-group">
                        <label for="brand">Brand:</label>
                        <select class="form-control" name="brand" value="<?php echo "<option>$value->brand</option>";?>">
                            <option></option>
                            <option>Nike</option>
                            <option>Adidas</option>
                            <option>Puma</option>
                            <option>FBT</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="cat">Category:</label>
                        <select class="form-control" name="category">
                            <option value="<?php echo $value->category;?>"></option>
                            <option>Clothes</option>
                            <option>Watch</option>
                            <option>Shoes</option>
                            <option>Phone</option>
                        </select>
                    </div>	<br><br>

                    <div class="form-group">
                        <label>Model:</label>
                        <input type="text" class="form-control" id="model" name="model" value="<?php echo $value->model;?>"><br><br>
                        <label>Price:</label>
                        <input type="text" class="form-control" id="price" name="price" value="<?php echo $value->price;?>"><br><br>
                        <label>Color:</label>
                        <input type="text" class="form-control" id="color" name="color" value="<?php echo $value->color;?>"><br><br>
                        <label>Promotion:</label>
                        <input type="text" class="form-control" id="promotion" name="promotion" value="<?php echo $value->promotion;?>">
                    </div>	<br><br>

                    <div class="form-group">
                        <label>Gallery:</label>
                        <input type="file" class="form-control-file" name="gallery" id="exampleInputFile" aria-describedby="fileHelp">
                        <small id="fileHelp" name="gallery" class="form-text text-muted"></small>
                    </div><br><br>

                    <label>Publish:</label>
                    <input type="text" class="form-control" name="publish"><br><br>

            </div>

            <div class="col-lg-7 col-md-7 col-sm-7">
                <div class="form-group">
                    <label for="desc">Product Description</label>
                    <textarea class="form-control" name="desc"></textarea>
                </div>
                <input type="submit" name="submit" value="Add">
                <a href="<?php echo url("/update");?>">Update </a>

            </div>

        </div>
        </form>
    </div>

@stop

@section('js')
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'desc' );
    </script>
@stop


