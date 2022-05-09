<?php
if ( isset( $_POST['submit'] ) ) {
    $to = 'alisajjad251992@gmail.com';
    $pick_up_location = $_POST["pick-up-location"];
    $email = $_POST["email"];
//$text= $_POST["message"];
    $pick_up_date = $_POST["pick-up-date"];
    $car_type = $_POST["chose-car"];
    $return_date = $_POST["return-date"];
    $comment = $_POST["comment"];
    $subject="booking a car";


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

    $message = '<table style="width:100%">
        <tr>
        <td>Email: ' . $email . '</td>
        </tr>
        
        <tr><td>Pick up location: ' . $pick_up_location . '</td></tr>
        <tr><td>Pick up date: ' . $pick_up_date . '</td></tr>
        <tr><td>Return Date: ' . $return_date . '</td></tr>
        <tr><td>Choose Car: ' . $car_type . '</td></tr>
        <tr><td>Comment box: ' . $comment . '</td></tr>
        
    </table>';
    ini_set('smtp_port',587);
    $retval = mail($to,$subject, $message, $headers);
    if ( $retval == true) {
        echo 'Your message has been sent.We will contact you soon. Thank you for contact us';
    } else {
        echo 'failed';
    }
}
if ( isset( $_POST['reserve'] ) ) {
    $to = 'alisajjad251992@gmail.com';
    $from = $_POST["from"];
    $email = $_POST["emails"];
//$text= $_POST["message"];

    $drop_of = $_POST["drop-of"];
    $pickup = $_POST["pickup"];
    $return_able = $_POST["return-able"];
    $adults = $_POST["adults"];


    $subject="Holidays Planning";


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

    $message = '<table style="width:100%">
        <tr>
        <td>Email: ' . $email . '</td>
        </tr>
        
        <tr><td>Pick up location: ' . $from . '</td></tr>
        <tr><td>Destination: ' . $drop_of . '</td></tr>
        <tr><td>Pick up Date: ' . $pickup . '</td></tr>
        <tr><td>Return Date: ' . $return_able . '</td></tr>
        <tr><td>Adults: ' . $adults . '</td></tr>
        
        
        
    </table>';
    ini_set('smtp_port',587);
    $answer = mail($to,$subject, $message, $headers);
    if ( $answer == true) {
        echo 'Your message has been sent.We will contact you soon. Thank you for contact us';
    } else {
        echo 'failed';
    }
}
?>

<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bs/css/bootstrap.min.css">
    <link rel="stylesheet" href="bs/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="bs/js/js/src/carousel.js">



    <title> U&A Travels</title>
    <link rel="stylesheet" href="fypstyle.css">
</head>

<body class="dark-color">

<nav class="navbar navbar-expand-md dark-color navbar-dark">
    <a class="navbar-brand" href="#"><img src="images/logo%20(2).png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto active">
            <li class="nav-item hover_edit">
                <a class="nav-link" href="server.php">Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item  hover_edit">
                <a class="nav-link" href="vehicle.HTML">Vehicles</a>
            </li>
            <li class="nav-item  hover_edit">
                <a class="nav-link" href="services.html">Services</a>
            </li>
            <li class="nav-item  hover_edit">
                <a class="nav-link" href="aboutus.html">About us</a>
            </li>
            <li class="nav-item  hover_edit">
                <a class="nav-link" href="contact.html">Contact</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Header -->
