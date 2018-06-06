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
        <li class="active"><a href="#">Services</a></li>
        <li><a href="Appointment.php">Appointment</a></li>
        <li><a href="Ourspecialist.php">Our Specialists</a></li>
        <li><a href="Department.php">Department</a></li>
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
<section class="section">

    <div class="container element-top-70 element-bottom-70 container-vertical-middle">
        <div class="row vertical-middle">
            <div class="col-md-8 col-md-offset-2">
                <header class="text-center element-bottom-40">
                    <h1 class="element-bottom-10 big">Our Services</h1>
                    <div class="divider-border divider-border-center element-top-10 element-bottom-10 ">
                        <div class="divider-border-inner"></div>
                    </div>
                    <p class="lead text-normal element-top-0 element-bottom-0">Here are just a few reasons why you should choose our Medically hospital urgent care clinic as your primary location for healthcare needs.</p>
                </header>
            </div>
        </div>
        <div class="list-container row text-center">
            <div class="col-md-4 total-count-6">
                <span class="service-simple-image">
                    <img src="img/medicalexam.png" class="img-responsive" alt="">
                </span>
                <h2>
                   Medical Examination
                    <small class="block element-top-10"></small>
                </h2>
                <div class="element-bottom-20"><p>The development of preventive medicine has been one of the main goals of Metropolitan Hospital since its establishment. Quality of life directly depends on prevention and discovering illnesses right at the start.</p></div>

            </div>
            <div class="col-md-4 total-count-6">
                <span class="service-simple-image">
                      <img src="img/bestdoc.png" class="img-responsive" alt="">
                </span>
                <h2>
                    Best Doctors
                    <small class="block element-top-10"></small>
                </h2>
                <div class="element-bottom-20"><p>Through Best Doctors, medical experts and treating physicians are working together in an innovative new way to ensure that patients make the right decisions and receive the right care.</p></div>

            </div>
            <div class="col-md-4 total-count-6">
                <span class="service-simple-image">
                       <img src="img/hosp.png" class="img-responsive" alt="">
                </span>
                <h2>
                    Hospital Facilities
                    <small class="block element-top-10"></small>
                </h2>
                <div class="element-bottom-20"><p>The Hospital has acquired the latest diagnostic equipment which minimizes both examination times and the amount of invasive procedures.Doctors have been supplied with cutting edge equipment.</p></div>

            </div>
            <div class="col-md-4 total-count-6">
                <span class="service-simple-image">
                     <img src="img/hosp.png" class="img-responsive" alt="">
                </span>
                <h2>
                    Alternative Treatment
                    <small class="block element-top-10"></small>
                </h2>
                <div class="element-bottom-20"><p>Some healing treatments are not part of conventional medical training. People in Asian countries like the India used to consider these treatments outside the mainstream, or alternative.</p></div>

            </div>
            <div class="col-md-4 total-count-6">
                <span class="service-simple-image">
                     <img src="img/alt.png" class="img-responsive" alt="">
                </span>
                <h2>
                    Quality of medicines
                    <small class="block element-top-10"></small>
                </h2>
                <div class="element-bottom-20"><p>Here, we consider the nature of drug targets, and by classifying known drug substances on the basis of the discussed principles we provide an estimation of the total number of current drug targets.</p></div>

            </div>
            <div class="col-md-4 total-count-6">
                <span class="service-simple-image">
                     <img src="img/medicine.png" class="img-responsive" alt="">
                </span>
                <h2>
                    Neurology Department
                    <small class="block element-top-10"></small>
                </h2>
                <div class="element-bottom-20"><p>Our neurological department is the best in India. We offer treatments with high-end technology.We are the first to offer integrated Brain SUITE , the first of its kind in Delhi.</p></div>

            </div>
        </div>
    </div>
</section>
<a id="cta-text-Kxbxy7azM" class="-es-block-anchor"></a>

<footer class="container-fluid text-center">
  <p>Copyright @ MEDICALLY|All Rights Reserved</p>
</footer>

</body>
</html>
<?php include("modal.php");    ?>




