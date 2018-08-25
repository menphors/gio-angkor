@extends('front.homepages.header')
@section('content')
<style type="text/css">
     input[type="password"]{
        height: 35px;
        width: 100%;
    }
</style>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>

    <hr>
    <div class="container bootstrap snippet">
        <div class="row">
            <div class="col-sm-10"></div>
            <div class="col-sm-2">
                    @if(Auth::user() &&  Auth::user()->admin == 1)
                    <div class="row">
                        <a href="{{url('adminz')}}" style="color:#FFF;" class="btn btn-success">Go to Admin Panel</a>&nbsp;&nbsp;
                        <a href="{{url('auth/logout') }}" class="btn btn-danger"><i class="fa fa-sign-out"></i></a>
                    </div>
                    @else
                    <a href="{{ url('auth/logout') }}" class="btn btn-danger"><i class="fa fa-sign-out"></i></a>
                    @endif  
            </div>
        </div>
            @if(Session::has('successMsg'))
                <div class="alert alert-success"> {{ Session::get('successMsg') }}</div>
            @endif
        <div class="row">
            <div class="col-sm-3"><!--left col-->


                <div style="width:200px;height:200px;background: #EEE;border: 2px solid #FFF; border-radius: 250px">
                    <h3 style="text-align: center;">{{$user->username}}</h3>
                </div>
                </hr><br>
            </div><!--/col-3-->
            <div class="col-sm-9">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
                    <li><a data-toggle="tab" href="#messages">Order Items</a></li>
                    <li><a  href="{{ url('auth/logout') }}">Logout</a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="home">
                        {!! Form::model($user, ['route' => ['user.update', $user], 'id' => 'registrationForm', 'class' => 'form' ]) !!}

                        <div class="form-group">
                            <div class="col-xs-6">
                                {!! Form::label('first_name', null, ['class' => 'control-label']) !!}
                                {!! Form::text('first_name', null, ['id' => 'first_name', 'class' => 'form-control', 'style' => 'height: 35px']) !!}
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                {!! Form::label('last_name', null, ['class' => 'control-label']) !!}
                                {!! Form::text('last_name', null, ['id' => 'last_name', 'class' => 'form-control', 'style' => 'height: 35px']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-6">
                                {!! Form::label('Phone', null, ['class' => 'control-label']) !!}
                                {!! Form::text('tel', null, ['id' => 'tel', 'class' => 'form-control', 'style' => 'height: 35px']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-6">
                               {!! Form::label('Gender', null, ['class' => 'control-label']) !!}
                                {!! Form::text('gender', null, ['id' => 'gender', 'class' => 'form-control', 'style' => 'height: 35px']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                                {!! Form::label('Email', null, ['class' => 'control-label']) !!}
                                {!! Form::text('email', null, ['id' => 'email', 'class' => 'form-control', 'style' => 'height: 35px']) !!}
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                {!! Form::label('Address', null, ['class' => 'control-label']) !!}
                                {!! Form::text('address', null, ['id' => 'address', 'class' => 'form-control', 'style' => 'height: 35px']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                                {!! Form::label('Password', null, ['class' => 'control-label']) !!}<br>
                                {!! Form::password('password', null, ['id' => 'password', 'class' => 'form-control', 'style' => 'height: 35px']) !!}
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                {!! Form::label('Date of Birth', null, ['class' => 'control-label']) !!}<br>
                                {!! Form::date('dob', null, ['id' => 'dob', 'class' => 'form-control', 'style' => 'height: 35px']) !!}
                            </div>
                        </div>
                        {{csrf_field()}}
                        {{ method_field('PATCH') }}
                        <div class="form-group">
                            <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success" type="submit"><i
                                            class="glyphicon glyphicon-ok-sign"></i> Update
                                </button>
                                <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i>
                                    <a href="{{ url('frontend/show-product-grid') }}">Continue to Shopping</a>
                                </button>
                            </div>
                        </div>

                        {!! Form::close() !!}
                        <hr>
                    </div><!--/tab-pane-->
                    <div class="tab-pane" id="messages">
                    <h3>Your Order</h3>
                            <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">ProID</th>
                                  <th scope="col">Quantity</th>
                                  <th scope="col">Unit Price</th>
                                  <th scope="col">Sub total</th>
                                  <th scope="col">Total</th>
                                </tr>
                              </thead>
                                <tbody>
                              </tbody>
                            </table>
                    </div><!--/tab-pane-->
                </div><!--/tab-pane-->
            </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
    <div style="height: 30px;"></div>
    <script type="text/javascript">
        $(document).ready(function () {
            var readURL = function (input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('.avatar').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }


            $(".file-upload").on('change', function () {
                readURL(this);
            });
        });
    </script>
    @include('front.homepages.footer')
@stop
                                                      