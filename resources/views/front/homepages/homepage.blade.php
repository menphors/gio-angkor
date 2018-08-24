
@extends('front.homepages.footer')

@section('contents')

@extends('front.homepages.header')
@section('navigation-bar')
@stop
@section('content')
<div class="container-fluid" style="background-color: #bf1e2e;height: 3px;margin-top: -1px">

</div>
<div class="container-fluid" style="background-color: #f3f3f4">
  <div class="container" style="background-color: #e7e7e8">
        <div class="row ">
            <div class="col-md-3" id="menu">
                <ul class="" id="color-main01" >
                  <li>
                    <a href="#"><i class="fa fa-home fa-fw"></i> Women's Clothing</a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-list-alt fa-fw"></i> Man's Clothing</a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-file-o fa-fw"></i> Phone & Accessories</a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Computer & Office</a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-table fa-fw"></i> Consumer Electonics</a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-tasks fa-fw"></i> Jewelry&Watches</a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-calendar fa-fw"></i> Home & Garden,Furniture</a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-book fa-fw"></i> Bags & Shoes</a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-pencil fa-fw"></i> Toys, Kids & Baby</a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-cogs fa-fw"></i> Sports & Outdoors</a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-calendar fa-fw"></i> Health & Beauty, Hair</a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-book fa-fw"></i> Automobiles & Motorcycles</a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-pencil fa-fw"></i> Home Improvement</a>
                  </li>
                </ul>
            </div>
            <div class="col-md-7 col-sm-9" >

                      <div id="carouselExampleIndicators"   class="carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                          </ol>
                        <div class="carousel-inner imagesize">
                              <div class="carousel-item active">
                                <img class="d-block w-100" src="images/12.jpg" alt="First slide">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100" src="images/34.png" alt="Second slide">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100" src="images/45.jpg" alt="Third slide">
                              </div>

                              <div class="carousel-item">
                                <img class="d-block w-100" src="images/123321.png" alt="Four slide">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100" src="images/aa.png" alt="Five slide">
                              </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>

                  </div>

                  <div id="adv" class="col-md-2 col-sm-3">

                          <img src="images/170.jpg" width="140%" height="100%">

                  </div>

        </div>
      </div>

    <div class="container" style="margin-top: 10px">
          <div class="row justify-content-between">
              <div class="col-md-3 col-xs-6">
                  <div class="card-header" id="fontss" style="border-top-right-radius:8px;border-top-left-radius:8px"><i class="fa fa-usd" aria-hidden="true"></i> GREATE VALUE</div>
                  <div class="card-body" id="fontsss" style="border-bottom-right-radius:8px;border-bottom-left-radius:8px">
                      <p class="card-text">Some quick example text to build on the card title.</p>
                  </div>
              </div>
              <div class="col-md-3 col-xs-6">
                      <div class="card-header" id="fontss" style="border-top-right-radius:8px;border-top-left-radius:8px"><i class="fa fa-shield" aria-hidden="true"></i> SHOP AND CONFIDENCE</div>
                      <div class="card-body" id="fontsss" style="border-bottom-right-radius:8px;border-bottom-left-radius:8px">

                        <p class="card-text">Some quick example text to build on the card title.</p>
                      </div>
              </div>
              <div class="col-md-3 col-xs-6">
                      <div class="card-header" id="fontss" style="border-top-right-radius:8px;border-top-left-radius:8px"><i class="fa fa-credit-card-alt" aria-hidden="true"></i> SAFE PAYMENT</div>
                      <div class="card-body" id="fontsss" style="border-bottom-right-radius:8px;border-bottom-left-radius:8px">

                        <p class="card-text">Some quick example text to build on the card title.</p>
                      </div>
              </div>
              <div class="col-md-3 col-xs-6">
                      <div class="card-header" id="fontss" style="border-top-right-radius:8px;border-top-left-radius:8px"><i class="fa fa-truck" aria-hidden="true"></i> LOCAL DELIVERY</div>
                      <div class="card-body" id="fontsss" style="border-bottom-right-radius:8px;border-bottom-left-radius:8px">

                        <p class="card-text">Some quick example text to build on the card title.</p>
                      </div>
              </div>

  </div>
