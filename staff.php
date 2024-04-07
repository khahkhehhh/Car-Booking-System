 <?php 
include 'cbssession.php';
if(!session_id())
{
  session_start();
} 

include 'headerstaff.php';
include ('dbconnect.php');

//Retrieve booking (JOIN)


$sql1= "SELECT count(*) as TotalV FROM tb_vehicle";
$result1 = mysqli_query($con, $sql1);
$row1=mysqli_fetch_array($result1);

$sql2= "SELECT count(*) as TotalCust FROM tb_user WHERE u_type = '2'";
$result2 = mysqli_query($con, $sql2);
$row2=mysqli_fetch_array($result2);

$sql3= "SELECT count(*) as TotalBooking FROM tb_booking";
$result3 = mysqli_query($con, $sql3);
$row3=mysqli_fetch_array($result3);

$sql4=" SELECT * FROM tb_booking
    LEFT JOIN tb_user ON tb_booking.b_customer = tb_user.u_id
    LEFT JOIN tb_vehicle ON tb_booking.b_vehicle = tb_vehicle.v_reg
    LEFT JOIN tb_status ON tb_booking.b_status = tb_status.s_id
    ORDER BY b_id";
$result4 = mysqli_query($con, $sql4);
?>

<div class="container">

<br><br>

<div class="row">


<h2 >Inventory</h2>
<br><br>
 
    <div class="btn btn-primary">
      <legend><i class="fas fa-user-friends"></i> Total Customer :<?php  echo"&nbsp&nbsp".$row2['TotalCust']."";?></legend>
    </div>
 
<br><br>

      <div class="btn btn-success">
        <legend><i class="fas fa-car-side"></i> Total Vehicle :<?php  echo"&nbsp&nbsp".$row1['TotalV']."";?></legend>
      </div>
      <br><br>


      <div class="btn btn-danger">
        <legend><i class="fas fa-address-book"></i> Total Booking :<?php  echo"&nbsp&nbsp".$row3['TotalBooking']."";?></legend>
      </div>





<div class="container">
   <br><br><br><br>
  <h2>Booking Information</h2>
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">Booking ID</th>
          <th scope="col">Vehicle</th>
          <th scope="col">Customer</th>
          <th scope="col">Contact</th>
          <th scope="col">Pickup Date</th>
          <th scope="col">Return Date</th>
          <th scope="col">Total</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
      <tbody>
      <?php
          while($row4=mysqli_fetch_array($result4))
          {
            echo "<tr>"; //display
            echo "<td>".$row4['b_id']."</td>";
            echo "<td>".$row4['v_model']."</td>";
            echo "<td>".$row4['u_name']."</td>";
            echo "<td>".$row4['u_phone']."</td>";
            echo "<td>".$row4['b_pdate']."</td>";
            echo "<td>".$row4['b_rdate']."</td>";
            echo "<td>".$row4['b_total']."</td>";
            echo "<td>".$row4['s_desc']."</td>";
            echo "</tr>";
          }
        ?>
      </tbody>
    </table>

</div>

</div>
<br><br><br><br>
<?php include 'footermain.php'; ?>