<header class="bg-dark py-5 container mb-5 col-md-12">
    <div class="row">
        <div class="col-md-8 ">
            <div id="slides" class="carousel slide" data-ride="carousel">
                <ul class="carousel-indicators">
                    <li data-target="#slides" data-slide-to="0" class="active">
                    </li>
                    <li data-target="#slides" data-slide-to="1">
                    </li>
                    <li data-target="#slides" data-slide-to="2">
                    </li>
                    <li data-target="#slides" data-slide-to="3">
                    </li>
                    <li data-target="#slides" data-slide-to="4">
                    </li>
                    <li data-target="#slides" data-slide-to="5">
                    </li>
                    <li data-target="#slides" data-slide-to="6">
                    </li>
                    <li data-target="#slides" data-slide-to="7">
                    </li>

                </ul>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="img-fluid" src="images/civic%20s.jpg">
                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid" src="images/corolla%20s.jpg">
                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid" src="images/brvs.jpg">
                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid" src="images/revos.jpg">
                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid" src="images/prados.jpg">
                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid" src="images/v8s.jpg">
                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid" src="images/s%20classs.jpg">
                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid" src="images/7%20seriess.jpg">
                    </div>


                </div>
                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#slides" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#slides" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>

            </div>
        </div>
        <div class="col-lg-4 col-md-4 banner-right">
            <div class="tabulation animate-box">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" >
                            <a class="nav-link active  form-bgcolor" id="rent-tab" data-toggle="tab" href="#rent" role="tab" aria-controls="rent" aria-selected="true">Rent a Vehicle</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link form-bgcolor" id="holiday-tab" data-toggle="tab" href="#holiday" role="tab" aria-controls="holiday" aria-selected="true">Holidays</a>
                        </li>
                    </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="rent" role="tabpanel" aria-labelledby="rent-tab">
                        <div class="book-a-car p-2 ">
                            <form action="server.php" method="post">
                                <!--== Pick Up Location ==-->
                                <div class="pickup-locations  ">
                                    <h6>PICK-UP LOCATION:</h6>

                                        <input id="location" type="text" placeholder="Enter Pickup Location" name="pick-up-location" />

                                </div>
                                <!--== Pick Up Location ==-->

                                <!--== Pick Up Date ==-->
                                <div class="pick-up-dates  ">
                                    <h6>PICK-UP DATE:</h6>
                                    <input id="startDate" type="date" placeholder="Pick Up Date" name="pick-up-date" />

                                    <div class="return-cars ">
                                        <h6>Return DATE:</h6>
                                        <input id="endDate" type="date" placeholder="Return Date" name="return-date" />
                                    </div>
                                    <div class="email ">
                                        <h6>Email:</h6>
                                        <input id="email" type="text" placeholder="Email Address" name="email" />
                                    </div>

                                </div>
                                <!--== Pick Up Location ==-->

                                <!--== Car Choose ==-->
                                <div class="choose-car-type ">
                                    <h6>CHOOSE CAR TYPE:</h6>
                                    <select class="custom-select" name="chose-car">
                                        <option selected>Select</option>
                                        <option value="Toyota Gli">Toyota Corolla Gli</option>
                                        <option value="Honda Civic">Honda Civic</option>
                                        <option value="Honda Brv">Honda BRV</option>
                                        <option value="BMW 7 Series">BMW 7 series</option>
                                        <option value="S class">Mercedes S-Class</option>
                                        <option value="E Class">Mercedes E-Class</option>
                                        <option value="Toyota Prado">Toyota Prado</option>
                                        <option value="Land Cruiser V8">Toyota Land Cruiser</option>
                                        <option value="Toyota Coaster">Toyota Coaster</option>
                                        <option value="Toyota Grand Cabin">Toyota Grand Cabin</option>
                                        <option value="Honda City">Honda City</option>
                                        <option value="Suzuki Apv">Suzuki Apv</option>

                                    </select>
                                </div>
                                <div class="comment ">
                                    <h6>Comment:</h6>
                                    <input id="comment" type="text" placeholder="Any Comment" name="comment" onfocus="this.placeholder=''" onblur="this.placeholder='Comment'" />
                                </div>
                                <div class="book-button text-center">
                                    <button class="book-now-btn" name="submit">Book Now</button>
                                </div>

                                <!--== Car Choose ==-->


                            </form>
                        </div>
                    </div>


                    <div class="tab-pane fade" id="holiday" role="tabpanel" aria-labelledby="holiday-tab">
                        <form class="book-a-car p-2 form-wrap" action="server.php" method="post">
                            <div class="From ">
                                <h6>Pick-up Location:</h6>
                                <input id="From" type="text" placeholder="From" name="from" onfocus="this.placeholder=''" onblur="this.placeholder='From'" />
                            </div>

                            <div class="destination ">
                                <h6>Destination:</h6>
                                <input id="destinations" type="text" placeholder="Drop location" name="drop-of" onfocus="this.placeholder=''" onblur="this.placeholder='destinations'" />
                            </div>

                            <div class="pick-up-dates ">
                                <h6>PICK-UP DATE:</h6>
                                <input id="startDate" type="date" placeholder="Pick Up Date" name="pickup" onfocus="this.placeholder=''" onblur="this.placeholder='Start'" />
                            </div>

                            <div class="return-cars ">
                                <h6>Return Date:</h6>
                                <input id="endDates" type="date" placeholder="Return Date" name="return-able" onfocus="this.placeholder=''" onblur="this.placeholder='Returns'" />
                            </div>

                            <div class="Adults ">
                                <h6>Adults:</h6>
                                <input type="number" min="1" max="20" name="adults" placeholder="Adults " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Adults '"/>
                            </div>

                            <div class="emails ">
                                <h6>Email:</h6>
                                <input id="emails" type="text" placeholder="Email Address" name="emails" />
                            </div>
                            <div class="form-check form-check-inline ">
                                <input class="form-check-input" type="radio" name="radio" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">Tour-Guider</label>
                            </div>



                            <div class="book-button text-center">
                                <button class="book-now-btn" name="reserve">Book Reservation</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</header>
