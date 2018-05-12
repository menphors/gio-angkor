<?php /**
 * Created by PhpStorm.
 * User: Men phors
 * Date: 4/26/2018
 * Time: 9:56 PM
 */?>
@extends('homepages.header')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/order.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/order.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.js') }}"></script>
    <style type="text/css">
        #search{
            width: 600px;

        }
        #research{
            width: 300px;
        }
        .width-space{
            width: 24%;
        }
        .space-right{
            padding-right: 5px;
        }
    </style>
</head>
<body>
<div style="height: 20px;"></div>
<div class="container">
    <div class="stepwizard col-md-offset-3">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step">
                <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                <p>Step 1</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                <p>Step 2</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                <p>Step 3</p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="col-sm-12">
        <div class="col-sm-8">
            <div class="list-group">
                <a href="#" class="list-group-item disabled">
                    Cras justo odio
                </a>
                <a href="#" class="list-group-item">
                    <form role="form" action="" method="post">
                        <div class="row setup-content" id="step-1">
                            <div class="col-xs-6 col-md-offset-3">
                                <div class="col-md-12">
                                    <h3> Step 1</h3>
                                    <div class="form-group">
                                        <label class="control-label">First Name</label>
                                        <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter First Name"  />
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Last Name</label>
                                        <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Last Name" />
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Address</label>
                                        <textarea required="required" class="form-control" placeholder="Enter your address" ></textarea>
                                    </div>
                                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                                </div>
                            </div>
                        </div>
                        <div class="row setup-content" id="step-2">
                            <div class="col-xs-6 col-md-offset-3">
                                <div class="col-md-12">
                                    <h3> Step 2</h3>
                                    <div class="form-group">
                                        <label class="control-label">Company Name</label>
                                        <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Company Name" />
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Company Address</label>
                                        <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Company Address"  />
                                    </div>
                                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                                </div>
                            </div>
                        </div>
                        <div class="row setup-content" id="step-3">
                            <div class="col-xs-6 col-md-offset-3">
                                <div class="col-md-12">
                                    <h3> Step 3</h3>
                                    <button class="btn btn-success btn-lg pull-right" type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </a>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="list-group">
                <a href="#" class="list-group-item disabled">
                    Cras justo odio
                </a>
                <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                <a href="#" class="list-group-item">Morbi leo risus</a>
                <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                <a href="#" class="list-group-item">
                    <button class="btn btn-success btn-product btn-block"><span class=""></span>Proceed to Payment</button>
                </a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@include('homepages.footer')
@stop





