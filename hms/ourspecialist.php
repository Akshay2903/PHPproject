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
        <li class="active"><a href="#">Our Specialists</a></li>
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
<a id="team" class="-es-block-anchor"></a>
<section class="section">

    <div class="container element-top-70 element-bottom-70 container-vertical-middle" >
        <div class="row vertical-middle">
            <div class="col-md-8 col-md-offset-2">
                <header class="text-center element-bottom-40">
                    <h1 class="element-bottom-10 big">Our Doctors</h1>
                    <div class="divider-border divider-border-center element-top-10 element-bottom-10 ">
                        <div class="divider-border-inner"></div>
                    </div>
                    <p class="lead text-center center  text-normal element-top-0 element-bottom-0">Hospital Medicallly offers you and your family a variety of services, whether it’s urgent care services or a quick check-up.</p>
                </header>
            </div>
        </div>
        <div class="row staff-list-container list-container">
            <div class="figure total-count-8 col-md-3 fade-in element-bottom-40 figcaption-bottom text-left image-effect-zoom-in">
                <div class="figure-image">
                   <img src="imf/d11.jpg" class="img-responsive" alt="">
                    <div class="figure-overlay">
                        <div class="figure-overlay-container">
                            <div class="figure-caption text-center">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="figure-caption text-left">
                    <h3 class="figure-caption-title">
                        Scott Barker
                        <span>
                            Neurosurgeon
                        </span>
                    </h3>
                    <div class="figure-caption-description">
                    A neurosurgeon is a specialist who treats diseases and conditions affecting the nervous system, which includes the brain and the peripheraxl nerves.
                    </div>
                </div>
            </div>
            <div class="figure total-count-8 col-md-3 fade-in element-bottom-40 figcaption-bottom text-left image-effect-zoom-in">
                <div class="figure-image">
                   <img src="imf/d22.jpg" class="img-responsive" alt="">
                    <div class="figure-overlay">
                        <div class="figure-overlay-container">
                            <div class="figure-caption text-center">
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="figure-caption text-left">
                    <h3 class="figure-caption-title">
                        Thomas Alexander
                        <span>
                            Dentist
                        </span>
                    </h3>
                    <div class="figure-caption-description">
                    A dentist, is a health care practitioner who specializes in the diagnosis, and treatment of diseases and conditions of the oral cavity.
                    </div>
                </div>
            </div>
            <div class="figure total-count-8 col-md-3 fade-in element-bottom-40 figcaption-bottom text-left image-effect-zoom-in">
                <div class="figure-image">
                   <img src="imf/d33.jpg" class="img-responsive" alt="">
                    <div class="figure-overlay">
                        <div class="figure-overlay-container">
                            <div class="figure-caption text-center">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="figure-caption text-left">
                    <h3 class="figure-caption-title">
                        Lily Finch
                        <span>
                            Cardiologist
                        </span>
                    </h3>
                    <div class="figure-caption-description">
                    A cardiologist is a doctor with special training and skill in finding, treating and preventing diseases of the heart and blood vessels.
                    </div>
                </div>
            </div>
            <div class="figure total-count-8 col-md-3 fade-in element-bottom-40 figcaption-bottom text-left image-effect-zoom-in">
                <div class="figure-image">
                    <img src="imf/d44.jpg" class="img-responsive" alt="">
                    <div class="figure-overlay">
                        <div class="figure-overlay-container">
                            <div class="figure-caption text-center">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="figure-caption text-left">
                    <h3 class="figure-caption-title">
                        Benjamin Bentley
                        <span>
                            Pathologist
                        </span>
                    </h3>
                    <div class="figure-caption-description">
                    A pathologist is a physician who studies body fluids and tissues, and uses laboratory tests to monitor the health of patients with chronic conditions.
                    </div>
                </div>
            </div>
            <div class="figure total-count-8 col-md-3 fade-in element-bottom-40 figcaption-bottom text-left image-effect-zoom-in">
                <div class="figure-image">
                   <img src="imf/d55.jpg" class="img-responsive" alt="">
                    <div class="figure-overlay">
                        <div class="figure-overlay-container">
                            <div class="figure-caption text-center">
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="figure-caption text-left">
                    <h3 class="figure-caption-title">
                        Brandon Reed 
                        <span>
                            Ophthalmologist
                        </span>
                    </h3>
                    <div class="figure-caption-description">
                    An ophthalmologist is a medically trained doctor who commonly acts as both physician and surgeon. he examines, diagnoses and treats diseases and injuries in and around the eye.
                    </div>
                </div>
            </div>
            <div class="figure total-count-8 col-md-3 fade-in element-bottom-40 figcaption-bottom text-left image-effect-zoom-in">
                <div class="figure-image">
                  <img src="imf/d66.jpg" class="img-responsive" alt="">
                    <div class="figure-overlay">
                        <div class="figure-overlay-container">
                            <div class="figure-caption text-center">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="figure-caption text-left">
                    <h3 class="figure-caption-title">
                        Amanda Hayes
                        <span>
                           Anaesthesiologist
                        </span>
                    </h3>
                    <div class="figure-caption-description">
An anesthesiologist or anaesthetist is a physician trained in anesthesia and perioperative medicine.
                    </div>
                </div>
            </div>
            <div class="figure total-count-8 col-md-3 fade-in element-bottom-40 figcaption-bottom text-left image-effect-zoom-in">
                <div class="figure-image">
                  <img src="imf/d77.jpg" class="img-responsive" alt="">
                    <div class="figure-overlay">
                        <div class="figure-overlay-container">
                            <div class="figure-caption text-center">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="figure-caption text-left">
                    <h3 class="figure-caption-title">
                        Donald Coleman
                        <span>
                            Urologists
                        </span>
                    </h3>
                    <div class="figure-caption-description">
                   An urologist is a medical specialist in the field of urology, which studies the Surgical diseases of Urinary system in male and female and genital system only in male.
                    </div>
                </div>
            </div>
            <div class="figure total-count-8 col-md-3 fade-in element-bottom-40 figcaption-bottom text-left image-effect-zoom-in">
                <div class="figure-image">
                    <img src="imf/d88.jpg" class="img-responsive" alt="">
                    <div class="figure-overlay">
                        <div class="figure-overlay-container">
                            <div class="figure-caption text-center">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="figure-caption text-left">
                    <h3 class="figure-caption-title">
                        Shirley King
                        <span>
                            Otologist
                        </span>
                    </h3>
                    <div class="figure-caption-description">
                  An otologist is a highly trained physician or surgeon that has special training in how to diagnose and treat illnesses and injuries related to the ears.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<a id="cta-text-Kxbxy7azM" class="-es-block-anchor"></a>

<footer class="container-fluid text-center">
  <p>Copyright @ MEDICALLY|All Rights Reserved </p>
</footer>

</body>
</html>
<?php include("modal.php");    ?>

