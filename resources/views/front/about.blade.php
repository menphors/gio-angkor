

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
                   <p id="text1">At GIO Angkor, we all come to work every day because we want to solve the biggest problem in Ecommerce. Everyone is guessing. Uers don’t know what apps to build, how to monetize them, or even what to price them at. Advertisers & brands don’t know where their target users are, how to reach them, or even how much they need to spend in order to do so. Investors aren’t sure which apps and genres are growing the quickest, and where users are really spending their time (and money).<br>

                    Throughout the history of business, people use data to make more informed decisions. Our mission at Apptopia is to make the app economy more transparent. Today we provide the most actionable mobile app data & insights in the industry. We want to make this data available to as many people as possible (not just the top 5%).</p>
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
                <p id="text2">Today, people embrace companies with the customer experiences that best meet their needs. Huge transforms companies by designing these best-in-class experiences, driven by strong creative and rooted in the technology, data, and organizational strategy required for operational excellence. We combine these capabilities into a single solution, creating unified brand experiences that change industries and foster meaningful relationships with users. This user-centric approach has made us the fastest-growing agency of the past decade.</p>
            </div>

        </div>

        <div id="row1" class="row">
            <div class="col-md-6">
                <h1 id="our_product"><b>Our Design Website</b></h1>
                <p id="text1">Expert Designers and Developers trained in the creative and digital industry who offer a bespoke, professional and trustworthy service.
                We are a Web Design Studio based in Manchester with an outstanding reputation for quality, bespoke designs across all digital campaigns - including eCommerce web design and responsive website design.

                With over a decade of experience, Shape is a energetic, fresh and vibrant team of eight offering creative talent, industry knowledge and extremely high standards. All of our team members have degrees in both Graphic Design and Web Design.

                We work with Sole Traders and ambitious Start Up Businesses through to large global organisations such as Blackberry, Selfridges and Harvey Nichols, so we can tailor our services to suit your needs.</p>
            </div>
            <div class="col-md-6">
                <img id="about1" src="{{asset('images/our_partner.jpg')}}">
            </div>
        </div>


    </div>

@stop
@stop