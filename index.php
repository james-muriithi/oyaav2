<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Title -->
    <title>Oyaa | Buy & Sell Tickets EA </title>
    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="plugins/sweetalert/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrapValidator.css">
    <link rel="stylesheet" type="text/css" href="css/nice-select.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <!-- Core Stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link href="style.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet">
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="dorne-load"></div>
    </div>
    <!-- ***** Search Form Area ***** -->
    <div class="dorne-search-form d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-close-btn" id="closeBtn">
                        <i class="pe-7s-close-circle" aria-hidden="true"></i>
                    </div>
                    <form action="#" method="get">
                        <input type="search" name="caviarSearch" id="search" placeholder="Search Your Desire Destinations or Events">
                        <input type="submit" class="d-none" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Header Area Start ***** -->
    <header class="header_area" id="header">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg">
                        <a class="navbar-brand" href="index.php"><img src="img/core-img/oyaa.png" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dorneNav" aria-controls="dorneNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                        <!-- Nav -->
                        <div class="collapse navbar-collapse" id="dorneNav">
                            <ul class="navbar-nav mr-auto" id="dorneMenu">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Explore <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="explore.html">Explore</a>
                                        <a class="dropdown-item" href="listing.html">Listing</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact</a>
                                </li>
                            </ul>
                            <!-- Search btn -->
                            <div class="dorne-search-btn">
                                <a id="search-btn" href="#"><i class="fa fa-search" aria-hidden="true"></i> Search</a>
                            </div>
                            <!-- Signin btn -->
                            <div class="dorne-signin-btn">
                                <a href="#">Sign in or Register</a>
                            </div>
                            <!-- Add listings btn -->
                            <div class="dorne-add-listings-btn">
                                <a href="contact.html" class="btn dorne-btn">+ Add Event</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    <!-- ***** Welcome Area Start ***** -->
    <section class="dorne-welcome-area bg-img bg-overlay" style="background-image: url(img/bg-img/hero-1.jpeg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="hero-content">
                        <h4>Get tickets to all your favorite your events</h4>
                    </div>
                    <!-- Hero Search Form -->
                    <div class="hero-search-form">
                        <!-- Tabs -->
                        <div class="nav nav-tabs" id="heroTab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-places-tab" data-toggle="tab" href="#nav-places" role="tab" aria-controls="nav-places" aria-selected="true">Search</a>
                        </div>
                        <!-- Tabs Content -->
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-places" role="tabpanel" aria-labelledby="nav-places-tab">
                                <h6>What are you looking for?</h6>
                                <form action="#" method="get">
                                    <input type="search" name="caviarSearch" id="search" placeholder="Search for an Event"> &nbsp &nbsp
                                    <select class="custom-select">
                                        <option selected>Location</option>
                                        <option value="1">New York</option>
                                        <option value="5">London</option>
                                    </select>
                                    <select class="custom-select">
                                        <option selected>All Catagories</option>
                                        <option value="1">Catagories 1</option>
                                        <option value="2">Catagories 2</option>
                                    </select>
                                    <button type="submit" class="btn dorne-btn"><i class="fa fa-search pr-2" aria-hidden="true"></i> Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Social Btn -->
        <div class="hero-social-btn">
            <div class="social-title d-flex align-items-center">
                <h6>Follow us on Social Media</h6>
                <span></span>
            </div>
            <div class="social-btns">
                 <a href="https://www.twitter.com/oyaa_inc-105207630945503/"><i class="fa fa-twitter" aria-haspopup="true"></i></a>
                <a href="https://www.facebook.com/Oyaa-Inc-105207630945503/"><i class="fa fa-facebook" aria-haspopup="true"></i></a>
                <a href="#"><i class="fa fa-linkedin" aria-haspopup="true"></i></a>
                <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
               
            </div>
        </div>
    </section>
    <!-- ***** Welcome Area End ***** -->
    <!-- ***** Catagory Area Start ***** -->
    <section class="dorne-catagory-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="all-catagories">
                        <div class="row">
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.2s">
                                    <div class="catagory-content">
                                        <img src="img/core-img/icon-2.png" alt="">
                                        <a href="#">
                                            <h6>Events</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.4s">
                                    <div class="catagory-content">
                                        <img src="img/core-img/icon-1.png" alt="">
                                        <a href="#">
                                            <h6>Locations</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.6s">
                                    <div class="catagory-content">
                                        <img src="img/core-img/icon-3.png" alt="">
                                        <a href="#">
                                            <h6>About</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.8s">
                                    <div class="catagory-content">
                                        <img src="img/core-img/icon-5.png" alt="">
                                        <a href="#">
                                            <h6>Gallery</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="1s">
                                    <div class="catagory-content">
                                        <img src="img/core-img/icon-4.png" alt="">
                                        <a href="#">
                                            <h6>How it Works</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Catagory Area End ***** -->
    <main class="col-md-12 m-t-15">
        <!-- campaigns -->
        <div id="campaigns" class="campaigns">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 p-3">
                        <div class="row">
                            <!-- New card -->
                            <div class="col-sm-6 col-md-4 col-lg-3 ">
                                <div class="card">
                                    <img class="card-img-top" src="img/core-img/NIGHT.jpg" alt="Card image" height="60%">
                                    <div class="card-body">
                                        <h4 class="card-title">Kalenjin Night</h4>
                                        <div class="ribbon ribbon-left ribbon-shadow ribbon-color-danger uppercase"><i class="fa fa-calendar"></i> 22 Nov, 2019</div>
                                         
                                        <p class="card-text">
                                            Turn up to whine & jiggle to the fast paced beat of the Kalenjin
                                         
                                        </p>
                                        <div class="event-latest-details">
                                            <a class="author" href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 6.00pm - 6.00am</a>
                                            <a class="comments" href="#"> <i class="fa fa-map-marker" aria-hidden="true"></i> Club Azura</a>
                                        </div>
                                        <div class="mx-auto float-left">
                                            <a href="info.html" class="btn btn-success">Learn More</a>
                                        </div>
                                        <div class="mx-auto" style="float: right;">
                                            <button href="#" class="btn  btn-participate" data-toggle="modal" data-target="#buy-now" id="1">Buy Ticket</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of card -->
                            <!-- New card -->
                            <div class="col-sm-6 col-md-4 col-lg-3 ">
                                <div class="card">
                                    <img class="card-img-top" src="img/event3.png" alt="Card image" height="60%">
                                    <div class="card-body">
                                        <h4 class="card-title">KALASHA AWARDS</h4>
                                        <div class="ribbon ribbon-left ribbon-shadow ribbon-color-danger uppercase"><i class="fa fa-calendar"></i> 4<sup>th</sup> Oct, 2019</div>
                                        <p class="card-text">
                                            KALASHA AWARDS 2020   <span class="text-danger">Booking closed!</span>
                                        </p>
                                        <div class="event-latest-details">
                                            <a class="author" href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 10.00Pm - 3.00Am</a>
                                            <a class="comments" href="#"> <i class="fa fa-map-marker" aria-hidden="true"></i> NAIROBI, KENYA</a>
                                        </div>
                                        <div class="mx-auto" style="float: left;">
                                            <button href="#" class="btn  btn-success">Learn More</button>
                                        </div>
                                        <div class="mx-auto" style="float: right;">
                                            <button href="#" class="btn  btn-participate">Buy Ticket</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of card -->
                           <!-- New card -->
                            <div class="col-sm-6 col-md-4 col-lg-3 ">
                                <div class="card">
                                    <img class="card-img-top" src="img/event5.jpg" alt="Card image" height="60%">
                                    <div class="card-body">
                                        <h4 class="card-title">COLORWARS 2019</h4>
                                        <div class="ribbon ribbon-left ribbon-shadow ribbon-color-danger uppercase"><i class="fa fa-calendar"></i> 19 Oct, 2019</div>
                                        <p class="card-text">
                                            KERICHO COLORWARS COMING SOON. BY RJ GAMERS
                                            <span class="text-danger">Booking closed!</span>
                                        </p>
                                        <div class="event-latest-details">
                                            <a class="author" href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 10.00am - 3.00pm</a>
                                            <a class="comments" href="#"> <i class="fa fa-map-marker" aria-hidden="true"></i> KERICHO, KENYA</a>
                                        </div>
                                        <div class="mx-auto" style="float: left;">
                                            <button href="#" class="btn  btn-success">Learn More</button>
                                        </div>
                                        <div class="mx-auto" style="float: right;">
                                            <button href="#" class="btn  btn-participate">Buy Ticket</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of card -->
                            <!-- New card -->
                            <div class="col-sm-6 col-md-4 col-lg-3 ">
                                <div class="card">
                                    <img class="card-img-top" src="img/event2.jpeg" alt="Card image" height="60%">
                                    <div class="card-body">
                                        <h4 class="card-title">NEW YEARS EVE BASH</h4>
                                        <div class="ribbon ribbon-left ribbon-shadow ribbon-color-danger uppercase"><i class="fa fa-calendar"></i> 21<sup>st</sup> Sept, 2019</div>
                                        <p class="card-text">
                                           NAKURU N.Y.E BASH BY SUPA CREW KALASHA AWARDS 2020   
                                            <span class="text-danger">Booking closed!</span>
                                        </p>
                                        <div class="event-latest-details">
                                            <a class="author" href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 18.00Pm - 6.00Am</a>
                                            <a class="comments" href="#"> <i class="fa fa-map-marker" aria-hidden="true"></i> NAKURU, KENYA</a>
                                        </div>
                                        <div class="mx-auto" style="float: left;">
                                            <button href="#" class="btn  btn-success">More Info</button>
                                        </div>
                                        <div class="mx-auto" style="float: right;">
                                            <button href="#" class="btn  btn-participate">Buy Ticket</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of card -->
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- </campaigns -->
        <div>
            <!-- Modal form-->
            <div class="modal animated animated fadeInDown mode" id="buy-now" role="dialog" data-keyboard="false" data-backdrop="static">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h5>Buy Your Ticket Now!!!</h5>
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                        </div>
                        <!-- Modal Body -->
                        <div class="modal-body">
                            <p class="statusMsg"></p>
                            <form role="form" id="details-form">
                                <div class="form-group">
                                    <label for="inputName">Name</label>
                                    <input type="text" class="form-control" name="inputName" id="inputName" placeholder=" Please enter your name" value="" />
                                </div>
                                <div class="form-group">
                                    <label for="inputGender">Select Ticket</label>
                                    <select class="form-control" name="inputGender" id="inputGender">
                                        <option disabled>Ticket Type</option>
                                        <option value="S">Normal</option>
                                        <option value="VIP">VIP</option>
                                        <option value="VVIP">VVIP</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputPhone">Phone</label>
                                    <input type="text" class="form-control" name="inputPhone" id="inputPhone" placeholder="eg. 0710100100" value="" />
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail">Email</label>
                                    <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder=" username@mail.com" value="" />
                                </div>
                            </form>
                        </div>
                        <!-- Modal Footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success submitBtn" form="details-form">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end form modal -->
            <!-- payment modal -->
            <div class="modal animated animated fadeInUp" id="pay-now" role="dialog" data-keyboard="false" data-backdrop="static">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h5>Payment</h5>
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                        </div>
                        <!-- Modal Body -->
                        <div class="modal-body">
                            <p class="statusMsg"></p>
                            <form role="form" id="billingform">
                                <div class="form-group">
                                    <label for="checkoutPhone">Phone Number (Safaricom only)</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">+254</span>
                                        </div>
                                        <input type="text" class="form-control" name="checkoutPhone" id="inputPhone" placeholder="710100100" value="746792699" aria-describedby="basic-addon1" />
                                    </div>
                                    <label>We will send an mpesa payment request to this number</label>
                                </div>
                            </form>
                        </div>
                        <!-- Modal Footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary btn-back">Back</button>
                            <button href="#" class="btn checkout" form="billingform"><img style="width: 45px; display: inline; margin: -8px;" src="img/mpesa.png" class="p-r-5" form="billingform"> Lipa na Mpesa</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end confirm modal -->
            <!-- payment modal -->
            <div class="modal animated animated fadeInUp" id="print-now" role="dialog" data-keyboard="false" data-backdrop="static">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h5>Print Ticket</h5>
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                        </div>
                        <!-- Modal Body -->
                        <div class="modal-body">
                            <h3>Thank you for visiting us and making your purchase! We're glad that you found what you were looking for. It is our goal that you are always happy with what you bought from us, so please let us know if your buying experience was anything short of excellent. We look forward to seeing you again.</h3>
                        </div>
                        <!-- Modal Footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary btn-reload" data-dismiss="modal">Close</button>
                            <a href="" class="btn btn-print"><i class="fa fa-print"></i> Print Ticket</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end confirm modal -->
        </div>
    </main>
    <!-- ***** Features Events Area Start ***** -->
    <section class="dorne-features-events-area bg-img bg-overlay-9 section-padding-100-50" style="background-image: url(img/bg-img/hero-3.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <span></span>
                        <h4>Featured events</h4>
                    </div>
                </div>         
            </div>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                        <div class="feature-events-thumb">
                            <img src="img/bg-img/event-1.jpg" alt="">
                            <div class="date-map-area d-flex">
                                <a href="#">26 Nov</a>
                                <a href="#"><img src="img/core-img/NIGHT.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="feature-events-content">
                            <h5>Jazz Concert</h5>
                            <h6>Manhathan</h6>
                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra...</p>
                        </div>
                        <div class="feature-events-details-btn">
                            <a href="#">+</a>
                        </div>
                    </div>
                </div>
                
           
                <div class="col-12 col-lg-6">
                    <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig" data-wow-delay="0.3s">
                        <div class="feature-events-thumb">
                            <img src="img/bg-img/event-2.jpg" alt="">
                            <div class="date-map-area d-flex">
                                <a href="#">26 Nov</a>
                                <a href="#"><img src="img/core-img/map.png" alt=""></a>
                            </div>
                        </div>
                        <div class="feature-events-content">
                            <h5>DeeJay in the house</h5>
                            <h6>Manhathan</h6>
                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra...</p>
                        </div>
                        <div class="feature-events-details-btn">
                            <a href="#">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig" data-wow-delay="0.4s">
                        <div class="feature-events-thumb">
                            <img src="img/bg-img/event-3.jpg" alt="">
                            <div class="date-map-area d-flex">
                                <a href="#">26 Nov</a>
                                <a href="#"><img src="img/core-img/map.png" alt=""></a>
                            </div>
                        </div>
                        <div class="feature-events-content">
                            <h5>Theatre Night outside</h5>
                            <h6>Manhathan</h6>
                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra...</p>
                        </div>
                        <div class="feature-events-details-btn">
                            <a href="#">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig" data-wow-delay="0.5s">
                        <div class="feature-events-thumb">
                            <img src="img/bg-img/event-4.jpg" alt="">
                            <div class="date-map-area d-flex">
                                <a href="#">26 Nov</a>
                                <a href="#"><img src="img/core-img/map.png" alt=""></a>
                            </div>
                        </div>
                        <div class="feature-events-content">
                            <h5>Wine tasting</h5>
                            <h6>Manhathan</h6>
                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra...</p>
                        </div>
                        <div class="feature-events-details-btn">
                            <a href="#">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig" data-wow-delay="0.6s">
                        <div class="feature-events-thumb">
                            <img src="img/bg-img/event-5.jpg" alt="">
                            <div class="date-map-area d-flex">
                                <a href="#">26 Nov</a>
                                <a href="#"><img src="img/core-img/map.png" alt=""></a>
                            </div>
                        </div>
                        <div class="feature-events-content">
                            <h5>New Moon Party</h5>
                            <h6>Manhathan</h6>
                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra...</p>
                        </div>
                        <div class="feature-events-details-btn">
                            <a href="#">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig" data-wow-delay="0.7s">
                        <div class="feature-events-thumb">
                            <img src="img/bg-img/event-6.jpg" alt="">
                            <div class="date-map-area d-flex">
                                <a href="#">26 Nov</a>
                                <a href="#"><img src="img/core-img/map.png" alt=""></a>
                            </div>
                        </div>
                        <div class="feature-events-content">
                            <h5>Happy hour at pub</h5>
                            <h6>Manhathan</h6>
                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra...</p>
                        </div>
                        <div class="feature-events-details-btn">
                            <a href="#">+</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Events Area End ***** -->
    <!-- ***** Clients Area Start ***** -->
    <div class="dorne-clients-area section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="clients-logo d-md-flex align-items-center justify-content-around">
                        <img src="img/clients-img/1.png" alt="">
                        <img src="img/clients-img/2.png" alt="">
                        <img src="img/clients-img/3.png" alt="">
                        <img src="img/clients-img/4.png" alt="">
                        <img src="img/clients-img/5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Clients Area End ***** -->
    <!-- ****** Footer Area Start ****** -->
    <footer class="dorne-footer-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-md-flex align-items-center justify-content-between">
                    <div class="footer-text">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                    <div class="footer-social-btns">
                         <a href="https://www.twitter.com/oyaa_inc-105207630945503/"><i class="fa fa-twitter" aria-haspopup="true"></i></a>
                <a href="https://www.facebook.com/Oyaa-Inc-105207630945503/"><i class="fa fa-facebook" aria-haspopup="true"></i></a>
                        <a href="#"><i class="fa fa-linkedin" aria-haspopup="true"></i></a>
                        <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                        
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ****** Footer Area End ****** -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>

    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap-4 js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/others/plugins.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>

    <script type="text/javascript" src="js/bootstrapValidator.js"></script>

    <script type="text/javascript" src="js/jquery.nice-select.js"></script>
    
    <script type="text/javascript" src="plugins/sweetalert/sweetalert.min.js"></script>

    <script type="text/javascript" src="js/script.js"></script>
    <?php
