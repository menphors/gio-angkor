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

<div class="container-fluid" style="background-color: #e7e7e8; text-align: center; padding: 15px" >
    <div class="row">
        <div class="col-lg-3"  >
            <h5>How to Buy</h5>
            <ul class="list-unstyled">
                <li><a href="#" style="color:#000;">Delivery Options</a></li>
                <li><a href="{{url('frontend/user-guide')}}" style="color:#000;">New User Guide</a></li>
            </ul>
        </div>

        <div class="col-lg-3">
            <h5>Company</h5>
            <ul class="list-unstyled" id="menu">
                <li> <a href="{{ url('/frontend/contact') }}" style="color:#000;">Contact Us</a></li>
                <li> <a href="{{ url('/frontend/about') }}" style="color:#000;">About Us</a></li>
            </ul>
        </div>

        <div class="col-lg-3">
            <h5>Ad post rule</h5>
            <ul class="list-unstyled">
                <li> <a href="{{ url('/frontend/term-condition') }}" style="color:#000;">Terms and Conditions</a></li>
                <li> <a href="{{ url('/frontend/contact') }}" style="color:#000;">Policy and Privacy</a></li>
            </ul>
        </div>

        <div class="col-lg-3">
            <h5>CONTACT</h5>
            <ul class="list-unstyled">
                <li style="color:#000;">#134, at.118, Phsar Chas Commue, Doun Penh District, Phnom Penh</li>
                <li style="color:#000;">(+855) 16 841 777</li>
            </ul>
        </div>
    </div>
</div>


<div class="col-md-12">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-6">Copyright © 2018 Gio-Angkor. All Rights Reserved.</div>
        </div>
    </div>
</div>
<section>
    @yield('contents')
</section>
