<!DOCTYPE html>
<html>
<head>

  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=0, shrink-to-fit=no">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link href="css/main01.css" rel="stylesheet">
  <link href="css/bootstrap-theme.min.css" rel="stylesheet">

  <script src="js/jquery.min.js" ></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
    
 <style type="text/css">
   #search{
    width: 600px;
        
   }
   #research{
    width: 300px;
   }
   .width-space{
      width: 24%;
    }
    .space-right{
      padding-right: 5px;
    }
   
 </style>
  
</head>
<body>
    <nav>
        @yield('navigation-bar')
    </nav>
    <div class="container-fluid " >
        <div class="container">
            <div class="row justify-content-between ">
                <nav class="nav col colorback no-gutters">

                    <a class="navbar-brand" href="#">
                        <img src="images/cambodia.png" width="30px" height="20px"  >
                    </a>
                    <a class="navbar-brand" href="#">
                        <img src="images/uk.png" width="30px" height="20px" >
                    </a>
                    <a class="navbar-brand mr-auto" style=" font-size:12px;color: black;" href="#">Tel: 023 222 555</a>

                    <a class="nav-link fa fa-shopping-cart text-dark Active " href="#"><i class=" fa-lg" aria-hidden="true"></i> Card <span class="badge badge-pill badge-danger" style="border: 2px solid #">10</span></a>

                    <a class="nav-link fa fa-heartbeat  text-dark" aria-hidden="true" href="#"><i class=" fa-lg" aria-hidden="true"></i> Wish List</a>

                    <a class="nav-link fa fa-lock text-dark" aria-hidden="true" href="#"><i class=" fa-lg" aria-hidden="true"></i> Sign In</a>

                    <a class="nav-link fa fa-users text-dark" aria-hidden="true" href="#"><i class="" aria-hidden="true"></i> Free Join</a>
                </nav>
            </div>
        </div>
    </div>
    <!-- Nav header end -->

    <div class="container-fluid  " style="background-color: #e7e7e8;">
        <div class="container ">
            <div class="row ">
                <div class="col-3  my-5 mx-auto"><img src="images/logogio.png" alt="logo" class="img-thumbnail" style=" height: 50px"></div>
                <div class="col-9 my-5 mx-auto" style="margin-top: -50px;">
                    <div class="input-group " style="    margin-left: -13px;    width: 852px;">
                        <input type="text" class="form-control" placeholder="Seach...">
                <span class="input-group-btn  mr-3">
                  <button class="btn btn btn-secondary dropdown" data-toggle="dropdown" type="submit">All Categries</button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  <button class="btn btn-danger" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </span>
                        <ul class="nav float-right" style="margin-right:;">
                            <li class="nav-item border border-dark border-right-0">
                                <a class="nav-link">800 million</a>
                            </li>
                            <li class="nav-item border border-dark">
                                <a class="nav-link">200.000 successful</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row help ">
            <div class=" title_box col-lg-3 " >Categories</div>
            <nav class="nav col-lg-9 " id="fonts">
                <a class="nav-link " id="grey" href="#">Export US</a>
                <a class="nav-link" id="grey" href="#">Customer consultant</a>
                <a class="nav-link" id="grey" href="#">Shoping guide</a>
                <a class="nav-link" id="grey" href="#">Customer protection</a>
                <a class="nav-link" id="grey" href="#">International transportation</a>
                <a class="nav-link" id="grey" href="#">Pricing & Checking size</a>
                <div class="linewidth"></div>
            </nav>
        </div>
    </div>
    </div>
    <section>
        @yield('content')
    </section>
<!-- Nav header -->

