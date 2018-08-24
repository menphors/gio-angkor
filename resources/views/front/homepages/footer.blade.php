<body>
<nav>
    @yield('footer')
</nav>
</div>

<style>
    li a {
        display:block;
    }
</style>

<div class="container-fluid" style="background-color: #e7e7e8; text-align: center;" >
    <div class="row" style="background-color: #bcbdc0">
        <div class="col-md-12">

        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <h5>How to Buy</h5>
            <ul class="list-unstyled">
                <li>Making Payments</li>
                <li>Delivery Options</li>
                <li>Buyer Protection</li>
                <li>New User Guide</li>
            </ul>
        </div>

        <div class="col-lg-3">
            <h5>Menu</h5>
            <ul class="list-unstyled" id="menu">
                <li> <a href="{{ url('/frontend/term-condition') }}">Terms and Conditions</a></li>
                <li> <a href="{{ url('/frontend/contact') }}">Policy and Privacy</a></li>
                <li> <a href="{{ url('/frontend/contact') }}">Contact Us</a></li>
                <li> <a href="{{ url('/frontend/about') }}">About Us</a></li>
            </ul>
        </div>

        <div class="col-lg-3">
            <h5>Partner Promotion</h5>
            <ul class="list-unstyled">
                <li>Partnerships</li>
                <li>Affiliate Program</li>
            </ul>
        </div>

        <div class="col-lg-3">
            <h5>CONTACT</h5>
            <ul class="list-unstyled">
                <li>#134, at.118, Phsar Chas Commue, Doun Penh District, Phnom Penh</li>
                <li>(+855) 16 841 777</li>
                {{--<li><a href="{{ url('/frontend/contact') }}"><button type="button" class="btn btn-primary">Contact Us</button></a></li>--}}
            </ul>
        </div>
    </div>
</div>


<div class="col-md-12" style="background-color: #f9fafb;">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-6">Copyright © 2018 Gio-Angkor. All Rights Reserved.</div>
        </div>
    </div>
</div>
<section>
    @yield('contents')
</section>
