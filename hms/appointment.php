

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

<title>Medical Appointment Form a Responsive Widget Template :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Medical Appointment Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs Sign up Web Templates, 
 Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!--fonts--> 
<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
<!--//fonts--> 
</head>
<body>
<!--background-->
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
        <li ><a href="services.php">Services</a></li>
        <li class="active"><a href="#">Appointment</a></li>
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
<h1> Medical Appointment Form </h1>
    <div class="bg-agile">
	<div class="book-appointment">
	<h2>Make an appointment</h2>
			<form action="#" method="post">
			<div class="left-agileits-w3layouts same">
			<div class="gaps">
				<p>Patient Name</p>
					<input type="text" name="Patient_Name" placeholder="" required=""/>
			</div>	
				<div class="gaps">	
				<p>Phone Number</p>
					<input type="text" name="Phone_number" placeholder="" required=""/>
				</div>
				<div class="gaps">
				<p>Email</p>
						<input type="email" name="email" placeholder="" required="" />
				</div>	
				<div class="gaps">
				<p>Symptoms</p>
						<textarea name="Symptoms" placeholder="" required="" ></textarea>
				</div>
			</div>
			<div class="right-agileinfo same">
			<div class="gaps">
				<p>Select Date</p>		
						<input  id="datepicker1" name="Select_date" type="text" value="" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
			</div>
			<div class="gaps">
				<p>Department</p>	
					<select class="form-control" name="Department">
						<option></option>
						<option>Dental Care</option>
						<option>Cardiac Surgery</option>
						<option>Neurology</option>
						<option>Eye Care</option>
						<option>Ear Center</option>
						<option>Emergency</option>
						<option>Blood Bank</option>
					</select>
			</div>
			<div class="gaps">
				<p>Gender</p>	
					<select class="form-control" name="Gender">
						<option></option>
						<option>Male</option>
						<option>Female</option>
					</select>
			</div>
			<div class="gaps">
				<p>Time</p>		
					<input type="text" id="timepicker" name="Time" class="timepicker form-control" value="">	
			</div>
			</div>
			<div class="clear"></div>
						  <input type="submit" value="Make an appointment" name="appointment">
			</form>
		</div>
   </div>
   <?php
if(isset($_POST["appointment"]))   {    
$Patient_Name=$_POST["Patient_Name"];$Phone_number=$_POST["Phone_number"];$email=$_POST["email"];
$Symptoms=$_POST["Symptoms"];$Select_date=$_POST["Select_date"];$Department=$_POST["Department"];
$Gender=$_POST["Gender"];$Time=$_POST["Time"];

$conn=mysqli_connect("localhost","root","","hospital");
mysqli_query($conn,"insert into `appointment`(`Patient_Name`,`Phone_number`,`email`,`Symptoms`,`Select_Date`,`Department`,`Gender`,`Time`) 
VALUES('$Patient_Name','$Phone_number','$email','$Symptoms','$Select_date','$Department','$Gender','$Time')");
                                     
                                     
                                     }       

?>
 
   <!--copyright-->
			<div class="copy w3ls">
		       <p>Copyright @ MEDICALLY|All Rights Reserved </p>
	        </div>
		<!--//copyright-->
	

</body>
</html>
  <?php
if(isset($_POST["submit"]))   {    
$Patient_Name=$_POST["Patient_Name"];$Phone_Number=$_POST["Phone_Number"];$Email=$_POST["Email"];
$Symptoms=$_POST["Symptoms"];$Select_Date=$_POST["Select_Date"];$Department=$_POST["Department"];
$Gender=$_POST["Gender"];$Time=$_POST["Time"];

$conn=mysqli_connect("localhost","root","","hospital");
mysqli_query($conn,"insert into `Submit`(`Patient_Name`,`Phone_Number`,`Email`,`Symptoms`,`Select_Date`,`Department`,`Gender`,`Time`) 
VALUES('$Patient_Name','$Phone_Number','$Email','$Symptoms','$Select_Date','$Department','$Gender','$Time')");
                                     
                                     
                                     }       

?>
<?php include("modal.php");    ?>
