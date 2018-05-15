@extends('adminlte::page')

@section('title', 'GIO Angkor')

@section('content_header')
@stop

@section('content')

    <link href="{{asset('css/Promotion.css')}}" rel="stylesheet">
    <link href="{{asset('js/Promotion.js')}}" rel="stylesheet">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <legend><h2>Promotion of product:</h2></legend>
            </div>
            <!-- panel preview -->
            <div class="col-sm-5">
                <h4>Add Product:</h4>
                <div class="panel panel-default">
                    <div class="panel-body form-horizontal product-form">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="brand_name" class="col-sm-3 control-label">Brand Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-product" id="brand_name" name="brand_name" placeholder="Place input Brand Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="promotion_name" class="col-sm-3 control-label">Pro_Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-product" id="promotion_name" name="promotion_name" placeholder="Place input Promotion_name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="promotion_prices" class="col-sm-3 control-label"> Pro_Prices</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-product" id="promotion_prices" name="promotion_prices" placeholder="Place input promotion prices ">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="date_from" class="col-sm-3 control-label"> Date_From</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-product" id="date_from" name="date_from">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="date_to" class="col-sm-3 control-label">Date_To</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-product" id="date_to" name="date_to">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="promotion_image" class="col-sm-3 control-label">Pro_Image</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-product" id="promotion_image" name="promotion_image" placeholder="Place input Promotion_image">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="product_id" class="col-sm-3 control-label">Product ID</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-product" id="product_id" name="product_id" placeholder="Place input Product_id">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="published" class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-status" id="published" name="published" placeholder="Place input Status">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12 text-right">
                                <button type="button" class="btn btn-default preview-add-button">
                                    <span class="glyphicon glyphicon-plus"></span> Add
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- / panel preview -->
            <div class="col-sm-7">
                <h4>Preview:</h4>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="table-responsive">
                            <table class="table preview-table">
                                <thead>
                                <tr>
                                    <th>Brand-Name</th>
                                    <th>Promotion-Name</th>
                                    <th>Promotion-Prices</th>
                                    <th>Promotion-Expire</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody></tbody> <!-- preview content goes here-->
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row text-right">
                    <div class="col-xs-12">
                        <h4>Total: <strong><span class="preview-total"></span></strong></h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <hr style="border:1px dashed #dddddd;">
                        <button type="button" class="btn btn-primary btn-block">Submit all and finish</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop