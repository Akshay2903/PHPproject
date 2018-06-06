<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  </style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">MEDICALLY</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
       <li ><a href="index.php">Home</a></li>
        <li ><a href="about.php">About Us</a></li>
        <li><a href="Services.php">Services</a></li>
        <li><a href="Appointment.php">Appointment</a></li>
        <li><a href="Ourspecialist.php">Our Specialists</a></li>
        <li class="active"><a href="#">Department</a></li>
		<li><a href="Blogs.php">Blogs</a></li>
        <li><a href="contact.php">Contact</a></li>
		
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="#" data-toggle="modal" data-target="#myModal">
       <span class="glyphicon glyphicon-user"></span> SignUp
       </a></li>
        
        <li><a href="#" data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-log-in"></span> 
        Login</a></li></ul>
    </div>
  </div>
</nav>
<br/>  
<a id="departments" class="-es-block-anchor"></a>
<section class="section">
    <div class="container-fullwidth">
        <div class="row">
            <div class="image-banner">
                <img src="im/d0.jpg" class="img-responsive" alt="">
                <div class="image-banner-title text-light text-center">
                    <header>
                        <h1 class="text-center element-bottom-10 big">Our Departments</h1>
                        <div class="divider-border divider-border-center element-top-10 element-bottom-10 ">
                            <div class="divider-border-inner"></div>
                        </div>
                            <p class="lead element-top-10 element-bottom-20">We put all our 25 years of design experience into every project. Take a look at some of our latest work.</p>
                    </header>

                </div>
            </div>
        </div>
    </div>
</section><a id="media-image-gallery-4WRWgnqLj" class="-es-block-anchor"></a>
<section class="section">
    <div class="container element-top-70 element-bottom-70 container-vertical-middle">
        <div class="row vertical-middle">
            <div class="col-md-8 col-md-offset-2">
                <header class="text-center element-bottom-40">
                </header>
            </div>
        </div>
        <div class="list-container row text-center">
            <div class="col-md-4 total-count-6">
                <div class="figure element-top-0 element-bottom-30 fade-in from-top text-center figcaption-middle image-effect-zoom-in">
                    <div class="figure-image">
                        <img src="im/d1.jpg" class="img-responsive" alt="">
                        <div class="figure-overlay">
                            <div class="figure-overlay-container">
                                <div class="figure-caption">
                                    <h3 class="figure-caption-title">Dental Care</h3>
                                    <div class="figure-caption-description"><p>Industry leading dental care. We are the hygiene experts.</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 total-count-6">
                <div class="figure element-top-0 element-bottom-30 fade-in from-top text-center figcaption-middle image-effect-zoom-in">
                    <div class="figure-image">
                        <img src="im/d5.jpg" class="img-responsive" alt="">
                        <div class="figure-overlay">
                            <div class="figure-overlay-container">
                                <div class="figure-caption">
                                    <h3 class="figure-caption-title">Cardiac Surgery</h3>
                                    <div class="figure-caption-description"><p>We bring together leading surgeons from around the globe.</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 total-count-6">
                <div class="figure element-top-0 element-bottom-30 fade-in from-top text-center figcaption-middle image-effect-zoom-in">
                    <div class="figure-image">
                       <img src="im/d4.jpg" class="img-responsive" alt="">
                        <div class="figure-overlay">
                            <div class="figure-overlay-container">
                                <div class="figure-caption">
                                    <h3 class="figure-caption-title">Neurology</h3>
                                    <div class="figure-caption-description"><p>Our neurology department is second to none with some of the worlds leading experts.</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 total-count-6">
                <div class="figure element-top-0 element-bottom-30 fade-in from-top text-center figcaption-middle image-effect-zoom-in">
                    <div class="figure-image">
                        <img src="im/d3.jpg" class="img-responsive" alt="">
                        <div class="figure-overlay">
                            <div class="figure-overlay-container">
                                <div class="figure-caption">
                                    <h3 class="figure-caption-title">Eye Care</h3>
                                    <div class="figure-caption-description"><p>Need an eye check? Call us today. We specialise in all conditions.</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 total-count-6">
                <div class="figure element-top-0 element-bottom-30 fade-in from-top text-center figcaption-middle image-effect-zoom-in">
                    <div class="figure-image">
                       <img src="im/d2.jpg" class="img-responsive" alt="">
                        <div class="figure-overlay">
                            <div class="figure-overlay-container">
                                <div class="figure-caption">
                                    <h3 class="figure-caption-title">Ear Center</h3>
                                    <div class="figure-caption-description"><p>Subsidised hearing tests available.</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 total-count-6">
                <div class="figure element-top-0 element-bottom-30 fade-in from-top text-center figcaption-middle image-effect-zoom-in">
                    <div class="figure-image">
                       <img src="im/d6.jpg" class="img-responsive" alt="">
                        <div class="figure-overlay">
                            <div class="figure-overlay-container">
                                <div class="figure-caption">
                                    <h3 class="figure-caption-title">Emergency</h3>
                                    <div class="figure-caption-description"><p>Our emergency department operates 24/7.</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="container-fluid text-center">
  <p>Copyright @ MEDICALLY|All Rights Reserved </p>
</footer>

</body>
</html>
<?php include("modal.php");    ?>