<!-- Page Content -->
<div class="container">
    <div class="row">
        <!-- Section Title Start -->
        <div class="col-lg-12 mb-4">
            <div class="section-title text-white text-center">
                <h2>Our Services</h2>
                <span class="title-line"><i class="fa fa-car"></i></span>

            </div>
        </div>
        <!-- Section Title End -->
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <img class="card-img-top" src="images/rent%20a%20car.jpg"alt="">
                <div class="card-body">
                    <h4 class="card-title">Rent a Car</h4>
                    <p class="card-text">U&A travels provide online car rental and trip management facility to their customers. Customers can hire different type of vehicle for pick and drop, business meetings, and many other purposes. Customer can also book online their hotels and also hire tour operators for their trips.</p>
                </div>
                <div class="book-button text-center">
                    <button class="book-now-btn mb-3">Book Now</button>
                </div>

            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <img class="card-img-top" src="images/trip.jpg" alt="">
                <div class="card-body">
                    <h4 class="card-title">Holidays Trip planing</h4>
                    <p class="card-text">This website is very helpful for almost all type of customer. Whoever want to hire vehicle or tour operator or plan their trips according to their requirements can get a lot of benefits from this website. Due to this website company is just step away from customer.  </p>
                </div>
                <div class="book-button text-center">
                    <button class="book-now-btn mb-3">Book Now</button>
                </div>

            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <img class="card-img-top" src="images/guider.jpg" alt="">
                <div class="card-body">
                    <h4 class="card-title">Tour Guider</h4>
                    <p class="card-text">You Can hire Tour guider for betterment of your trip.</p>
                </div>
                <div class="book-button text-center">
                    <button class="book-now-btn mb-3">Book Now</button>
                </div>

            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <img class="card-img-top" src="images/online.jpg" alt="">
                <div class="card-body">
                    <h4 class="card-title">Online Booking</h4>
                    <p class="card-text">We offer you online booking just a click away through our Website or Facebook page . Selected car will be provided on your door step 24/7 365 days. We bring you experience of car rental services for more then 10 successful years in all over Pakistan.</p>
                </div>
                <div class="book-button text-center">
                    <button class="book-now-btn mb-3">Book Now</button>
                </div>

            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <img class="card-img-top" src="images/pick.jpg" alt="">
                <div class="card-body">
                    <h4 class="card-title">Pick And Drop</h4>
                    <p class="card-text">We offer you a wide range of luxurious cars, 4x4 SUV's, people movers for pick or drop to Karachi, Lahore and Islamabad Airport.</p>
                </div>
                <div class="book-button text-center">
                    <button class="book-now-btn mb-3">Book Now</button>
                </div>

            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <img class="card-img-top" src="images/24.jpg" alt="">
                <div class="card-body">
                    <h4 class="card-title">Unlimited Miles Car Rental</h4>
                    <p class="card-text">Our long term rental service is a great way to get by owing a vehicle cause its basically a car at your disposal 24/7. All maintenance, backup car replacement, car pick up and drop offs are handled as per terms and conditions.</p>
                </div>
                <div class="book-button text-center">
                    <button class="book-now-btn mb-3">Book Now</button>
                </div>

            </div>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.row -->
