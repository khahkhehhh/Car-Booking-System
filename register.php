<?php include 'headermain.php';?>


<div class="container">
	
<br>
<form method="POST" action="registerprocess.php">
  <fieldset>
    <legend>Register Account</legend>
    <div class="form-group row">
     
    


    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">IC Number</label>
      <input type="text" name="fic" class="form-control" id="exampleInputPassword1" placeholder="Enter identification card number" required>
    </div>


    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Create Password</label>
      <input type="password" name="fpwd"class="form-control" id="exampleInputPassword1" placeholder="Please create a strong password" required>
    </div>



    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Full Name</label>
      <input type="text" name="fname" class="form-control"  id="exampleInputPassword1" placeholder="Enter your full name" required>
    </div>

   
    
    <div class="form-group">
      <label for="exampleTextarea" class="form-label mt-4">Address</label>
      <textarea class="form-control" id="exampleTextarea"name="fadd" rows="3"placeholder="Enter your complete address"></textarea>
    </div>


     
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">Contact Number</label>
      <input type="text" name="fcontact" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your mobile number" required>
    </div>


    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">License Number</label>
      <input type="text" name="flno"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your valid license number" required>
    </div>



  
<br><br><br><br><br><br><br>
 <button type="submit" class="btn btn-dark">Register</button>
    <button type="reset" class="btn btn-warning">Clear Form</button>
  </fieldset>
</form>
<br><br><br><br>
</div>




<?php include 'footermain.php';?>