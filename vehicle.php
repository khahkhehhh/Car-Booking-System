<?php 
include 'cbssession.php';
if(!session_id())
{
  session_start();
} 
include 'headerstaff.php';
include ('dbconnect.php');
 

//Retrieve individual bookings
$sql = "SELECT * FROM tb_vehicle    
    ";
$result = mysqli_query ($con,$sql);


?>


<div class="container">
     <br><h3>Car List</h3>
    <table class="table table-hover">
  <thead>
    <tr>

      <th scope="col">Vehicle</th>
      <th scope="col">Plate Number</th>
      <th scope="col">Model</th>
      <th scope="col">Type</th>
      <th scope="col">Year</th>
      <th scope="col">Total price</th>

    </tr>
  </thead>
  <tbody>

     <?php
     while($row=mysqli_fetch_array($result))
     {
         echo '<tr>';
         echo "<td><img width='280' height='150' src='img/".$row['v_pic']."'></td>";
         echo "<td>".$row['v_reg']."</td>";
         echo "<td>".$row['v_model']."</td>";
         echo "<td>".$row['v_type']."</td>";
         echo "<td>".$row['v_year']."</td>";
         echo "<td>".$row['v_price']."</td>";
        echo "<td>";
                echo "<a href= 'vehiclemodify.php?id=".$row['v_reg']."'class ='btn btn-success'>Modify</a> &nbsp";
               echo "<a href= 'vehicledelete.php?id=".$row['v_reg']."'class ='btn btn-dark'>Delete</a> &nbsp";
               
               echo "</td>";
         echo '</tr>';
     }

     ?>

 <div class="text-center">
<a href= 'vehicleadd.php'class ='btn btn-success'>+ Add New Car</a> &nbsp;

</div>
    
  </tbody>
</table>
</div><br><br><br>






<?php include 'footermain.php';?>
