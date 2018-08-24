@extends('front.homepages.footer')
@section('footer')
@stop
@section('contents')

    @extends('front.homepages.header')
@section('navigation-bar')
@stop
@section('content')

<style>
        #bgimg{
            height: 100%;
        }
        .centered {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);

        }
        .main{
            color: white;
            font-size: 50px;
            text-align: center;
        }
        .sub{
            opacity: 50%;
            color: white;
            font-size: 15px;
            text-align: center;
        }
        #info{
            margin-top: 20px;
        }
        label{
            font-size: 14px;
        }

</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-md 12">
            <img id="bgimg" src="{{asset('images/background_contact.png')}}" class="img-fluid" alt="Responsive image">
            <div class="centered">
            <div class="main">Contact Us</div>
            <div class="sub">GIO Angkor is a company in Phnom Penh that provide service sell and buy online.</div>
            </div>
        </div>
    </div>
    <div class="container" id="info">
        <div class="row">
            <div class="col-md-6">
                <h1 class="text-primary">GET IN TOUCH:</h1>
                <i class="fa fa-address-card"></i> <label class="text-secondary">#134, at.118, Phsar Chas Commue, Doun Penh District, Phnom Penh </label></br></br>
                <i class="fa fa-phone"></i> <label class="text-secondary">Tel: 016 841 777</label></br></br>
                <i class="fa fa-envelope"></i> <label class="text-secondary">Email: gio.angkor@gmail.com</label>
            </div>
            <div class="col-md-6">
                <img id="contact2" src="{{asset('images/contact2.png')}}">
            </div>
        </div>
    </div>
</div>

@stop
@stop