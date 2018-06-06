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
        <li class="active"><a href="#">About Us</a></li>
        <li><a href="Services.php">Services</a></li>
        <li><a href="Appointment.php">Appointment</a></li>
        <li><a href="Ourspecialist.php">Our Specialists</a></li>
        <li><a href="Department.php">Department</a></li>
		<li><a href="Blogs.php">Blogs</a></li>
       <li><a href="Contact.php">Contact</a></li>
	   
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="#" data-toggle="modal" data-target="#myModal">
       <span class="glyphicon glyphicon-user"></span> SignUp
       </a></li>
        
        <li><a href="#" data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-log-in"></span> 
        Login</a></li> </ul>
    </div>
  </div>
</nav>
<br/>  
  <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6 hidden-xs hidden-sm">
                        <img src="img/abou.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="about-des">
                            <h2>ABOUT US</h2>
                            <h4>What we are and our history</h4>
                            <p>This Hospital is open to all patients every day and provides fundamental medical care and cutting-edge medicine in a central location in Meerut. We use our superior academic knowledge to treat a wide range of health issues, taking a personal touch and utilizing highly specialized and up-to-date research.</p>
                            
                            <hr>
                            <h2>VISION & MISSION </h2>
                            <h4>Our goal and thoughts</h4>
                            <p>Our Vision is to be the regional destination provider of health care services of international standards at affordable cost via our innovative research and complex care to the states of UP and Uttarakhand.

At Hospital, we visualise to be the icon of provisions we offer in our focused clinical service lines and in related lines to create an unmatched health care delivery system.

Our patient-oriented research and clinical trials are focused to provide exemplary clinical settings that support the aim of offering health care services of international standards.</p>
                        </div>
                    </div>
                </div>
            </div><br>

<footer class="container-fluid text-center">
  <p>Copyright @ MEDICALLY|All Rights Reserved</p>
</footer>

</body>
</html>
<?php include("modal.php");    ?>









