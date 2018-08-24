

@extends('front.homepages.footer')
@section('footer')
@stop
@section('contents')

    @extends('front.homepages.header')
@section('navigation-bar')
@stop
@section('content')

    <style>

        p{
            font-size: 15px;
        }
        #row1 {
            margin-top: 20px;
        }
        #about1{
            width: 75%;
            height: 80%;
            float: right;
            margin-right: 20px;
            margin-top: 35px;
        }
        #about2{
            width: 75%;
            height: 80%;
            float: left;
            margin-left: 20px;
            margin-top: 35px;
        }

        #our_product{
            margin-left: 20px;
        }
        #row2{
            margin-top: 20px;
            background-color: #e7e7e8;
        }
        #text1{
            margin-left: 20px;
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


    </style>

    <div class="container-fluid">
        <div class="row" style="background-color: #d9534f;height: 200px" >
        <div class="col-md-12">
            <div ></div>
            <div class="centered">
                <div class="main">About Us</div>
                <div class="sub">GIO Angkor is a company in Phnom Penh that provide service sell and buy online.</div>
            </div>
        </div>

        </div>
        <div id="row1" class="row">
                <div class="col-md-6">
                    <h1 id="our_product"><b>Our Products</b></h1>
                   <p id="text1">Since the foundation, FIPLUS Khmer Co. Ltd., is the trusted service financial solution, IT consultancy by contributing to the development of solution activities through our services and value proposition.

                       We have placed value on the social in dependency and offer high-quality and specialized services. In our solution, all the team members are communicate closely with clients, have discussions from multiple perspectives and offer tailored advice and professional services.

                       We develop innovative and creative products and services that provide total communication and information solutions. Through such unrestricted discussions, we offer efficient, cost-effective and relationship-focused services.</p>
                </div>
                <div class="col-md-6">
                    <img id="about1" src="{{asset('images/our_product.jpg')}}">
                </div>
        </div>

        <div id="row2" class="row">
            <div class="col-md-6">
                <img id="about2" src="{{asset('images/about1.jpg')}}">
            </div>
            <div class="col-md-6">
                <h1 id="our_team"><b>Our Team</b></h1>
                <p id="text2">Since the foundation, FIPLUS Khmer Co. Ltd., is the trusted service financial solution, IT consultancy by contributing to the development of solution activities through our services and value proposition.

                    We have placed value on the social in dependency and offer high-quality and specialized services. In our solution, all the team members are communicate closely with clients, have discussions from multiple perspectives and offer tailored advice and professional services.

                    We develop innovative and creative products and services that provide total communication and information solutions. Through such unrestricted discussions, we offer efficient, cost-effective and relationship-focused services.</p>
            </div>

        </div>

        <div id="row1" class="row">
            <div class="col-md-6">
                <h1 id="our_product"><b>Our Partners</b></h1>
                <p id="text1">Since the foundation, FIPLUS Khmer Co. Ltd., is the trusted service financial solution, IT consultancy by contributing to the development of solution activities through our services and value proposition.

                    We have placed value on the social in dependency and offer high-quality and specialized services. In our solution, all the team members are communicate closely with clients, have discussions from multiple perspectives and offer tailored advice and professional services.

                    We develop innovative and creative products and services that provide total communication and information solutions. Through such unrestricted discussions, we offer efficient, cost-effective and relationship-focused services.</p>
            </div>
            <div class="col-md-6">
                <img id="about1" src="{{asset('images/our_partner.jpg')}}">
            </div>
        </div>


    </div>

@stop
@stop