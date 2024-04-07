<?php 
include 'cbssession.php';
if(!session_id())
{
  session_start();
} 


include 'headercustomer.php';
include ('dbconnect.php');

//get booking ID from URL
if (isset($_GET['id']))
{
    $bid = $_GET['id'];
}


$sql = "SELECT * FROM tb_booking WHERE b_id = '$bid' ";

$result = mysqli_query ($con,$sql);

$row=mysqli_fetch_array($result);

$sqla = "SELECT * FROM tb_vehicle";
$resulta = mysqli_query ($con,$sqla);
$rowa=mysqli_fetch_array($resulta)

?>


<br>
<div class="container">

  <div class="row">
  <div class="col-sm-6">

   <?php
     while($rowa=mysqli_fetch_array($resulta))
     {
      

         echo "<div class='col-sm-6'>
         <img width='280' height='150' src='img/".$rowa['v_pic']."'>
         </div>";
         echo "<div class='col-sm-6'> Car Plate: ".$rowa['v_reg']."
         <br> Model: ".$rowa['v_model']."  
         <br> Car Year: ".$rowa['v_year']." <br>  Price: RM ".$rowa['v_price']."

         </div>";
         echo "<br>";
       
         
      
     }

     ?>


<br><br>
<br><br>
</div>


 <div class="col-sm-6">
    <br><br><form method="POST" action="customermodifyprocess.php">
  <fieldset>
    <legend>Modify Form</legend>

     <label for="exampleSelect1" >Booking ID: <?php echo $bid;?>
     </label><br><br>

<div class="form-group">
      <label for="exampleSelect1">Select Vehicle</label>
      <?php
      $sqlv = "SELECT * FROM tb_vehicle";
      $resultv = mysqli_query($con, $sqlv);


      echo ' <select class="form-select" name ="fvec" id="exampleSelect1"> ';


      while($rowv=mysqli_fetch_array($resultv))

      {
        if ($rowv['v_reg']==$row['b_vehicle'])
        {
           echo "<option selected ='Selected' value = '".$rowv['v_reg']."'>".$rowv['v_model']."</option>";
        }
        else
        {
           echo "<option value = '".$rowv['v_reg']."'>".$rowv['v_model']."</option>";
        }
      }
      echo '</select>';

      ?>

 

    </div>
      
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">Pick Up Date</label>
      <input type="date" name="fpdate" class="form-control" id="exampleInputEmail1" value="<?php echo $row['b_pdate']?>" required>

     
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Return Date</label>
      <input type="date" name="frdate" class="form-control" id="exampleInputPassword1" value="<?php echo $row['b_rdate']?>"  required>
    </div>

      <input type="hidden" name="fbid" value="<?php echo $row['b_id']?>"  required>
 
 


<br><br><br>
 <button type="submit" class="btn btn-dark">Modify</button>
    <button type="reset" class="btn btn-warning">Clear Form</button>
  </fieldset>
</form>




</div>
</div>

</div><br><br><br><br><br><br>


<?php include 'footermain.php';?>
