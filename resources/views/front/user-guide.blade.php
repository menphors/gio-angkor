@extends('front.homepages.footer')
@section('footer')
@stop
@section('contents')

    @extends('front.homepages.header')
@section('navigation-bar')
@stop
@section('content')


<div class="container-fluid">
    <div class="container">
        <h1>User Guide</h1>
        <br>
        <h3>•   Register</h3>
        <p>Input:<br>
            Username<br>
            Gender<br>
            Date of Birth<br>
            Telephone<br>
            Email<br>
            Password<br>    
            Click Register
        </p>
        <img src="../picuserguide/register.PNG"/>

        <br>
        <h3>•   Log In</h3>
        <p>Input:<br>
            Email<br>
            Password<br>  
            Click Sing In
        </p>
        <img src="../picuserguide/login.PNG"/>

         <br>
        <h3>•   View Product Detail</h3>
        <p> Search Product <br>
            Click on View Detail to view Product Description

        </p>
        <img src="../picuserguide/product.PNG"/>

        <br>
        <h3>•   Product Detail</h3>
        <p>Click <b>ADD TO CARD</b> to order product

        </p>
        <img src="../picuserguide/productdetail.PNG"/>
        
        <br>
        <h3>•   Add to Card</h3>
        <p>Click <b>Checkout</b> to input Order informaiton

        </p>
        <img src="../picuserguide/add-to-card.PNG"/>

        <br>
        <h3>•   Checkout</h3>
        <p>Input:<br>
            First Name<br>
            Last Name<br>
            Phone<br>
            Email<br>
            Click <b>Next</b>
        </p>
        <img src="../picuserguide/checkout.PNG"/>

        <br>
        <h3>•   Process Order</h3>
        <img src="../picuserguide/processorder.PNG"/>

        <br>
        <h3>•   Payment</h3>
        <p>Input:<br>
            Payment Type<br>
            Payment Code<br>
            Click <b>Place Order<b> to order Successful
        </p>
        <img src="../picuserguide/payment.PNG"/>

        <br>
        <h3>•   Order Successful</h3>
        <img src="../picuserguide/ordersuccess.PNG"/>

    </div>
</div>

@stop
@stop