@extends('homepages.header')
<!-- Nav header -->
<div class="container-fluid " >
    <div class="container ">
         
            <div class="nav ">
                       
                <a class="navbar-brand" href="#">
                    <img class="border border-secondary" src="images/cambodia.png" width="30px" height="20px">
                </a>

                <a class="navbar-brand" href="#">
                    <img class="border border-secondary" src="images/uk.png" width="30px" height="20px" >
                </a>

                <a class="navbar-brand mr-auto" style=" font-size:13px; color: black;" href="#">Tel: 023 222 555</a>

                <a class="nav-link fa fa-shopping-cart text-dark Active" href="#" style="font-size:14px;"><i class=" fa-lg" aria-hidden="true"></i> Card     <span class="badge badge-pill badge-danger" style="border: 2px solid #"> 10</span></a>
              <div class="row">
                <a class="nav-link fa fa-heartbeat  text-dark border" aria-hidden="true" href="#" style="font-size:14px;"><i class=" fa-lg" aria-hidden="true"></i> Wish List</a>

                <a class="nav-link fa fa-lock text-dark border" aria-hidden="true" href="#" style="font-size:14px;"><i class=" fa-lg" aria-hidden="true"></i> Sign In</a>

                <a class="nav-link fa fa-users text-dark border" aria-hidden="true" href="#" style="font-size:14px;"><i class="" aria-hidden="true"></i> Free Join</a>
              </div>
            </div>
                           
    </div>
</div>
<!-- Nav header end -->

<div class="container-fluid" style="background-color: #e7e7e8;">
    <div class="container">
        <div class="row align-items-center py-4">
            <div class="col-3">
                <img src="images/logogio.png" alt="Responsive image" class="img-fluid mx-auto d-block" style="width: 200px;">
            </div>
            <div class="col-6">
                <form action="" class="form-inline">
                    <div class="input-group">
                        <input type="text" class="form-control  " placeholder="search..." style="padding-right: 161px;margin-left: -16px;width: 380px;">
                        <select name="" id="" class="form-control" style="width: 140px;
}">
                            <option value="">All Categories</option>
                            <option value="">2</option>
                            <option value="">3</option>
                        </select>
                        <button class="form-control btn btn-danger fa fa-search" style="width: 42px;"></button>
                    </div>
                    
                </form>
            </div>
            <div class="col-3 text-right" style="background-color:#bcbec0;font-weight: bold; border-radius: 10px; color:#be1e2d;height: 38px;    margin-top: -14px;">
                <p style="padding-right: 23px;">800 million | 200.000 successful<br>
                    <label style="color: #FFF;font-size:9px;margin-top: -3px;padding-right: 4px;" class="text-right">of product On Amazon | Transaction through GIO Angkor</label></p>

            </div>
        </div>
    </div>
</div>

@extends('homepages.slide')



