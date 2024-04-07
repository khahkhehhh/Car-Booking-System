<?php 
include 'cbssession.php';
if(!session_id())
{
  session_start();
}
 
 //get user ID from URL
$uid =$_SESSION['uid'];

include 'headercustomer.php';
include ('dbconnect.php');



$sql = "SELECT * FROM tb_user 
        WHERE u_id='$uid' 
";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);




?>


<div class = "container">
    <br>
        <form method ="POST" action="profileprocess.php" enctype="multipart/form-data">
            <fieldset>
    <legend>User Profile</legend>
    <div class="form-group row">
     
    


    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">IC Number</label>
      <input type="text" name="fic" class="form-control" id="exampleInputPassword1" placeholder="Enter identification card number" value="<?php echo $row['u_id'];?>" required>
    </div>


    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Password</label>
      <input type="password" name="fpwd"class="form-control" id="exampleInputPassword1" placeholder="Please create a strong password" value="<?php echo $row['u_pwd'];?>" required>
    </div>



    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Full Name</label>
      <input type="text" name="fname" class="form-control"  id="exampleInputPassword1" placeholder="Enter your full name" value="<?php echo $row['u_name'];?>" required>
    </div>

   
    
    <div class="form-group">
      <label for="exampleTextarea" class="form-label mt-4">Address</label>
      <input class="form-control" id="exampleTextarea"name="fadd" rows="3"placeholder="Enter your complete address"  value="<?php echo $row['u_address'];?>"></input>
    </div>


     
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">Contact Number</label>
      <input type="text" name="fcontact" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your mobile number" value="<?php echo $row['u_phone'];?>"required>
    </div>


    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">License Number</label>
      <input type="text" name="flno"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your valid license number" value="<?php echo $row['u_lno'];?>" required>
    </div>

<input type="hidden" name="fuid" value="<?php echo $row['u_id']?>"  required>

  
<br><br><br><br><br><br><br>
<button type="submit" class="btn btn-dark">Modify</button>
<button href="customer.php"class="btn btn-warning">Back</button>
 
    
  </fieldset>
        </form>
    <br><br>
    </div>

<?php include 'footermain.php' ?>