<!--== Fun Fact Area Start ==-->
<section id="funfact-area" class="overlay section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-11 col-md-12 m-auto">
                <div class="funfact-content-wrap">
                    <div class="row">
                        <!-- Single FunFact Start -->
                        <div class="col-lg-4 col-md-6">
                            <div class="single-funfact">
                                <div class="funfact-icon">
                                    <i class="fa fa-smile-o"></i>
                                </div>
                                <div class="funfact-content">
                                    <p><span class="counter">550</span>+</p>
                                    <h4>HAPPY CLIENTS</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Single FunFact End -->

                        <!-- Single FunFact Start -->
                        <div class="col-lg-4 col-md-6">
                            <div class="single-funfact">
                                <div class="funfact-icon">
                                    <i class="fa fa-car"></i>
                                </div>
                                <div class="funfact-content">
                                    <p><span class="counter">250</span>+</p>
                                    <h4>CARS IN STOCK</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Single FunFact End -->

                        <!-- Single FunFact Start -->
                        <div class="col-lg-4 col-md-6">
                            <div class="single-funfact">
                                <div class="funfact-icon">
                                    <i class="fa fa-bank"></i>
                                </div>
                                <div class="funfact-content">
                                    <p><span class="counter">50</span>+</p>
                                    <h4>office in cities</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Single FunFact End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container text-white pt-4">

    <div class="row">
        <div class="col-md-8 mb-5">
            <h2>What We Do</h2>
            <hr>
            <p>U&A Travels is not just any other car rental company, IT’S A Family. Our close-to- zero accident ratio due to stringent Health, Safety and Environment (HSE) controls, coupled with efficient, cost-effective and industry best practices transport solutions, make us one of the leading car rental companies in Pakistan.</p>

            <p>We provide a variety of car rental services including, time and mileage, daily, weekly, monthly, yearly and tailored-to-choice chauffeur driven and self-driven vehicles.</p>

            <p>   Through the three decades of operations, our continuous investment in people, innovation and technology, we are a primary choice of many corporate multi-national and national concerns in Pakistan</p>

        </div>
        <div class="col-md-4 mb-5">
            <h2>Contact Us</h2>
            <hr>
            <address>
                <strong>U&A Travels</strong>

            </address>
            <address>
                <br title="Phone">Phone:</br>
                <p> 03329271420</p>
                <p>03005169585</p>
                <p>03369227443</p>

                <br title="Email">Email:</br>
                <a href="mailto:#">greatvirgo251992@hotmail.com</a>
            </address>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container -->
<!--== Footer Area Start ==-->
<section id="footer-area">
    <!-- Footer Widget Start -->
    <div class="footer-widget-area">
        <div class="container-fluid">
            <div class="row">
                <!-- Single Footer Widget Start -->
                <div class="col-md-12 text-center">

                    <nav class="navbar navbar-expand-md dark-color navbar-dark">

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarResponsive">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="server.php">Home
                                        <span class="sr-only">(current)</span>
                                    </a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="vehicle.HTML">Vehicles</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="services.html">Services</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="aboutus.html">About us</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="contact.html">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>

                </div>
                <!-- Single Footer Widget End -->


            </div>
        </div>
    </div>
    <!-- Footer Widget End -->

    <!-- Footer Bottom Start -->
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center text-secondary">
                    <p>
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved By U&A Travels<i class="fa fa-heart-o" aria-hidden="true"></i>

                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom End -->
</section>
<!--== Footer Area End ==-->



</div>
<script src="bs/js/jquery.js"></script>
<script src="bs/js/popper.js"></script>
<script type="text/javascript" src="bs/js/bootstrap.min.js"></script>
</body>
</html>