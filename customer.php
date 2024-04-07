<?php 
include 'cbssession.php';
if(!session_id())
{
  session_start();
} 


include 'headercustomer.php';
include ('dbconnect.php');



?>
<br>
<div class="container">

  <div class="row">
  <div class="col-sm-6">

   <?php
   $sql = "SELECT * FROM tb_vehicle ";
  $result = mysqli_query ($con,$sql);

     while($row=mysqli_fetch_array($result))
     {
      ?>
         <div class="row">
          <div class="col-sm-6">
      
         <img src="<?php echo 'img/' .$row["v_pic"]; ?>" height="150" width="280">
       <?php  echo"Plate Number : ";
              echo $row["v_reg"]; ?>
              <br>

              <?php echo"Model : ";
              echo $row["v_model"]; ?>
                <br>
               <?php echo"Type : ";
               echo $row["v_type"]; ?>
              <br>
               <?php  echo"Year : ";
               echo $row["v_year"];?>
              
              <br>Price : RM <?php echo $row["v_price"];?>
              <br><br>
            </div>
          </div>
        <?php
        }
        ?>

<br><br>
<br><br>
    </div>

<br><br>
<br><br>




 <div class="col-sm-6">
    <br><br><form method="POST" action="customerprocess.php">
  <fieldset>
    <legend>Booking Form</legend>
     

    <div class="form-group">
      <label for="exampleSelect1" class="form-label mt-4">Select Vehicle</label>
      <?php
      $sql = "SELECT * FROM tb_vehicle";
      $result = mysqli_query($con, $sql);


      echo ' <select class="form-select" name ="fvec" id="exampleSelect1"> ';


      while($row=mysqli_fetch_array($result))
      {
        echo "<option value = '".$row['v_reg']."'>".$row['v_model']."</option>";
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



    
<br><br><br>
 <button type="submit" class="btn btn-dark">Book</button>
    <button type="reset" class="btn btn-warning">Clear Form</button>
  </fieldset>
</form>

 
<br><br><br> 




</div>
</div>



</div>

<?php include 'footermain.php';?>