if (isset($_SESSION['error'])) { 
    echo '<script type="text/javascript">console.log("hello");swal({
                title: "Sorry!",
                text: "'.$_SESSION['error'].'", //put the error message here
                type: "error",
                confirmButtonClass: "btn btn-danger m-t-10",
                confirmButtonText: "Ok",
                closeOnConfirm: true
            })</script>';
            unset($_SESSION['error']);
}else if(isset($_SESSION['success'])){
    echo '<script type="text/javascript"> console.log("hello");swal({
                title: "Good Job!",
                text: "'.$_SESSION['success'].'", //put the error message here
                type: "success",
                confirmButtonClass: "btn btn-success m-t-10",
                confirmButtonText: "Ok",
                closeOnConfirm: true
            })</script>';
            unset($_SESSION['success']);
}

?>


    <script type="text/javascript">
    $(document).ready(function() {
        let id = 0;
        $('body').on('click', '.btn-participate', function(event) {
            id = $(this).attr('id');
        });
        $('#inputGender').niceSelect();
        $('body').on('click', '.btn-reload', function(event) {
            location.reload();
        });
        $('body').on('click', '.btn-back', function(event) {
            $('#buy-now').modal('show')
            $('#pay-now').modal('hide')
        });
        $('form#details-form').bootstrapValidator({
            // container: 'tooltip',
            message: 'This value is not valid',
            feedbackIcons: {
                valid: 'fa fa-check',
                invalid: 'fa fa-times',
                validating: 'fa fa-refresh'
            },
            fields: {
                inputName: {
                    // message: 'The email is not valid',
                    validators: {
                        //when empty it will bring this error message
                        notEmpty: {
                            message: 'Full name is required and cannot be empty'
                        },
                        //this is a regular expression to validate email
                        regexp: {
                            regexp: /^[a-zA-Z]+\s+[a-zA-Z\s]+$/,
                            message: 'Full name can only consist of alphabetical and atlest two names'
                        }
                    }
                },
                inputPhone: {
                    // message: 'The phone  number is not valid',
                    validators: {
                        notEmpty: {
                            message: 'The phone number is required and cannot be empty'
                        },
                        regexp: {
                            regexp: /^(0|\+?254)7(\d){8}$/,
                            message: 'Please provide a valid phone number'
                        }
                    }
                },
                inputEmail: {
                    // message: 'The email is not valid',
                    validators: {
                        //when empty it will bring this error message
                        notEmpty: {
                            message: 'The email is required and cannot be empty'
                        },
                        //this is a regular expression to validate email
                        regexp: {
                            regexp: /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i,
                            message: 'Please provide a valid email address'
                        }
                    }
                }
            },
            // what to do if the form is filled correctly
            onSuccess: function(e, data) {
                $('#buy-now').modal('hide')
                $('#pay-now').modal('show')
            }
        });
        $('form#billingform').bootstrapValidator({
            // container: 'tooltip',
            message: 'This value is not valid',
            feedbackIcons: {
                valid: 'fa fa-check',
                invalid: 'fa fa-times',
                validating: 'fa fa-refresh'
            },
            fields: {
                'checkoutPhone': {
                    validators: {
                        notEmpty: {
                            message: 'Your Phone Number is required for payment'
                        },
                        regexp: {
                            regexp: /^7(\d){8}$/,
                            message: 'Please provide a valid phone number'
                        }
                    }
                }
            },
            // what to do if the form is filled correctly
            onSuccess: function(e, data) {
                $('#pay-now .modal-footer button').css('pointer-events', 'none!important');
                let customerDetails = $('form#details-form').serialize();
                let checkoutPhone = '254' + $.trim($('input[name="checkoutPhone"]').val())
                $('<div id="loader"></div>').appendTo('form#billingform');
                $('#pay-now .modal-content').addClass('unclickable');
                $.post('pay_now.php', {
                    customerDetails: customerDetails,
                    checkoutPhone: checkoutPhone,
                    eventId: id
                }, function(data, textStatus, xhr) {
                    console.log(data);
                    data = JSON.parse(data);
                    if (Number(data.ResponseCode) == 0) {
                        swal({
                            title: "Good Job!",
                            text: "A payment request was sent to your phone. Please enter your pin to complete your payment",
                            type: "success",
                            showConfirmButton: false
                        });

                        var CheckoutRequestID = data.CheckoutRequestID;
                        var timer = setInterval(function() {
                            $.post('stk-query.php', { checkoutRequestID: CheckoutRequestID },
                                function(data, textStatus, xhr) {
                                    data = $.trim(data);
                                    console.log(data);
                                    paymentStatus = JSON.parse(data);
                                    if (paymentStatus.ResultCode) {
                                        if (Number(paymentStatus.ResultCode) != 0) {
                                            let desc = paymentStatus.ResultDesc.split(']')[1];
                                            clearInterval(timer);
                                            $('#pay-now .modal-content').removeClass('unclickable');
                                            $('#loader').remove();
                                            swal({
                                                title: "Sorry!",
                                                text: desc, //put the error message here
                                                type: "error",
                                                confirmButtonClass: "btn btn-danger",
                                                confirmButtonText: "Ok",
                                                closeOnConfirm: true
                                            })
                                        } else {
                                            clearInterval(timer);
                                            $('#pay-now .modal-content').removeClass('unclickable');
                                            $('#loader').remove();
                                            swal({
                                                title: "Hurray!",
                                                text: "Your payment was successful",
                                                type: "success",
                                                confirmButtonClass: "btn btn-success print",
                                                confirmButtonText: "Continue",
                                                closeOnConfirm: false
                                            }, function() {
                                                swal.close();
                                                $('#pay-now').modal('hide');
                                                $('.btn-print').attr('href', 'print_ticket.php?ticket=' + CheckoutRequestID);
                                                $('#print-now').modal('show');
                                            });

                                        }
                                    }
                                })
                        }, 3000);
                    } else {
                        if (typeof data == 'object') {
                            $('#pay-now .modal-content').removeClass('unclickable');
                            $('#loader').remove();
                            swal({
                                title: "Sorry!",
                                text: data.errorMessage, //put the error message here
                                type: "error",
                                confirmButtonClass: "btn btn-danger",
                                confirmButtonText: "Ok",
                                closeOnConfirm: true
                            })
                        } else {
                            $('#pay-now .modal-content').removeClass('unclickable');
                            $('#loader').remove();
                            swal({
                                title: "Apologies!",
                                text: 'An error occurred', //put the error message here
                                type: "error",
                                confirmButtonClass: "btn btn-danger",
                                confirmButtonText: "Ok",
                                closeOnConfirm: true
                            })
                        }
                    }
                });
            }
        });
    });

    function submitLoginForm() {
        var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
        var name = $('#inputName').val();
        var email = $('#inputEmail').val();
        var password = $('#inputPasword').val();

        if (email.trim() == '') {
            alert('Please enter your email.');
            $('#inputEmail').focus();
            return false;
        } else if (email.trim() != '' && !reg.test(email)) {
            alert('Please enter valid email.');
            $('#inputEmail').focus();
            return false;
        } else if (password.trim() == '') {
            alert('Please enter your current town.');
            $('#inputMessage').focus();
            return false;
        } else {
            $.ajax({
                type: 'POST',
                url: 'submit_form.php',
                data: 'loginFrmSubmit=1&email=' + email + '&password=' + password,
                beforeSend: function() {
                    $('.submitBtn').attr("disabled", "disabled");
                    $('.modal-body').css('opacity', '.5');
                },
                success: function(msg) {
                    if (msg == 'ok') {
                        $('#inputName').val('');
                        $('#inputEmail').val('');
                        $('#inputMessage').val('');
                        $('.statusMsg').html('<span style="color:green;">Thanks for contacting us, we\'ll get back to you soon.</p>');
                    } else {
                        $('.statusMsg').html('<span style="color:red;">Some problem occurred, please try again.<br>' + msg + '</span>');
                    }
                    $('.submitBtn').removeAttr("disabled");
                    $('.modal-body').css('opacity', '');
                }
            });
        }
    }
    </script>
</body>

</html>