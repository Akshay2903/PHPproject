
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Sign-Up</h4>
      </div>
      <div class="modal-body">
       <form method="POST">
        <div class="form-group">
     <label for="email">Email address:</label>
     <input type="email" class="form-control" required="" id="email" name="email" />
        </div>
        <div class="form-group">
     <label for="password">Password:</label>
     <input type="password" class="form-control" required=""  id="password" name="password" />
        </div>
       <div class="form-group">
     <label for="name">Name:</label>
     <input type="text" class="form-control" required=""  id="name" name="name" />
        </div>
        <div class="form-group">
     <label for="contact">Contact Number:</label>
     <input type="text" class="form-control" required=""  id="contact" name="contact" />
        </div>
		 <div class="form-group">
     <label for="Blood group">Blood group:</label>
    <select class="form-control" name="bloodgp">
						<option></option>
						<option>A+</option>
						<option>A-</option>
						<option>B+</option>
						<option>B-</option>
						<option>AB+</option>
						<option>AB-</option>
						<option>O+</option>
						<option>O-</option>
					</select>
        </div>
        <div class="form-group">
     <label for="address">Address:</label>
     <textarea required=""  name="address"></textarea>
        </div>
      
      <button type="submit" name="registration" class="btn btn-danger">Submit</button>
      
       </form>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<?php
if(isset($_POST["registration"]))   {    
$email=$_POST["email"];$pass=$_POST["password"];$uname=$_POST["name"];
$contact=$_POST["contact"];$bloodgp=$_POST["bloodgp"];$address=$_POST["address"];

$conn=mysqli_connect("localhost","root","","hospital");
mysqli_query($conn,"insert into `registration`(`email`,`password`,`name`,`contact`,`bloodgp`,`address`) 
VALUES('$email','$pass','$uname','$contact','$bloodgp','$address')");
                                     
                                     
                                     }       

?>


<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Log-In</h4>
      </div>
      <div class="modal-body">
       <form method="POST">
        <div class="form-group">
     <label for="email">Email address:</label>
     <input type="email" class="form-control" required="" id="email" name="email" />
        </div>
        <div class="form-group">
     <label for="password">Password:</label>
     <input type="password" class="form-control" required=""  id="password" name="password" />
        </div>
      
      <button type="submit" name="login" class="btn btn-danger">Submit</button>
      
       </form>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>