</div>
    <div class="container" style="background-color: #e7e7e8;border-top-right-radius: 10px;border-top-left-radius: 10px;margin-top: 10px">
         <div style="background-color: #e7e7e8; height: 30px;margin-top: 10px;">LOGO COLLECTION</div>
    </div>
    <div class="container">
            <div class="row ">
                         <div class="w-100 no-gutters">
                              <img id="collection" src="images/200-05.png" alt="..." class="rounded col-md-2" style="">
                              <img id="collection" src="images/200-04.png" alt="..." class="rounded float-right col-md-2" style="">
                              <img id="collection" src="images/200-05.png" alt="..." class="rounded float-right col-md-2" style="">
                              <img id="collection" src="images/200-04.png" alt="..." class="rounded float-right col-md-2" style="">
                              <img id="collection" src="images/200-03.png" alt="..." class="rounded float-right col-md-2" style="">
                              <img id="collection" src="images/200-02.png" alt="..." class="rounded float-right col-md-2" style="">
                              <img id="collection" src="images/200-01.png" alt="..." class="rounded float-right col-md-2" style="">
                              <img id="collection" src="images/200-10.png" alt="..." class="rounded float-right col-md-2" style="">
                              <img id="collection" src="images/200-09.png" alt="..." class="rounded float-right col-md-2" style="">
                              <img id="collection" src="images/200-08.png" alt="..." class="rounded float-right col-md-2" style="">
                              <img id="collection" src="images/200-07.png" alt="..." class="rounded float-right col-md-2" style="">
                              <img id="collection" src="images/200-06.png" alt="..." class="rounded float-right col-md-2" style="">
                         </div>

            </div>
    </div>
<div class="container-fluid" style="background-color: #f3f3f4">
    <div class="container" style="padding-top: 20px;">
        <div class="row ">
                <div class="no-gutters">
                  <nav class="nav flex-column col-md-2 float-left " >
                      <a class="nav-link" id="fontssa" href="#">WOMEN'S
                        <br/>CLOTHING</a>
                      <div style="background-color: #e7e7e8; text-align: center; height: 470px;">
                      <a class="nav-link"  href="#">Casual Dresses</a>
                      <a class="nav-link"  href="#">Autumn Dresses</a>
                      <a class="nav-link"  href="#">Coats & Jackets</a>
                      <a class="nav-link"  href="#">Sweaters</a>
                      <a class="nav-link"  href="#">Blouses & Shirts</a>
                      <a class="nav-link"  href="#">T-Shirts</a>
                      <a class="nav-link"  href="#">Sunglasses</a>
                      <a class="nav-link"  href="#">Intimates&Sleepwear</a>
                      <a class="nav-link"  href="#">Hair Accessories</a>
                      </div>
                    </nav>
                          <img src="images/300.png" alt="..." class=" float-left col-md-4" style="height: 550px;">
                          <img src="images/250.png " alt="..." class=" float-right col-md-2" style="height: 275px;">
                          <img src="images/400.png" alt="..." class=" float-right col-md-4" style="height: 275px;">
                          <img src="images/250.png" alt="..." class=" float-right col-md-2" style="height: 275px;">
                          <img src="images/250.png" alt="..." class=" float-right col-md-2" style="height: 275px;">
                          <img src="images/250.png" alt="..." class=" float-right col-md-2" style="height: 275px;">
                </div>
        </div>
    </div>


    <div class="container-fluid" style="background-color: #f3f3f4">
        <div class="container" style="padding-top: 20px;">
            <div class="row ">
                <div class="no-gutters">
                    <nav class="nav flex-column col-md-2 float-left " >
                        <a class="nav-link" id="fontssa" href="#">WOMEN'S
                            <br/>CLOTHING</a>
                        <div style="background-color: #e7e7e8; text-align: center; height: 470px;">
                            <a class="nav-link"  href="#">Casual Dresses</a>
                            <a class="nav-link"  href="#">Autumn Dresses</a>
                            <a class="nav-link"  href="#">Coats & Jackets</a>
                            <a class="nav-link"  href="#">Sweaters</a>
                            <a class="nav-link"  href="#">Blouses & Shirts</a>
                            <a class="nav-link"  href="#">T-Shirts</a>
                            <a class="nav-link"  href="#">Sunglasses</a>
                            <a class="nav-link"  href="#">Intimates&Sleepwear</a>
                            <a class="nav-link"  href="#">Hair Accessories</a>
                        </div>
                    </nav>
                    <img src="images/300.png" alt="..." class=" float-left col-md-4" style="height: 550px;">
                    <img src="images/250.png " alt="..." class=" float-right col-md-2" style="height: 275px;">
                    <img src="images/400.png" alt="..." class=" float-right col-md-4" style="height: 275px;">
                    <img src="images/250.png" alt="..." class=" float-right col-md-2" style="height: 275px;">
                    <img src="images/250.png" alt="..." class=" float-right col-md-2" style="height: 275px;">
                    <img src="images/250.png" alt="..." class=" float-right col-md-2" style="height: 275px;">
                </div>
            </div>
        </div>


<script>
    // function myFunction() {
    //     var x = document.getElementById("myTopnav");
    //     if (x.className === "topnav") {
    //         x.className += " responsive";
    //     } else {
    //         x.className = "topnav";
    //     }
    // }
</script>


@stop
@stop