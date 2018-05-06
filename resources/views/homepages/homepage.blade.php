
@extends('homepages.footer')
@section('footer')
@stop
@section('contents')

@extends('homepages.header')
@section('navigation-bar')
@stop
@section('content')

  <div class="container">
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
                  <div class="col-md-7 " >
                      
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

                  <div class="col-md-2" style="margin-left: -30">
                      
                          <img src="images/170.png" width="220px" height="410px">
                    
                  </div>

        </div>
      </div>

      <!-- <div class="container ">
        <div class="row  " style="padding-top: 30px;">
          <div class="col-lg-3 ">
            
            <nav class="nav flex-column  " >
              <a class="nav-link" id="fontss" href="#"><i class="fa fa-usd" aria-hidden="true"></i> GREATE VALUE</a>
              <a class="nav-link" id="fontsss" href="#">
              We offer competitive prices on our 100 million plus product range.</a>
              
            </nav>
          </div>
          <div class="col-lg-3">
            <nav class="nav flex-column ">
              <a class="nav-link" id="fontss" href="#"><i class="fa fa-shield" aria-hidden="true"></i> Shop with Confidence</a>
              <a class="nav-link" id="fontsss" href="#">
              Our Buyer Protection covers your purchase from click to delivery.</a>
              
            </nav>
          </div>
          <div class="col-lg-3">
            <nav class="nav flex-column ">
              <a class="nav-link" id="fontss" href="#"><i class="fa fa-credit-card-alt" aria-hidden="true"></i> Safe Payment</a>
              <a class="nav-link" id="fontsss" href="#">
              Pay with the world’s most popular and secure payment methods.</a>
              
            </nav>
          </div>
          <div class="col-lg-3">
             <nav class="nav flex-column ">
              <a class="nav-link" id="fontss" href="#"><i class="fa fa-truck" aria-hidden="true"></i> LOCAL DELIVERY</a>
              <a class="nav-link" id="fontsss" href="#">
              Cheap location shipping costs, Free delivery in Phnom Penh</a>
              
            </nav>
          </div>
        </div>
      </div> -->
      <div class="container">
  <div class="row d-flex flex-row justify-content-between" style="padding-top: 30px;">

    <div class="card text-white  mb-3 width-space">
      <div class="card-header" id="fontss"><i class="fa fa-usd" aria-hidden="true"></i> GREATE VALUE</div>
      <div class="card-body" id="fontsss">
        
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
    <div class="card text-white  mb-3 width-space">
      <div class="card-header" id="fontss"><i class="fa fa-shield" aria-hidden="true"></i> Shop with Confidence</div>
      <div class="card-body" id="fontsss">
        
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
    <div class="card text-white  mb-3 width-space">
      <div class="card-header" id="fontss"><i class="fa fa-credit-card-alt" aria-hidden="true"></i> Safe Payment</div>
      <div class="card-body" id="fontsss">
        
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
    <div class="card text-white  mb-3 width-space">
      <div class="card-header" id="fontss"><i class="fa fa-truck" aria-hidden="true"></i> LOCAL DELIVERY</div>
      <div class="card-body" id="fontsss">
        
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>

  </div>
</div>


<div style="padding-top: 30px;">
  <div class="container" style="background-color: #e7e7e8; height: 30px;">LOGO COLLECTION</div>
<div class="container" style=" ">
            <div class="row ">
          
            
           
              <div class="w-100 no-gutters">     
              <img src="images/400-1.png " style="" class="rounded float-left col-md-2" alt="...">
              <img src="images/200-05.png" alt="..." class="float-right col-md-2" style="">
              <img src="images/200-04.png" alt="..." class=" float-right col-md-2" style="">
              <img src="images/200-03.png" alt="..." class="rounded float-right col-md-2" style="">
              <img src="images/200-02.png" alt="..." class="rounded float-right col-md-2" style="">

              <img src="images/200-01.png" alt="..." class="rounded float-right col-md-2" style="">
              <img src="images/200-10.png" alt="..." class="rounded float-right col-md-2" style="">
              <img src="images/200-09.png" alt="..." class="rounded float-right col-md-2" style="">
              <img src="images/200-08.png" alt="..." class="rounded float-right col-md-2" style="">
              <img src="images/200-07.png" alt="..." class="rounded float-right col-md-2" style="">
              <img src="images/200-06.png" alt="..." class="rounded float-right col-md-2" style="">
              </div>
          
        </div>
    </div>
</div>  

<div class="container" style="padding-top: 20px;">
    <div class="row ">
            <div class="no-gutters">

              <nav class="nav flex-column col-lg-2 float-left " >
                  <a class="nav-link" id="fontssa" href="#">WOMEN'S 
                    <br/>CLOTHING</a>
                  <div style="background-color: #e7e7e8; text-align: center; height: 460px;">
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

<div class="container" style="padding-top: 20px;">
    <div class="row ">
            <div class="no-gutters">

              <nav class="nav flex-column col-lg-2 float-left " >
                  <a class="nav-link" id="fontssa" href="#">WOMEN'S 
                    <br/>CLOTHING</a>
                  <div style="background-color: #e7e7e8; text-align: center; height: 460px;">
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




@stop
@stop