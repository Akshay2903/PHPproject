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
        <li><a href="Department.php">Department</a></li>
		<li><a href="Blogs.php">Blogs</a></li>
        <li class="active"><a href="#">Contact</a></li>
		
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

<div class="contact" id="contact">
		<div class="container">
			<h1 class="title">CONTACT US</h1>

			<div class=" col-md-7 contact-address">
				<h3>Contact Address</h3>
				<div class="para-left">
					<p>Medically Hospital, Meerut, with bed strength of 75 beds is located at bhagpat road Meerut. A world class healthcare provider having best infrastructure, is aimed at providing conducive environment for patient care.
					</p>
				</div>
				<div class="contact-left">
					<div class="address-contact-left ">
						<h3>Address:</h3>
						<p><span class="fa fa-home"></span>Near Vidya knowledge park,bhagpat road,pachli khurd,Meerut </p>
					</div>
					<div class="address-contact-left ">
						<h3>Phones:</h3>
						<p><span class="fa fa-phone"></span> +9917488021</p>
						<p><span class="fa fa-phone"></span> +9457245960</p>
					</div>
					<div class="address-contact-left ">
						<h3>Email:</h3>
						<p><span class="fa fa-envelope"></span> <a href="mailto:info@example.com">Medically2903@gmail.com</a></p>
					</div>
				</div>
			</div>
			<div class=" col-md-5 contact-top">
				 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6981.035267320734!2d77.62128882547282!3d28.972028429140217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390c66f2117a2667%3A0x2aeeb77335221dd4!2sVidya+Knowledge+Park%2C+Panchli+Khurd%2C+Uttar+Pradesh+250002!5e0!3m2!1sen!2sin!4v1520852370023" width="500" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>   
			</div>
			
		</div>
	</div>

<footer class="container-fluid text-center">
  <p>Copyright @ MEDICALLY|All Rights Reserved </p>
</footer>

</body>
</html>
<?php include("modal.php");    ?>
