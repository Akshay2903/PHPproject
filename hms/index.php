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
        <li class="active"><a href="#">Home</a></li>
        <li ><a href="about.php">About Us</a></li>
         <li ><a href="services.php">Services</a></li>
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

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/b1.jpg" alt="Image">
        <div class="carousel-caption">
          <h1>WELCOME TO HOSPITAL </h3>
          
        </div>      
      </div>

      <div class="item">
        <img src="img/b4.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>
Good health and good sense are two of life's greatest blessings.</h3>

        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
<div class="container">    
<div class="jumbotron">
    <h3>Our Latest Services</h3> 
    <div class="row">
    <div class="col-sm-3">
      <img src="images/EC1.jpg"text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <label><a href="http://www.anandhospital.com/emergency-medical-services/" target="_blank">Emergency Care</a> </label>
    </div>
    <div class="col-sm-3"> 
      <img src="img/21.png" text="IMAGE"class="img-responsive" style="width:100%" alt="Image">
      <label><a href="http://www.anandhospital.com/blood-bank/" target="_blank">Blood Bank</a></label>   
    </div>
    <div class="col-sm-3">
      <img src="images/cardiology1.jpg"text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <label>Cardiac Surgery</label>
    </div>
    <div class="col-sm-3"> 
      <img src="img/247.png"text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <label>Call Center 24/7</label>
    </div>
    
 
  
    
  </div>
</div> 

</div><br>
<footer>
<div class="col-md-6 col-sm-6 col-xs-6 one bottm-grid">
  <h1>Medically</h1>
  <ul>
  <li><a href="http://localhost/myproject/about.php" target="_blank">About Us</a></li>
  <li><a href="http://localhost/myproject/Services.php" target="_blank">Our Services</a></li>
  <li><a href="http://localhost/myproject/Appointment.php" target="_blank">Take Appointment</a></li>
  </ul>
  <p>Contact information: <a href="mailto:someone@example.com">Medically2903@gmail.com</a>.</p>
  </div>
</footer>


<footer class="container-fluid text-center">
  <p>Copyright @ MEDICALLY|All Rights Reserved</p>
</footer>

</body>
</html>
<?php include("modal.php");    ?>





